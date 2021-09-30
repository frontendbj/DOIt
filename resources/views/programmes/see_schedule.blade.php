@extends('layouts.app')

@section('title')
    programmes
@endsection

@section('style')
<link href="{{ asset('assets/fullCalendar/main.css') }}" rel="stylesheet">


<style>

  body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #script-warning {
    display: none;
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    color: red;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>

@endsection


@section('content')

<div class="page-content-wrapper ">
  <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Programme-U</a></li>
                                <li class="breadcrumb-item"><a href="#">programmes</a></li>
                                <li class="breadcrumb-item active">Formulaire</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tableau de bord</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
              
              <div id='loading'>loading...</div>

              <div id='calendar' class="col-md-12"></div>

            </div>
  </div>
</div>

@endsection


@section('script')
<script src="{{ asset('assets/fullcalendar/main.js') }}"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode='fr'
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale:initialLocaleCode,
      initialView: 'timeGridWeek',
      editable: true,
      navLinks: true, // can click day/week names to navigate views
      dayMaxEvents: true, // allow "more" link when too many events
      events: {
        url: "{{route('schedule.getdata')}}",
        failure: function() {
          document.getElementById('script-warning').style.display = 'block'
        }
      },
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }
    });

    calendar.render();
  });

</script>

@endsection

@extends('layouts.app')
@section('title')
    Processus
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
                                <li class="breadcrumb-item"><a href="#">Processus</a></li>
                                <li class="breadcrumb-item active">Liste</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Gestion des Processus</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                            Liste des Processus
                                {{-- <div class="float-right"> --}}
                                    <a class="float-right btn btn-square btn-primary" href="{!! route('processus.create') !!}">
                                        <i class="fa fa-plus-square"></i> Nouveau
                                    </a>
                                {{-- </div> --}}
                         </div>
                         <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            
                            @include('processus.table')
                            <div class="pull-right mr-3">

                            </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection


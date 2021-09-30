@extends('layouts.app')

@section('title')
    Dashboard
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
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    @if ($message = Session::get('info'))
                                    <div class="alert alert-warning col-md-12">
                                        <p><h6>Bienvenue Super Admin, {{ $message }}</h6></p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($message = Session::get('danger'))
                                    <div class="alert alert-danger">
                                        <p><h6>{{ $message }}</h6></p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            @if ($message = Session::get('error'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="mdi mdi-eye"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 align-self-center text-right">
                                                            <div class="m-l-10">
                                                                <h5 class="mt-0">{{$visites}}</h5>
                                                                <p class="mb-0 text-muted">Visite</p>
                                                            </div>
                                                        </div>                                                                                          
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 text-right align-self-center">
                                                            <div class="m-l-10 ">
                                                                <h5 class="mt-0">{{$programmes}}</h5>
                                                                <p class="mb-0 text-muted">Programme</p>
                                                            </div>
                                                        </div>                                                                                                                
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="row">
                                        <img src="{{ asset('assets/images/logo.jpeg') }}" style="opacity:0.5;" alt="logo" class="img-fluid">
                                    </div>

                                    
                                </div><!--end col-->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 mb-3">Calendar</h5>                                
                                            <div id="v-cal">
                                                <div class="vcal-header">
                                                    <button class="vcal-btn" data-calendar-toggle="previous">
                                                        <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                                        </svg>
                                                    </button>
                                    
                                                    <div class="vcal-header__label" data-calendar-label="month">
                                                        March 2017
                                                    </div>
                                    
                                    
                                                    <button class="vcal-btn" data-calendar-toggle="next">
                                                        <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="vcal-week">
                                                    <span>Mon</span>
                                                    <span>Tue</span>
                                                    <span>Wed</span>
                                                    <span>Thu</span>
                                                    <span>Fri</span>
                                                    <span>Sat</span>
                                                    <span>Sun</span>
                                                </div>
                                                <div class="vcal-body" data-calendar-area="month"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                   
                                </div><!--end col-->
                            </div><!--end row-->

                            
                            

                           
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->
@endsection
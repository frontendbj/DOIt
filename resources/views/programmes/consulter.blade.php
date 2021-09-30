@extends('layouts.app')
@section('title')
    programmes
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
                                <li class="breadcrumb-item active">Liste-par-classe</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Gestion des programmes</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="mt-0 header-title"><i class="fa fa-align-justify"></i> Programmes du {{ date('d-m-Y', strtotime($programme->date_debut))}} au {{$programme->date_fin}}</h4>
                                    <p class="text-muted mb-4 font-14"></p>
                                </div>
                                <div class="col-md-2 text-left">
                                    <a class="float-right btn btn-square btn-info" href="{!! route('programmes.create') !!}">
                                        <i class="fa fa-download"></i> Download all            
                                    </a>
                                </div>
                                <div class="col-md-2 text-right">    
                                    <a href="{{ route('programmes.index')}}" class="btn btn-primary"> < Retour </a>
                                </div>
                            </div>
                         </div>
                         <div class="card-body">
                            <table id="dataTable" class="table compact table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>CLASSES</th>
                                    <th width="280px">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classes as $key => $classe)
                                        <tr>
                                            <td>{{ $classe->name }}</td>
                                            <td>
                                                <a href="{{route('programmes.see', ['id'=>$programme->id, 'classe'=>$classe->id])}}" class='btn btn-sm btn-square btn-success'><li class="fa fa-eye"></li> </a> 

                                                <a href="{{route('test.pdfview', ['id'=>$programme->id, 'classe'=>$classe->id])}}" class='btn btn-sm btn-square btn-primary'><li class="fa fa-download"></li> </a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection


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
                                <li class="breadcrumb-item active">Formulaire</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Création d'un nouveau programme</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h4 class="mt-0 header-title">Formulaire</h4>
                                    <p class="text-muted mb-4 font-14"></p>
                                </div>
                                <div class="col-md-3 text-right">
                                  <a href="{{ route('home')}}" class="btn btn-primary"> < Retour </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Un problème est survenue.<br><br>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif

                                {!! Form::open(array('route' => 'programs.store','method'=>'POST')) !!}
                                    
                                <div class="row">
                                    <div class="offset-md-3 col-md-6 offset-md-3"> 
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Mission</label>
                                            <div class="col-sm-12">
                                                {!! Form::text('name', null, array('placeholder' => 'Désignation de la mission','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Site</label>
                                            <div class="col-sm-12">
                                                {!! Form::text('city', null, array('placeholder' => 'Désignation du site à visiter ','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Date début</label>
                                            <div class="col-sm-12">
                                                {!! Form::date('day', null, array('placeholder' => 'Date de la visite','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                  
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Heure Debut</label>
                                            <div class="col-sm-12">
                                                {!! Form::time('time_start', null, array('placeholder' => 'Heure debut de la vsite','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Heure de Fin </label>
                                            <div class="col-sm-12">
                                                {!! Form::time('time_end', null, array('placeholder' => 'Heure fin de la visite','class' => 'form-control')) !!}
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">&nbsp;</label>
                                            <div class="col-sm-12">
                                                <input type="hidden" name="etat" value="0">
                                                <input type="submit" name="submit" class="btn btn-primary col-sm-12" value="Créer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
            
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->





        </div><!-- container -->

    </div> <!-- Page content Wrapper -->


@endsection


@extends('layouts.app')

@section('title')
    classes
@endsection

@section('content')


   <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home')}}">Programme-U</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('classes.index') }}">classes</a></li>
                                <li class="breadcrumb-item active">Modification</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modification d'un classe</h4>
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
                                  <a href="{{ route('classes.index')}}" class="btn btn-primary"> < Retour </a>
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

                               {!! Form::model($classe, ['route' => ['classes.update', $classe->id], 'method' => 'patch']) !!}
                                <div class="row">
                                    <div class="offset-md-3 col-md-6 offset-md-3"> 
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">Désignation</label>
                                            <div class="col-sm-12">
                                                {!! Form::text('name', null, array('placeholder' => 'Nom de la classe','class' => 'form-control')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-12 col-form-label">&nbsp;</label>
                                            <div class="col-sm-12">
                                                <input type="submit" name="submit" class="btn btn-primary col-sm-12" value="Enregistrer">
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


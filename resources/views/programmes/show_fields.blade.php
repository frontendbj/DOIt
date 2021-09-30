
        <div class="col-sm-12">
            <!-- Email Field -->
             <b>{!! Form::label('email', 'Rôle de l\'utilisateur :') !!}</b>
             {!! $user->roles->first()->name !!}
        </div> <br>

        <div class="col-sm-12">
            <!-- Name Field -->
            <b>{!! Form::label('name', 'Nom d\'utilisateur :') !!}</b>
            {!! $user->name !!}
        </div> <br>

        <div class="col-sm-12">
            <!-- Email Field -->
           <b> {!! Form::label('email', 'Email :') !!}</b>
             {!! $user->email !!}
        </div> <br>



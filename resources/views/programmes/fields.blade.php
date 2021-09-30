
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Rôle :') !!}
    {!! Form::select('role', $roles, $userRole, ['class' => 'form-control ']) !!}
</div>


<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mots de passe :') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>


<!-- confirm password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirm_password', 'Confirmer mots de passe :') !!}
    {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>

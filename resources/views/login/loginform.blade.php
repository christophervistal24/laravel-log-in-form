@extends('layouts.default')
@section('content')
{!! Form::open(array('url' => 'login' , 'method' => 'post')) !!}
<h1 class="display-3 text-center">Login</h1>
<!-- if there are login errors, show them here -->
{{ $errors->first('email') }}
{{ $errors->first('password') }}
<div class="form-group">
    {!! Form::label('email', 'Email Address : ') !!}
    {!! Form::email('email', Input::old('email'), ['placeholder' => 'awesome@awesome.com' , 'class' => 'form-control rounded-0' , 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password : ') !!}
    {!! Form::password('password' ,['class'=>'form-control rounded-0' , 'required']) !!}
</div>
{!! Form::submit('Submit!' , ['class'=> 'btn btn-primary border-0 rounded-0']) !!}
{!! Form::close() !!}
@stop
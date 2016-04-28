@extends('leauts.default')
@section('content')

<div class="reg">
@if($errors)
@foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
@endforeach
    @endif

    <h2>Авторизация</h2>
    {{Form::open (array('url'=>'auth/login',
						'method'=>'POST'))}}
	{{Form::text('username','',array('placeholder'=>'логин'))}}<br>

	{{Form::password('password','',array())}}<br>

	{{Form::submit('Войти')}}<br>
	
	{{Form::token() .Form::close();}}
</div>

@stop
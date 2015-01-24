@extends ('leauts.default')
@section('content')
<div class="reg">
@if($errors)
@foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
@endforeach
    @endif
<h2>Регистрация</h2>
	{{Form::open (array('url'=>'auth/reg',
						'method'=>'POST'))}}
	{{Form::text('username','',array('placeholder'=>'login'))}}<br>
	
	{{Form::text('email','',array('placeholder'=>'login'))}}<br>
	
	{{Form::text('username','',array('placeholder'=>'E-mail'))}}<br>
	
	{{Form::password('password','',array())}}<br>
	
	{{Form::submit('Регистрация')}}<br>
	
	{{Form::token() .Form::close();}}
</div>
@stop
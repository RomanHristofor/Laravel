@extends('leauts.default')
@section('content')

<h2>Добро пожаловать в Кабинет</h2>
<h3>Вы можете оставить Ваш комментарий</h3>

   <p>Пожалуйста, заполните обязательные поля.</p>
@if($errors)
@foreach($errors->all() as $err)
<div style="color:red">{{$err}}</div>
@endforeach
@endif
    {{Form::open(array('url'=>'cabinet','method'=>'POST'))}}

	{{Form::text('username','',array('placeholder'=>'Логин'))}}<br>

    <p>Введите номер телефона:</p>{{Form::text('phone','',array('placeholder'=>'Телефон'))}}<br>

    <p>Введите Ваш комментарий:</p>{{Form::text('body','',array('placeholder'=>'Текст комментария'))}}<br>

	{{Form::submit('Оставить комментарий')}}<br>

	{{Form::token() .Form::close();}}

@stop
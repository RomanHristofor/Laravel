@extends('leauts.default')
@section('content')

<h2>Добро пожаловать в Кабинет</h2>
<h3>Вы можете оставить Ваш комментарий</h3>

   <p>Пожалуйста, заполните обязательные поля.</p>

    {{Form::open(array('url'=>'auth/login','method'=>'POST'))}}

	{{Form::text('username','',array('placeholder'=>'Логин'))}}<br>

    <p>Введите номер телефона:</p>{{Form::text('phone','',array('placeholder'=>'Телефон'))}}<br>

    <p>Введите Ваш комментарий:</p>{{Form::text('body','',array('placeholder'=>'Текст комментария'))}}<br>

	{{Form::submit('Оставить комментарий')}}<br>

	{{Form::token() .Form::close();}}

@stop
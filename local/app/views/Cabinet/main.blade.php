@extends('leauts.default')
@section('content')
<div class="reg">
@if($errors)
@foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
@endforeach
    @endif

<h2>Добро пожаловать в Кабинет</h2>
<div>
<a href="{{asset('adminka')}}">{{Form::submit('Перейти в админку')}}</a>
    <a href="{{asset('adminka/orders')}}">{{Form::submit('Перейти в корзину заказов')}}</a>
</div>

</div>
@stop
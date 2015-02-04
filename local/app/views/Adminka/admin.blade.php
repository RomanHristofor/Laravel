@extends('leauts.default')
@section('content')

<h2>Добро пожаловать в Админку</h2>
<a href="{{asset('adminka/forma')}}">{{Form::submit('Добавить Фото')}}</a>
<a href="{{asset('adminka/forma2')}}">{{Form::submit('Редактировать Фото')}}</a>
<table width="100%" border="1px">

    <tr width="100%">
        <td width="200px">Фото</td>
                  <td>Название</td>
        <td width="200px">Действие</td>
    </tr>

    @foreach($fotos as $foto)
    <tr>
        <td>{{$foto->photo}}</td>
        <td>{{$foto->name}}</td>
        <td><a href="#" onclick="delete_position('{{asset('adminka/delete/'.$foto->id)}}','Вы действительно хотите удалить?')">Удалить</a></td>
    </tr>

    @endforeach

</table>

@stop


@extends('leauts.default')
@section('content')

<h2>Добро пожаловать в Админку</h2>
<a href="{{asset('adminka/forma')}}">{{Form::submit('Добавить Фото')}}</a>

<table width="100%" border="1px">

    <tr width="100%">
        <td width="200px">Фото</td>
                  <td>Название</td>
        <td width="200px">Действие</td>

    </tr>

    @foreach($fotos as $foto)
    @if($foto->showhide == 'show')
    <?php $showhide = 'adminka/hide/'.$foto->id;?>
    <?php $showhide_world = 'Скрыть';?>
    @else
    <?php $showhide = 'adminka/show/'.$foto->id;?>
    <?php $showhide_world = 'Отобразить';?>
    @endif
    <tr>
        <td>{{$foto->photo}}</td>
        <td>{{$foto->name}}</td>
        <td><a href="#" onclick="delete_position('{{asset('adminka/delete/'.$foto->id)}}','Вы действительно хотите удалить?')">Удалить фото</a><br>
            <a href="{{asset('adminka/edit/'.$foto->id)}}">Редактировать Фото</a><br>
            <a href="{{$showhide}}">{{Form::submit($showhide_world)}}</a>
        </td>

    </tr>

    @endforeach

</table>

@stop


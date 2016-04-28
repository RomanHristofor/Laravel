@extends('leauts.default')
@section('content')

<h2>Корзина заказов -Full</h2>
<table width="100%" border="1px">
    <tr>
        <td width="200px">Имя</td>
        <td width="">Контактные данные</td>

        <td width="">Заказ</td>
        <td width="">Статус</td>
        <td width="200px">Действие</td>
    </tr>
@foreach($fotos as $one)
    <tr>

        <td>{{$one->name}}</td>
        <td>{{$one->phone}}</td>
        <td> <? $arr = unserialize($one->body)?>
        <?print_r($arr)?>
        </td>
        <td>-</td>
        <td><a href="#" onclick="delete_position('{{asset('basket/delete/'.$one->id)}}','Вы действительно хотите удалить?')">Удалить Заказ</a></td>
    </tr>
@endforeach
</table>
@stop

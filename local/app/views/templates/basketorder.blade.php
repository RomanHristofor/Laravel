@extends ('leauts.default')
@section('content')
<?$price = '0.5$';?>
<?$itogo = 0;?>
<h2>Корзина заказов</h2>
<table width="100%" border="1px">
    <tr>
        <td width="200px">Фото</td>
        <td width="">Название</td>
        <td>Стоимость</td>
        <td width="">Количество</td>
        <td width="">Общая стоимость</td>
        <td width="200px">Действие</td>
    </tr>
    @foreach($_COOKIE as $key => $value)
    <?$sum = $price * $value;?>
    <?$key = (int)$key;?>
    <?$itogo += $sum;?>
    @if($key > 0)
    <!--{{$_COOKIE[$key]}}вывод кук на экран-->
    <?$tovs = DB::table('foto')->where('id','=',$key)->first();?>
    @if(isset($tovs->id))
    <tr>
        <td>{{$tovs->photo}}</td>
        <td>{{$tovs->name}}</td>
        <td>{{$price}}</td>
        <td>{{Form::open(array('url'=>'basket/index/'.$key))}}
            {{Form::number('colvo',$value,array('min'=>'0','class'=>'size','max'=>999))}}шт
            {{Form::submit('изменить')}}
            {{Form::close()}}</td>
        <td>{{$sum.'$'}}</td>
        <td><a href="#" onclick="delete_position('{{asset('basket/delete/'.$tovs->id)}}','Вы действительно хотите удалить?')">Удалить фото</a></td>
    </tr>
    @endif
    @endif
    @endforeach
    <tr>
        <td colspan="4"><h2>Итого:</h2></td>
        <td colspan="2">{{$itogo.'$'}}</td>
    </tr>
</table>

        {{Form::open (array('url'=>'basket/orders','method'=>'POST'))}}

        {{Form::text('name','',array('placeholder'=>'Ваше имя*'))}}<br>

        {{Form::text('phone','',array('placeholder'=>'Ваш телефон*'))}}<br>

        {{Form::submit('Подтвердить заказ')}}<br>
        <!--<input type="reset" value="Очистить">-->

        {{Form::token() .Form::close();}}

@stop

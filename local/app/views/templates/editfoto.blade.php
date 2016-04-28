@extends('leauts.default')
@section('content')
<div class="reg">
@if($errors)
@foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
@endforeach
    @endif


<div id="heading">
    <h4>Редактировать Фото</h4>

    {{Form::open(array('url'=>'adminka/edit/'.$id,'files'=>true))}}

    {{Form::text('name',Input::Old('name'))}}<br>



    {{Form::submit('Редактировать')}}<br>

    {{Form::token() .Form::close();}}
</div>
</div>
@stop
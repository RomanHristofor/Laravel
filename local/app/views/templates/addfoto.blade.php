@extends ('leauts.default')
@section('content')
<div class="reg">
@if($errors)
@foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
@endforeach
    @endif

<div id="heading">
    <h4>Добавить Фото</h4>

    @if($errors)
    @foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
    @endforeach
    @endif
    {{Form::open(array('url'=>'adminka/forma','files'=>true))}}

    {{Form::text('name',Input::Old('name'))}}<br>

    {{Form::file('file')}}<br>

    {{Form::submit('Добавить')}}<br>

    {{Form::token() .Form::close();}}


</div>
</div>
@stop
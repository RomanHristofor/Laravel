</div>
<div id="heading">
    <h4>Редактировать Фото</h4>

    @if($errors)
    @foreach($errors->all() as $err)
    <div style="color:red">{{$err}}</div>
    @endforeach
    @endif
    {{Form::open(array('url'=>'adminka/forma2','files'=>true))}}

    {{Form::text('name',Input::Old('name'))}}<br>

    {{Form::file('file')}}<br>

    {{Form::submit('Редактировать')}}<br>

    {{Form::token() .Form::close();}}
</div>
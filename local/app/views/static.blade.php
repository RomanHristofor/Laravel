@extends('leauts.default')
@section('content')
<div class="col-sm-3">
    <div class="sidebar-module sidebar-module-inset">
        <h2>{{$text->name}}</h2>
        <h4>Приветствую Вас дорогие друзья!</h4>
        <p>Меня зовут Роман, я свадебный фотограф!</p>
        <p>Понравились мои работы, позвоните мне!</p>
    </div>

    <div class="sidebar-module">
        <h2>{{$text->body}}</h2>
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div>

@stop

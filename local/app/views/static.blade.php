@extends('leauts.default')
@section('content')

<div class="">
    <h2 align="center">{{$text->name}}</h2>
    <div class="">

    	<blockquote>
    				<p>
    					&ldquo;Приветствую Вас дорогие друзья!<br> Меня зовут Роман, я свадебный фотограф.&rdquo;

    				</p>
    				<cite></cite>
    	</blockquote>

    </div>

    <div class="">

        <section>
        {{$text->body}}
         </section>
            @if($text->url=='index')
            @include('templates/carusel')
            @endif
            @if($text->url=='about')
            @include('templates/comments')
            @endif

            <!-- Placed at the end of the document so the pages load faster -->
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="media/bootstrap/js/bootstrap.min.js"></script>
            <script src="media/bootstrap/js/docs.min.js"></script>-->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->



    </div>
</div>

@stop

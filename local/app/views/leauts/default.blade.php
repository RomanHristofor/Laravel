<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>ddvsdvdv</title>

@foreach($style as $style)
    {{HTML::style($style)}}
    @endforeach


@foreach($script as $script)
    {{HTML::script($script)}}
    @endforeach

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">


            <a href="{{asset('/')}}">Главная</a>
            <a href="{{asset('about')}}">Обо мне</a>

        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Профессиональная foto & video съемка</h1>
        <p class="lead blog-description">Художественная фотография и видео, обслуживание свадеб.</p>
    </div>

    <div class="row2">

        <div class="col-sm-9 blog-main">

@yield('content')

        </div>



    </div>

</div>

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="media/bootstrap/js/bootstrap.min.js"></script>
<script src="media/bootstrap/js/docs.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

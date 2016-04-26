<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?=$title;?></title>

	<!--<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">

	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->

@foreach($style as $style)
    {{HTML::style($style)}}
    @endforeach
@foreach($script as $script)
    {{HTML::script($script)}}
    @endforeach

</head>
<body>
	<div id="wrapper">
		<header>
			<a href="/"><img src='{{asset("media/image/logo.png")}}' alt="Khristofor Studio"></a>
		</header>
		<nav>
			<ul class="top-menu">
				<li><a href="{{asset('/')}}">Home</a></li>
                <li><a href="{{asset('fotos')}}">Wedding Foto</a></li>
                <li><a href="">Love Story</a></li>
                <li><a href="">Wedding Video</a></li>
                <li><a href="{{asset('basket')}}">Basket order</a></li>
                <li><a href="{{asset('auth/reg')}}">Registration</a></li>
                <li><a href="{{asset('about')}}">About</a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>
                {{$links}}
            </ul>
        </nav>
@yield('content')

		<!--<aside>
			<nav>
				<ul class="aside-menu">
					<li><a href="{{asset('fotos')}}">Wedding Foto</a></li>
					<li><a href="">Love Story</a></li>
					<li><a href="">Wedding Video</a></li>


				</ul>
			</nav>

			<p>
				<img src='{{asset("media/image/my.jpg")}}' width="230" height="180" alt="">
			</p>
		</aside>-->



<br style="clear:both" />
	<footer>
		<div id="footer">
			<div id="WeddingFoto">
				<h3 align="">WEDDING FOTO</h3>
                <a href="">Wedding Foto</a>
			</div>
			<div id="LoveStory">
				<h3>LOVE STORY</h3>
				<div>
					<a href="">Love Story</a>
				</div>
			</div>
			<div id="WeddingVideo">
            	<h3>WEDDING VIDEO</h3>
                <a href="">Wedding Video</a>
            </div>
			<div id="social">
				<h3>SOCIAL NETWORKS</h3>
				<a href="http://vk.com" target="blank"class="">vk</a><br>
				<!--<a href="http://twitter.com" target="blank"class="">twitter</a><br>
				<a href="http://facebook.com" target="blank"class="">facebook</a><br>-->
			</div>
			<div id="footer-logo">
				<!--<a href="/"><img src="media/image/footer-logo.png" alt="Whitesquare logo"></a>
				<p>Copyright &copy; 2012 Whitesquare. A <a href="http://pcklab.com">pcklab</a> creation </p>-->
			</div>
		</div>
	</footer>
</div>
</body>
</html>
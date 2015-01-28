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
			<a href="/"><img src="media/image/logo.png" alt="Whitesquare logo"></a>
			<form name="search" action="#" method="get">
				<input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
			</form>
		</header>
		<nav>
			<ul class="top-menu">
				<li><a href="{{asset('/')}}">HOME</a></li>
				<!--<li class="active">ABOUT US</li>
				<li><a href="/services/">Wedding Foto</a></li>-->

				<li><a href="">REVIEWS</a></li>

				<li><a href="{{asset('about')}}">ABOUT</a></li>

				<li><a href="{{asset('')}}">CONTACT</a></li>

                <li><a href="{{asset('auth/reg')}}">CHECK IN</a></li>
                {{$links}}


			</ul>
		</nav>
		<div id="heading">
			<h3></h3>
		</div>
		<aside>
			<nav>
				<ul class="aside-menu">
					<li><a href="">Wedding Foto</a></li>
					<li><a href="">Love Story</a></li>
					<li><a href="">Wedding Video</a></li>

				</ul>
			</nav>

			<p>
				<img src="media/image/my.jpg" width="230" height="180" alt="">
			</p>
		</aside>
@yield('content')

	</div>


	<footer>
		<div id="footer">
			<div id="twitter">
				<h3>TWITTER FEED</h3>

			</div>
			<div id="sitemap">
				<h3>SITEMAP</h3>
				<div>
					<a href="/home/">Home</a>
					<a href="/about/">About</a>
					<a href="/services/">Services</a>
				</div>
				<div>
					<a href="/partners/">Partners</a>
					<a href="/customers/">Support</a>
					<a href="/contact/">Contact</a>
				</div>
			</div>
			<div id="social">
				<h3>SOCIAL NETWORKS</h3>
				<a href="http://twitter.com/" class="social-icon twitter"></a>
				<a href="http://facebook.com/" class="social-icon facebook"></a>
				<a href="http://plus.google.com/" class="social-icon google-plus"></a>
				<a href="http://vimeo.com/" class="social-icon-small vimeo"></a>
				<a href="http://youtube.com/" class="social-icon-small youtube"></a>
				<a href="http://flickr.com/" class="social-icon-small flickr"></a>
				<a href="http://instagram.com/" class="social-icon-small instagram"></a>
				<a href="/rss/" class="social-icon-small rss"></a>
			</div>
			<div id="footer-logo">
				<a href="/"><img src="media/image/footer-logo.png" alt="Whitesquare logo"></a>
				<p>Copyright &copy; 2012 Whitesquare. A <a href="http://pcklab.com">pcklab</a> creation </p>
			</div>
		</div>
	</footer>
</body>
</html>
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
        <h3>{{$text->body}}</h3>
<!--слайдшоу-->
            <link href="media/bootstrap/bootstrap.min.css" rel="stylesheet">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="media/image/1/1.jpg" alt="...">
                        <div class="carousel-caption">                </div>
                    </div>

                    <div class="item">
                        <img src="media/image/1/2.jpg" alt="...">
                        <div class="carousel-caption">             </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/3.jpg" alt="...">
                        <div class="carousel-caption">            </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/4.jpg" alt="...">
                        <div class="carousel-caption">             </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/5.jpg" alt="...">
                        <div class="carousel-caption">            </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/7.jpg" alt="...">
                        <div class="carousel-caption">             </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/8.jpg" alt="...">
                        <div class="carousel-caption">            </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/11.jpg" alt="...">
                        <div class="carousel-caption">             </div>
                    </div>
                    <div class="item">
                        <img src="media/image/1/12.jpg" alt="...">
                        <div class="carousel-caption">            </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Placed at the end of the document so the pages load faster -->
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="media/bootstrap/js/bootstrap.min.js"></script>
            <script src="media/bootstrap/js/docs.min.js"></script>-->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
        </section>

    </div>
</div>

@stop

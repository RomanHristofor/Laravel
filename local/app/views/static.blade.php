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

   		<figure>
  			<img src="media/image/1/1.JPG" width="640" height="480" alt="">
    	</figure>
        			<h2>Саша & Маша</h2>
            			<div class="team-row">
            				<figure>
            					<img src="media/image/1/2.JPG" width="96" height="96" alt="">
            					<figcaption><span>Саша & Маша</span></figcaption>
            				</figure>
            				<figure>
            					<img src="media/image/1/3.JPG" width="96" height="96" alt="">
            					<figcaption><span>Коля & Оля</span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            			</div>
            			<div class="team-row">
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            				<figure>
            					<img src="images/sample.png" width="96" height="96" alt="">
            					<figcaption><span></span></figcaption>
            				</figure>
            			</div>
        </section>

    </div>
</div>

@stop

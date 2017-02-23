
@extends('layouts.default')

@section('content')

<title>Silver Dollar Drink Specials</title>
<meta name="description" content="A review of The Silver Dollar's local daily food and drink specials in Menomonie." />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="The Silver Dollar">
<meta itemprop="description" content="A review of The Silver Dollar's local daily food and drink specials in Menomonie.">
<meta itemprop="image" content="http://menomoniedrinkspecials.com/mds.png">

<!-- Open Graph data -->
<meta property="og:title" content="The Silver Dollar's Drink Specials" />
<meta property="og:type" content="local" />
<meta property="og:url" content="http://www.menomoniedrinkspecials.com/blog/silver" />
<meta property="og:image" content="http://menomoniedrinkspecials.com/mds.png" />
<meta property="og:description" content="Your one stop for all up to date local drink specials in Menomonie for the Silver Dollar for every day of the week." />
<meta property="og:site_name" content="The Silver Dollar's Drink Specials" />
<meta property="article:published_time" content="2017-01-24T05:59:00+01:00" />
<meta property="article:modified_time" content="2017-01-24T19:08:47+01:00" />
<meta property="article:section" content="Silver Dollar Blog Page" />
<meta property="article:tag" content="The Silver Dollar's Drink Specials" />

<style>
img {
    max-width: 25%;
    max-height: auto;
    min-height: auto;
    min-width: auto;
    box-shadow: 2px 2px 2px 2px #000;
    float:left;
    margin: 10px;
   
}

div {
	 	font-family: Tahoma, Geneva, sans-serif;
}

h1 {
	 	font-family: Georgia, serif;
	 	font-color: gold;
	 	background-color: #41706E;
	 	border-radius: 15px;
	 	color: #C4D0CF;
}

#blogPost
{
	background-color:  #C4D0CF;
}

</style>


 <div id="blogPost">
 	<div id="myHeader">
		<div class="row">
			<div class="col-md-12">
				<h1 style="text-align: center;">Silver Dollar</h1>
			</div>
		</div>
	</div>
	<div class="row">
	  <div class="col-md-12">
	  <img src="{{asset ('assets/img/silver1.jpg')}}">
	  <img src="{{asset ('assets/img/silver2.jpg')}}" style="float:right;">
	    <p>Sitting in the Silver Dollar you can not only enjoy a variety of Menomonie drink specials each day of the week, but you can also enjoy the peaceful rustic charm that is this bar. You can choose to take a seat at a table near the window and watch bustling downtown Menomonie while you enjoy your meal; belly up to the bar for some drinks, food, and television; or enjoy a nice spring or summer day with outdoor seating. There is also a side room if you prefer to enjoy your drinks and meal a bit farther away from the front door on a chilly day. If you ever need to look up the drink specials for a certain day of the week, check out the <a href="http://www.menomoniedrinkspecials.com">Daily Drink Specials</a>.</p>
	    
	    </br>   	
	    <p>The Silver Dollar also occasionally has hosted bands in their back room to entertain patrons.  The spacious bar allows for a clean laid back atmosphere with old photos from prohibition era, offering glimpses into the history of bars in America. The aged exposed brick interior adds to the old time rustic charm of these photos and is perfectly accented by a variety of exposed Edison bulbs hanging from the ceiling. </p>

	    </div>
	    </div>
	    <div class="row">
	    <div class="col-md-12">
	    <img src="{{asset ('assets/img/silver3.jpg')}}">
	    </br>
	    <p>If you’re a beer drinker the Silver Dollar has a multitude of beers on tap for you to choose from as well as silos and bottles. They also offer the occasional special beer event at the bar. The Silver Dollar has drink specials 7 days a week, and also offers some impressive food specials certain days of the week. </p>
	    <img src="{{asset ('assets/img/silver4.jpg')}}" style="float:right;">
		</br>
	    <p>If you would like to spend some time with your friends and avoid the usual hectic and rambunctious bar scene, then The Abbey is a great Menomonie bar to check out. There is an old-fashioned and comfortable feeling in the air at this pub, and it has become like a second home for many of its patrons. The staff are nice, the food and drink specials are some of the best in Menomonie, and simply put, it is a lovely place to unwind and relax for a while. Happy Hour is every weekday with a dollar off all drinks from 11am until 6pm.</p>
	 
	 </div>
	</div>
  </div>

@stop

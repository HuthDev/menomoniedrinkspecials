
@extends('layouts.default')

@section('content')


<!-- Place this data between the <head> tags of your website -->
<title>Abbey Drink Specials</title>
<meta name="description" content="A review of The Abbey local daily food and drink specials in Menomonie." />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="The Abbey">
<meta itemprop="description" content="A review of The Abbey local daily food and drink specials in Menomonie.">
<meta itemprop="image" content="http://menomoniedrinkspecials.com/mds.png">

<!-- Open Graph data -->
<meta property="og:title" content="The Abbey in Menomonie, WI" />
<meta property="og:type" content="local" />
<meta property="og:url" content="http://www.menomoniedrinkspecials.com/blog/abbey" />
<meta property="og:image" content="http://menomoniedrinkspecials.com/mds.png" />
<meta property="og:description" content="A review of The Abbey in Menomonie." />
<meta property="og:site_name" content="The Abbey's Drink Specials" />
<meta property="article:published_time" content="2017-01-24T05:59:00+01:00" />
<meta property="article:modified_time" content="2017-01-24T19:08:47+01:00" />
<meta property="article:section" content="Abbey Blog Page" />
<meta property="article:tag" content="The Abbey's Drink Specials" />


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

#content
{
	max-width: 900px;
	margin: 0 auto;
}

</style>

<div id="blogPost">
 	<div id="myHeader">
		<div class="row">
			<div class="col-md-12">
				<h1 style="text-align: center;">The Abbey</h1>
			</div>
		</div>
	</div>
	<div class="row">
	  <div class="col-md-12">
	  <img src="{{asset ('assets/img/abbey1.jpg')}}">
	  <img src="{{asset ('assets/img/abbey2.jpg')}}" style="float:right;">
	    <p>The Abbey, a local eatery and pub hailing from Menomonie, Wisconsin, is home to a number of unique drinks and food specials that locals flock to. This newly renovated location has over 16 beers on tap, as well as a wide selection of bottled brews and spirits to choose from. Not only does The Abbey have great drink specials and delicious food, but it also has a variety of seating sections for its guests. You can choose to sit at the polished wooden bar, one of the booths, around the pool table, or outside on their expansive patio. If you ever need to look up the drink specials for a certain day of the week, check out the <a href="http://www.menomoniedrinkspecials.com">Daily Drink Specials</a>.</p>
	    
	    </br>   	
	    <p>This pub is designed to resemble an old-fashioned church (hence its name), so the interior of the bar boasts wide arches and ornate furniture that almost seem out of place compared to other Menomonie bars; this is of course a compliment! One has a variety of subjects to admire here, from its architecture to its lively patrons. Relaxing on the patio during summer’s warm nights is one of the greatest charms of The Abbey, and locals are sure to find their friends grabbing a beer at this enchanting Menomonie pub no matter what night they visit.</p>
	   
	 	</br>
	    <p>There are many entertainment options that the Abbey offers, and patrons will find something new to enjoy every day of the week. Tuesday is karaoke night at The Abbey, and this is your opportunity to show your friends and strangers who is the most pop-culture savvy. This pub also uses an outside projector to display the big games during summer, which allows you to bond with local bar-goers as you cheer for your favorite teams. During the winter the Abbey plays these games and classic movies on several large flat-screen TVs, allowing you to have somewhere to go and watch your favorite teams with your friends. </p>
	        
	
	    </div>
	    </div>
	    <div class="row">
	    <div class="col-md-12">
	    <img src="{{asset ('assets/img/abbey4.jpg')}}">
	    </br>
	    <p>You don’t know have to go on a specific day of the week to enjoy old-fashioned pub entertainment. The Abbey has a digital Jukebox that allows guests to play their favorite songs from any part of the bar. All you have to do is install their karaoke app, add some credits, and then enjoy the music you love to hear the most. You can also take advantage of an old-fashioned pool table and compete with strangers or friends. There is also a fun and classic arcade game, a gambling machine, and a digital photo booth.</p>
	    <img src="{{asset ('assets/img/abbey3.jpg')}}" style="float:right;">
		</br>
	    <p>If you would like to spend some time with your friends and avoid the usual hectic and rambunctious bar scene, then The Abbey is a great Menomonie bar to check out. There is an old-fashioned and comfortable feeling in the air at this pub, and it has become like a second home for many of its patrons. The staff are nice, the food and drink specials are some of the best in Menomonie, and simply put, it is a lovely place to unwind and relax for a while.</p>
	 
	 </div>
	</div>
  </div>
@stop


@extends('layouts.default')

@section('content')

<title>The Log Jam Drink Specials</title>
<meta name="description" content="A review of The Log Jam's local daily food and drink specials in Menomonie." />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="The Abbey">
<meta itemprop="description" content="A review of The Log Jam's local daily food and drink specials in Menomonie.">
<meta itemprop="image" content="http://menomoniedrinkspecials.com/mds.png">

<!-- Open Graph data -->
<meta property="og:title" content="The Log Jam's Drink Specials" />
<meta property="og:type" content="local" />
<meta property="og:url" content="http://www.menomoniedrinkspecials.com/blog/log" />
<meta property="og:image" content="http://menomoniedrinkspecials.com/mds.png" />
<meta property="og:description" content="Your one stop for all up to date local drink specials in Menomonie for The Log Jam for every day of the week." />
<meta property="og:site_name" content="The Log Jam's Drink Specials" />
<meta property="article:published_time" content="2017-01-24T05:59:00+01:00" />
<meta property="article:modified_time" content="2017-01-24T19:08:47+01:00" />
<meta property="article:section" content="Log Jam Blog Page" />
<meta property="article:tag" content="The Log Jam's Drink Specials" />

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
				<h1 style="text-align: center;">Log Jam</h1>
			</div>
		</div>
	</div>
	<div class="row">
	  <div class="col-md-12">
	  <img src="{{asset ('assets/img/log1.jpg')}}">
	  <img src="{{asset ('assets/img/log2.jpg')}}" style="float:right;">
	    <p>Log Jam is a restaurant and bar combo located on Broadway Street. During the day, patrons can order a variety of meals from burgers and chips to appetizers and salads. Special dishes are served each week, so be sure to ask your server for details. The bar has drink specials for every day of the week. Menomonie Drink Specials lists the deals that run Monday through Saturday from 9pm to close, and Sunday drink specials, which run all day. If you ever need to look up the drink specials for a certain day of the week, check out the<a href="http://www.menomoniedrinkspecials.com"> Daily Drink Specials</a>.</p>
	    
	    </br>   	
	    <p>Log Jam is spacious with booth seating all around the edges of the bar and four person tables along a center island. The space is simple with concrete floors and wooden wall accents. Having the tables pushed to the sides allows for bar-hour patrons to have room for moving about and talking. In case you forget any of the specials, chalkboards above the long bar declare the daily deals. Six televisions are mounted to the walls to help optimize game day celebrations. There are three TVs at the bar alone. The physical bar extends the length of the room and has seating all along it. There are typically 2 -4 servers working the bar during hours when food is not served. </p>
	   
	 	</br>
	    <p>In addition to the televisions, the bar features one pool table, two dart boards, and a Touch Tunes jukebox. In the summer months, the back patio is open for dining and drinking seating. The two tiered patio has warming lamps for spring and fall and corn hole for entertainment. Patrons in search of a bathroom can find them in the entryway to the patio. There is an ATM in this hallway as well.</p>
	        
	
	    </div>
	    </div>
	    <div class="row">
	    <div class="col-md-12">
	    <img src="{{asset ('assets/img/log3.jpg')}}">
	    </br>
	    <p>Log Jam can host 17 beers on tap and features a variety of bottle and can drinks. They have a selection of local and specialty beers, along with classics such as Stella and Guinness on tap. The specialty beer selection changes, so viewing or asking about the beers on tap at each visit is advised. </p>
	    <img src="{{asset ('assets/img/log4.jpg')}}" style="float:right;">
		</br>
	    <p>Log Jam hosts karaoke every Wednesday and Saturday night from 9pm to close. Monday through Friday, happy hour lasts from 3-6 PM. Special concerts are occasionally held in the restaurant, but they are typically sporadic. Information about upcoming shows can be found on their website or Facebook page. On weekend mornings, patrons can order from a special brunch menu with options such as eggs benedict and breakfast nachos. Brunch is served Saturday from 8AM to 11AM and Sunday from 8AM to 1PM.</p>
	 
	 </div>
	</div>
  </div>
@stop

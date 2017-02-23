<html itemscope itemtype="http://schema.org/Website" land="en">
  <head>

<link href="http://www.menomoniedrinkspecials.com/" rel="canonical" />

<!-- Required meta tags-->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Color theme for statusbar -->
<meta name="theme-color" content="#2196f3" />
<link rel='author' href='https://plus.google.com/107663478385371607210'/>
<!-- Path to Framework7 Library CSS, Material Theme -->
<link rel="stylesheet" href="{{ asset('assets/css/framework7.material.min.css') }}">
<!-- Path to Framework7 color related styles, Material Theme -->
<link rel="stylesheet" href="{{ asset('assets/css/framework7.material.colors.min.css') }}">
<!-- Path to your custom app styles-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-app.css') }}">

<!-- Place this data between the <head> tags of your website -->
<meta content="Menomonie Drink Specials" name="title" />
<meta name="description" content="Menomonie Drink Specials serves you the drink specials for local bars such as Log Jam, The Abbey, Rehab, Market, Waterfront, Silver Dollar, The Arena, and more." />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Menomonie Drink Specials" />
<meta itemprop="description" content="Menomonie Drink Specials serves you the drink specials for local bars such as Log Jam, The Abbey, Rehab, Market, Waterfront, Silver Dollar, The Arena, and more." />
<meta itemprop="image" content="http://menomoniedrinkspecials.com/mds.png" />
<meta content="drink specials, bar deals, cheap drinks, happy hours, drink coupons" name="keywords" />
<!-- Open Graph data -->
<meta property="og:title" content="Menomonie Drink Specials" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.menomoniedrinkspecials.com/" />
<meta property="og:image" content="http://menomoniedrinkspecials.com/mds.png" />
<meta property="og:description" content="Menomonie Drink Specials serves you the drink specials for local bars such as Log Jam, The Abbey, Rehab, Market, Waterfront, Silver Dollar, The Arena, and more." />
<meta property="og:site_name" content="Menomonie Drink Specials" />
<meta property="article:published_time" content="2017-01-24T05:59:00+01:00" />
<meta property="article:modified_time" content="2017-01-24T19:08:47+01:00" />
<meta property="article:section" content="Index Page" />
<meta property="article:tag" content="Menomonie Drink Specials" />

  <style>

    #myDiv a
    {
      border: solid;
      text-align: center;
    }
  </style>

  <style>

  @import url(http://fonts.googleapis.com/css?family=Share:400,700&subset=latin,latin-ext);

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


/**
 * Tabs object.
 *
 * 1. Tables (kinda) for layout!
 * 2. This is the magic bit; make all children occupy equal width.
 * 3. Required to make the tabs fill their container.
 * 4. Make each tab pack up horizontally.
 * 5. Ensure the hit area covers the whole tab.
 */
.tabs {
    margin:  0;
    padding: 0;
    list-style: none;
    display: table; /* [1] */
    table-layout: fixed; /* [2] */
    width: 100%; /* [3] */
}

    .tabs__item {
        width: 100%;
        float: left;
    }

    @media screen and (min-width: 40em) {
        .tabs__item {
          display: table-cell; /* [4] */
          float: none;
          width: auto;
        }
    }

        .tabs__link {
            display: block; /* [5] */
        }


/**
 * Primary nav. Extends `.tabs`.
 *
 * 1. Stop tabs’ corners leaking out beyond our 4px round.
 */
.primary-nav {
    text-align: center;
    border-radius: 0;
    overflow: hidden; /* [1] */
}

        .primary-nav a {
            padding: .75em 1em;
            color: white;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            text-decoration: none;
            border-right: 1px solid #000;
            font-family: Share, Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 1.75em;
        }

        .primary-nav a:hover {
            color: black;
            background: #6699ff;
        }

/* Responsive-nav.js */

.js .nav-collapse {
  clip: rect(0 0 0 0);
  max-height: 0;
  position: absolute;
  display: block;
  overflow: hidden;
  zoom: 1;
}

.nav-collapse.opened {
  max-height: 9999px;
}

.disable-pointer-events {
  pointer-events: none !important;
}

.nav-toggle {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

@media screen and (min-width: 40em) {
  .js .nav-collapse {
    position: relative;
  }
  .js .nav-collapse.closed {
    max-height: none;
  }
  .nav-toggle {
    display: none;
  }
}

.nav-collapse {
  list-style: none;
  width: 100%;
  float: left;
}

.fixed {
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
}

.nav-toggle {
  position: fixed;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-decoration: none;
  text-indent: -999px;
  position: relative;
  overflow: hidden;
  width: 70px;
  height: 55px;
  float: right;
}

.nav-toggle:before {
  color: #6699ff; /* Edit this to change the icon color */
  font-family: "responsivenav", sans-serif;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  font-size: 28px;
  text-transform: none;
  position: absolute;
  content: "≡";
  text-indent: 0;
  text-align: center;
  line-height: 55px;
  speak: none;
  width: 100%;
  top: 0;
  left: 0;
}

.nav-toggle.active::before {
  font-size: 24px;
  content:"x";
}

  </style>
  </head>


  <body>
    <div class="views layout-dark">
      <div class="view view-main">
        <div class="pages ">
          <div data-page="index" class="page theme-lightblue">
            <!-- Scrollable page content -->
            <div class="page-content">
              <div class="row">
                <div class="col-100">
                  <h1 style="text-align: center;">Menomonie Drink Specials</h1>
<div class="row">
<nav class="nav-collapse" role="navigation">
    <ul class="tabs primary-nav">
        <li class="tabs__item">
            <a href="1" class="tabs__link">Mon</a>
        </li>
        <li class="tabs__item">
            <a href="2" class="tabs__link">Tue</a>
        </li>
        <li class="tabs__item">
            <a href="3" class="tabs__link">Wed</a>
        </li>
        <li class="tabs__item">
            <a href="4" class="tabs__link">Thur</a>
        </li>
        <li class="tabs__item">
            <a href="5" class="tabs__link">Fri</a>
        </li>
        <li class="tabs__item">
            <a href="6" class="tabs__link">Sat</a>
        </li>
        <li class="tabs__item">
            <a href="7" class="tabs__link">Sun</a>
        </li>
    </ul>
</nav>
</div>
                  <div id="myDiv" class="list-block inset">
                    <ul>
                      <li>
                        <a id="abbey" href="abbey" class="item-link list-button">Abbey</a>
                      </li>
                      <li>
                        <a id="arena" href="arena" class="item-link list-button">Arena</a>
                      </li>
                      <li>
                        <a id="den" href="den" class="item-link list-button">Den</a>
                      </li>
                      <li>
                        <a id="duke" href="duke" class="item-link list-button">Duke & Dagger</a>
                      </li>
                      <li>
                        <a id="kahootz" href="kahootz" class="item-link list-button">Kahootz</a>
                      </li>
                       <li>
                        <a id="lakeside" href="lake" class="item-link list-button">Lakeside</a>
                      </li>
                      <li>
                        <a id="logjam" href="log" class="item-link list-button">Log Jam</a>
                      </li>
                      <li>
                        <a id="meetmarket" href="market" class="item-link list-button">Meet Market</a>
                      </li>
                      <li>
                        <a id="rehab" href="rehab" class="item-link list-button">Rehab</a>
                      </li>
                      <li>
                        <a id="silverdollar" href="silver" class="item-link list-button">Silver Dollar</a>
                      </li>
                      <li>
                        <a id="waterfront" href="water" class="item-link list-button">Waterfront</a>
                      </li>
                    </ul>
                  </div> 
                

    <script type="text/javascript" src="{{ asset('assets/js/framework7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/my-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/responsive-nav.js') }}"></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Website",
  "url": "https://plus.google.com/107663478385371607210"
}


</script>


<script type="text/javascript">
	
	var navigation = responsiveNav(".nav-collapse", {
  animate: true,                    // Boolean: Use CSS3 transitions, true or false
  transition: 284,                  // Integer: Speed of the transition, in milliseconds
  label: "Menu",                    // String: Label for the navigation toggle
  insert: "before",                  // String: Insert the toggle before or after the navigation
  customToggle: "",                 // Selector: Specify the ID of a custom toggle
  closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
  openPos: "relative",              // String: Position of the opened nav, relative or static
  navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
  navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
  jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
  init: function(){},               // Function: Init callback
  open: function(){},               // Function: Open callback
  close: function(){}               // Function: Close callback
});

</script>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90916951-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html> 

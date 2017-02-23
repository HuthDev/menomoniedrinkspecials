<html>


<style type="text/css">
	

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

  border-style: solid;
  border-left: 0px;
  border-right: 0px; 
  border-width: 1px;
  margin: 1px;
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

<div class="container">
<nav class="nav-collapse" role="navigation">
    <ul class="tabs primary-nav">
        <li class="tabs__item">
            <a href="/blog/abbey" class="tabs__link">Abbey</a>
        </li>
        <li class="tabs__item">
            <a href="/blog/silverdollar" class="tabs__link">Silver Dollar</a>
        </li>
        <li class="tabs__item">
            <a href="/blog/waterfront" class="tabs__link">Waterfront</a>
        </li>
        <li class="tabs__item">
            <a href="/blog/logjam" class="tabs__link">Log Jam</a>
        </li>
    </ul>
</nav>



<body>

    @yield('content')

</body>
</div>
 <script type="text/javascript" src="{{ asset('assets/js/responsive-nav.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90916951-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
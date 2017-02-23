<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Color theme for statusbar -->
    <meta name="theme-color" content="#2196f3">
    <!-- Your app title -->
    <title>Menomonie Drink Specials</title>
    <!-- Path to Framework7 Library CSS, Material Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/framework7.material.min.css') }}">
    <!-- Path to Framework7 color related styles, Material Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/framework7.material.colors.min.css') }}">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-app.css') }}">
  <style>

    #myDiv a
    {
      border: solid;
      text-align: center;
    }

  </style>
  </head>
  <body>

<div class="container">
    @yield('content')
</div>


    <script type="text/javascript" src="{{ asset('assets/js/framework7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/my-app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/myscripts.js') }}"></script>

  </body>
</html> 
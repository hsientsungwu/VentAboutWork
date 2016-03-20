<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <meta property="og:site_name" content="Vent About Your Work" />
        <meta property="og:title" content="@yield('title') | Vent About Your Work" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url() }}" />
        <meta property="og:image" content="{{ url('/images/fb.png') }}" />
        <title>@yield('title') | Vent About Your Work</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>

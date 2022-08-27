<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Modaz HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheets/animate.css">


    <!-- Favicon and touch icons  -->
    <link href="{{asset('assets')}}/icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/javascript/html5shiv.js"></script>
    <script src="{{asset('assets')}}/javascript/respond.min.js"></script>
    <![endif]-->

    @yield('css')
    @yield('headerjs')

</head>
<body class="header_sticky header-style-1 has-menu-extra">
<!-- Preloader -->
<div id="loading-overlay">
    <div class="loader"></div>
</div>

<!-- Boxed -->
<div class="boxed">



@section('content')
@show






@include('home._footer')

</body>
</html>

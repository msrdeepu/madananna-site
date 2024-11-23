 <!-- metas -->
 <meta charset="utf-8">
 <meta name="author" content="Chitrakoot Web" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <meta name="keywords" content="Multipurpose Business and Admin HTML5 Template" />
 <meta name="description" content="Fabrex - Multipurpose Business and Admin Template" />

 <!-- title -->
 <title>@yield('title', 'Fabrex - Multipurpose Business and Admin Template')</title>

 <!-- favicon -->
 <link rel="shortcut icon" href="{{ asset('backend/frontassets/img/logos/favicon.png') }}">
 <link rel="apple-touch-icon" href="{{ asset('backend/frontassets/img/logos/apple-touch-icon-57x57.png') }}">
 <link rel="apple-touch-icon" sizes="72x72"
     href="{{ asset('backend/frontassets/img/logos/apple-touch-icon-72x72.png') }}">
 <link rel="apple-touch-icon" sizes="114x114"
     href="{{ asset('backend/frontassets/img/logos/apple-touch-icon-114x114.png') }}">

 <!-- plugins -->
 <link rel="stylesheet" href="{{ asset('backend/frontassets/css/plugins.css') }}">

 <!-- revolution slider css -->
 <link rel="stylesheet" href="{{ asset('backend/frontassets/css/rev_slider/settings.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/frontassets/css/rev_slider/layers.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/frontassets/css/rev_slider/navigation.css') }}">

 <!-- quform css -->
 <link rel="stylesheet" href="{{ asset('backend/frontassets/quform/css/base.css') }}">

 <!-- search css -->
 <link rel="stylesheet" href="{{ asset('backend/frontassets/search/search.css') }}">

 <!-- theme core css -->
 <link rel="stylesheet" href="{{ asset('backend/frontassets/css/styles.css') }}">


 <!--social share-->
 <meta property="og:title" content="@yield('og:title', 'Default Title')">
 <meta property="og:description" content="@yield('og:description', 'Default Description')">
 <meta property="og:image" content="@yield('og:image', asset('default-thumbnail.jpg'))">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:type" content="website">

 <!-- Twitter Card -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="@yield('og:title', 'Default Title')">
 <meta name="twitter:description" content="@yield('og:description', 'Default Description')">
 <meta name="twitter:image" content="@yield('og:image', asset('default-thumbnail.jpg'))">



 <!--csrf-->
 <meta name="csrf-token" content="{{ csrf_token() }}">

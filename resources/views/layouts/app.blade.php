<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick-theme.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
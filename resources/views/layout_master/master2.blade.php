<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <style type="text/css">
            
        </style>
        
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/animate.min.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">

        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-2.1.1.min.js"></script>
        <script src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
        
        
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

    </head>
    <body style="overflow: hidden;">
    
        <!--@include('partials.temp')-->
            @yield('content')
        @include('partials.footer') 
          
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT-04j3O12QutPxvS2Ny8SudqUxlVsJ28&callback=myMap"></script>
        <script src="/js/listeners.js"></script>
    </body>
</html>

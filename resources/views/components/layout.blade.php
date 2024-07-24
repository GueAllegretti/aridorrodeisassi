<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<title>{{isset($title) ? $title:'A ridosso dei sassi Casa Vacanza Matera'}}</title>


</head>

<body>
<x-nav/>


    {{$slot}}
    @include('cookie-consent::index')
     
     <x-footer/>
    <!-- JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>

  </body>
  </html>
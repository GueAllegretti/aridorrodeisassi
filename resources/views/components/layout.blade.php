<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">

    {{-- <link rel="stylesheet" href="{{secure_asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

<title>{{isset($title) ? $title:'A ridosso dei sassi Casa Vacanza Matera'}}</title>


</head>

<body>
<x-nav/>
<div class="icon-bar">
    <a href="https://www.facebook.com/profile.php?id=61561790943842" target="_blank" class="facebook secondary-icone-social d-flex justify-content-center align-items-center" style="outline: none"><i class="fab fa-facebook-f"></i></a>
    <a href="http://api.whatsapp.com/send?phone=+393881581971&text={{__('generico.generico_1')}}" target="blank" class="whats secondary-icone-social text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="mailto:aridossodeisassi@gmail.com?subject={{__('generico.generico_2')}}" target="blank" class="mail secondary-icone-social d-flex justify-content-center align-items-center"><i class="fa-regular fa-envelope"></i></a>
</div>

    {{$slot}}
    @include('cookie-consent::index')
     
     <x-footer/>
    <!-- JavaScript -->
    {{-- <script src="{{secure_asset('js/app.js')}}"></script> --}}
    <script src="{{asset('js/app.js')}}"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v20.0" nonce="2y71AYgm"></script>

  </body>
  </html>
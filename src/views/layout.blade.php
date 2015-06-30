<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="copyright" content="Made in Katana" />
    <link rel="stylesheet" href="/packages/bootleg/sample/css/application.css" />
    <script src="/packages/bootleg/sample/components/jquery/dist/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script src="/packages/bootleg/sample/components/imgLiquid/js/imgLiquid-min.js"></script>
    <script src="/packages/bootleg/sample/components/foundation/js/foundation/foundation.js"></script>
    <script src="/packages/bootleg/sample/components/foundation/js/foundation/foundation.clearing.js"></script>
    <script src="/packages/bootleg/sample/components/foundation/js/foundation/foundation.offcanvas.js"></script>

    <script src="/packages/bootleg/sample/components/slick-carousel/slick/slick.min.js"></script>

    <script src="//use.typekit.net/jmw2soc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="shortcut icon" href="{{@$application->getSetting('Favicon')}}" type="image/x-icon" >
    @section('main-header')
        <title>{{@$application->getSetting('Title')}}</title>
        <meta name="description" content="{{@$application->getSetting('Description')}}" />
        <meta name="author" content="{{@$application->getSetting('Author')}}" />
    @show

    {!!$application->getSetting('Head')}}
</head>
<body>
    @yield('main-content')

    @if(@$application->getSetting('Facebook App ID'))
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '{{@$application->getSetting('Facebook App ID')}}',
              xfbml      : true,
              status     : true,
              version    : 'v2.3'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
    @endif
</body>

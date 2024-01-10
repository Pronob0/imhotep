<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    
    <title>Yah Power</title>
    <meta name="description" content="The AIBA is a nonprofit, academic and education institution headquartered in Jerusalem, Israel. It sponsors and participates in archaeological excavations to">
    <meta property="og:url" content="https://armstronginstitute.org/">
    <meta property="og:site_name" content="ArmstrongInstitute.org">
    <meta property="og:title" content="Armstrong Institute of Biblical Archaeology">
    <meta property="og:image" content="https://ArmstrongInstitute.org/facebook-image.png">
    <meta property="og:description" content="The AIBA is a nonprofit, academic and education institution headquartered in Jerusalem, Israel. It sponsors and participates in archaeological excavations to promote Israel’s biblical archaeology.">
    <meta property="og:type" content="website">
    <meta name="image" content="{{asset('assets/images/'.$gs->header_logo)}}">


    <link rel="stylesheet" media="all" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" media="all" href="https://use.typekit.net/euc5orc.css" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/front/css/normalize.css') }}" />
    <script src="{{ asset('assets/front/js/jwplayer.js') }}"></script>
    <script src="{{ asset('assets/front/js/api.js') }}"></script>
    <script src="{{ asset('assets/front/js/twitter.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <link rel="stylesheet" media="all" href="{{ asset('assets/front/css/mapbox.css') }}" />
    <script src="{{ asset('assets/front/js/mapbox.js') }}"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PP3TMNZ');
    </script>
    <!-- End Google Tag Manager -->
    @stack('css')

</head>

@yield('content')
    


</html>
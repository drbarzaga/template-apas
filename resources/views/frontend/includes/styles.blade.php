<link href="https://fonts.googleapis.com/css?family=Encode+Sans:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/css/navigation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles.multipage-marketing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles.op-accounting.css') }}">
<link rel="stylesheet" href="{{ asset('global/css/custom.css') }}">
<style>
    .map-container {
        width: 100%;
    }
    .map-container iframe{
        width: 100%;
        display: block;
        pointer-events: none;
        position: relative; /* IE needs a position other than static */
    }
    .map-container iframe.clicked{
        pointer-events: auto;
    }
</style>

@stack('custom_styles')

<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description"
        content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="MyFitness">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel=icon href="{{ config('app.logo') }}" type="icon/png">
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    <link rel="preload" type="text/css" media="all" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" media="all" type="text/css" as="style">
    <link rel="preload" type="text/css" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        as="style">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">

    <link rel="stylesheet" type="text/css" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="all" type="text/css">
    <!-- Meta Pixel Code -->
    <script>
    //     !function (f, b, e, v, n, t, s) {
    //         if (f.fbq) return; n = f.fbq = function () {
    //             n.callMethod ?
    //             n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    //         };
    //         if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    //         n.queue = []; t = b.createElement(e); t.async = !0;
    //         t.src = v; s = b.getElementsByTagName(e)[0];
    //         s.parentNode.insertBefore(t, s)
    //     }(window, document, 'script',
    //         'https://connect.facebook.net/en_US/fbevents.js');
    //     fbq('init', '9722070867861076');
    //     fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=9722070867861076&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="@yield('title')"/>
    <meta name="keyword" content="@yield('keyword')"/>
    <meta name="description" content="@yield('description')"/>
    <meta http-equiv="content-type" content="text/html">
    <meta name="author" content="Mohammad Saiful Islam">
    <meta name="designer" content="Mohammad Saiful Islam">
    <meta name="publisher" content="Mohammad Saiful Islam">
    <meta name=”robots” content=”index,follow”>
    <meta name="revisit-after" content="10 days">
    <meta name="distribution" content="global">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="https://analyticsaiful.com"/>
    <meta property="og:image" content="{{ asset('front-assets/img/Who-is-the-best-web-analytics-expert-in-Bangladesh.png') }}"/>
    <meta property="og:description" content="@yield('description')"/>
    <!--Meta Tags for HTML pages on Mobile-->
    <meta name="format-detection" content="telephone=yes"/>
    <meta name="HandheldFriendly" content="true"/>
    <!--http-equiv Tags-->
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <!-- Favicon -->
    <link href="{{ asset('media/default/logo/favicon_io/favicon.ico') }}" rel="icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('media/default/logo/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('media/default/logo/favicon_io/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('media/default/logo/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('media/default/logo/favicon_io/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/default/logo/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('media/default/logo/favicon_io/apple-touch-icon.png') }}">
    <meta name="theme-color" content="#ffffff">

    @includeIf('frontend/front-layouts.partials.css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary loading" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @includeIf('frontend/front-layouts.partials.navbar')
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @includeIf('frontend/front-layouts.partials.footer')
    <!-- Footer End -->


    @includeIf('frontend/front-layouts.partials.js')
</body>
</html>
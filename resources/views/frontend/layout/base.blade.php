<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('COMPANY_NAME') }} | @yield('title')</title>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
    @include('frontend.includes.head_scripts')
</head>

<body>
<main>
   @include('frontend.includes.header')
   @yield('content')
   @include('frontend.includes.footer')
</main>
    @include('frontend.includes.scripts')
</body>
</html>

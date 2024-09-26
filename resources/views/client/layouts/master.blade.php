<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSS --}}
    @include('client.layouts.partials.css')

</head>

<body>

    <div class="site-wrap">

        {{-- Header --}}

        <header class="site-navbar" role="banner">

            {{-- Header-top --}}
            @include('client.layouts.partials.header-top')

            {{-- Navbar --}}
            @include('client.layouts.partials.navbar')
        </header>

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        <footer class="site-footer border-top">
            @include('client.layouts.partials.footer')
        </footer>
    </div>

    {{-- JS --}}
    @include('client.layouts.partials.js')

</body>

</html>

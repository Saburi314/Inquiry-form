<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <script src="{{ asset('/js/validate.js') }}"></script>
    <script src="{{ asset('/js/images.js') }}"></script>
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="EN">

<head>
    @include('inc.head')
</head>

<body>

    @include('inc.nav')

    <div class="container py-4">
        @yield('content')
    </div>

    @include('inc.footer')

</body>

</html>

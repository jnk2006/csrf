<!doctype html>
<html lang="en">


@include('includes.head')

<body>
    @include('includes.menu')

    <main role="main">
    @yield('content')

    @include('includes.jsfooter')
    </main>

</body>
</html>
<!doctype html>

<html data-bs-theme="dark">

    @include('includes.head')

    <body class="py-4 bg-body-tertiary">

        <div class="container">
            @include('components.notice')
        </div>

        @yield('content')
    </body>
</html>

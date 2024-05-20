<!doctype html>

<html data-bs-theme="dark">

    @include('includes.head')

    <body>

        <main class="d-flex flex-nowrap">

            @include('components.sidebar')

            <div class="container mt-4" style="margin-left: 280px;">

                @include('components.notice')

                @yield('content')

                @include('includes.footer')

            </div>

        </main>

    </body>
</html>

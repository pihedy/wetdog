<!doctype html>

<html data-bs-theme="dark">

    @include('includes.head')

    <body>

        <main>

            {{-- @include('components.sidebar') --}}

            @include('components.navbar')

            <div class="container mt-4">

                @include('components.notice')

                @yield('content')

                @include('includes.footer')

            </div>

        </main>

    </body>
</html>

{{--

Navbar Component template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<style>
    .logo-container {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        flex-wrap: nowrap;
        color: #fff;
    }

    .logo-container .logo-main {
        font-size: 1.9rem;
        font-weight: 600;
        line-height: normal;
    }

    .logo-container .logo-alt {
        font-size: 0.6rem;
    }

</style>

<header class="p-3 mb-3 border-bottom">

    <div class="container">

        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <a href="#" class="logo-container text-decoration-none me-lg-auto">
                <span class="logo-main">WetDog</span>
                <span class="logo-alt">Powered By Pihedy</span>
            </a>

            <div class="dropdown text-end">
                <a
                    href="#"
                    class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img src="{{ $data['user']['avatar'] }}" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>

                <ul class="dropdown-menu text-small">

                    @foreach ($data['navigations']['options'] as $item)

                        <li><a class="dropdown-item" href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>

                    @endforeach

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                </ul>
            </div>

        </div>

    </div>

</header>

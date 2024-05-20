{{--

Sitebar Component template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<style>

    .logo-text {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        width: 100%;
        user-select: none;
    }

    .logo-text .main-text {
        font-size: 2.7rem;
        line-height: normal;
    }

    .logo-text .alt-text {
        font-size: 0.6rem;
        text-transform: uppercase;
    }

    .nav-title {
        margin: 1rem 1rem 0.2rem 1rem;
        color: #919eac;
        font-weight: 300;
        font-size: 0.8rem;
        text-transform: uppercase;
    }

</style>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="position: fixed; width: 280px; height: 100vh">
    <div class="logo-container">
        <div class="logo-text">
            <span class="main-text">WetDog</span>
            <span class="alt-text">Powered By Pihedy</span>
        </div>
    </div>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">

        @foreach ($data['navigations']['main'] as $item)

            @if ($item['type'] == 'title')

                <li class="nav-title">
                    <span>{{ $item['label'] }}</span>
                </li>

            @else

                <li class="nav-item">
                    <a
                        href="{{ route($item['route']) }}"
                        class="nav-link {{ $item['route'] == $data['current'] ? 'active' : '' }}"
                        aria-current="page"
                    >
                        <i class="bi bi-{{ $item['icon'] }}"></i>
                        {{ $item['label'] }}
                    </a>
                </li>

            @endif

        @endforeach

    </ul>
    <hr>
    <div class="dropdown">

        <a
            href="#"
            class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <img
                src="{{ $data['user']['avatar'] }}"
                alt=""
                width="32"
                height="32"
                class="rounded-circle me-2"
            >

            <strong>{{ $data['user']['name'] }}</strong>
        </a>

        <ul class="dropdown-menu text-small shadow">

            @foreach ($data['navigations']['options'] as $item)

                <li class="menu-item">
                    <a
                        class="dropdown-item"
                        href="{{ route($item['route']) }}"
                    >{{ $item['label'] }}</a>
                </li>

            @endforeach

            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a
                    class="dropdown-item"
                    href="{{ route('logout') }}"
                >Sign out</a>
            </li>
        </ul>
    </div>
</div>

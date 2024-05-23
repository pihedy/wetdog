{{--

User Integration List template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<style>

    .card-item {
        display: flex;
        padding: 1rem;
        text-decoration: none;
        border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color);
    }

    .card-item-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
    }

    .card-item:last-child {
        border-bottom: none;
    }

    .integration-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        margin-right: 1rem;
        font-size: 1.6rem;
        border-radius: 50px;
    }

    .integration-content i {
        line-height: 1.6rem
    }

</style>

<div class="card">

    <h5 class="card-header py-3">Integration</h5>

    <div class="card-body p-0">

        @foreach ($integrations as $integration)

            @if ($integration['is_active'])

            <a href="{{ $integration['link'] }}" class="card-item border-x-0 border-300">

                <div class="integration-content" style="background-color: {{ $integration['darker'] }}">
                    <i
                        class="{{ $integration['icon'] }}"
                        style="color: {{ $integration['color'] }}"
                    ></i>
                </div>

                <div class="card-item-body">

                    <h6 class="m-0">{{ $integration['name'] }}</h6>
                    <small class="opacity-50 text-nowrap">2024 május 11. 16:14</small>

                </div>

            </a>

            @endif

        @endforeach

    </div>

</div>

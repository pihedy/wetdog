{{--

User Integration List template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<style>

    .integration-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        font-size: 1.6rem;
        border-radius: 50px;
    }

    .integration-content i {
        line-height: 1.6rem
    }

</style>

<div class="card">

    <h5 class="card-header">Integration</h5>

    <div class="card-body">

        <div class="list-group">

            @foreach ($integrations as $integration)

                @if ($integration['is_active'])

                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">

                    <div class="integration-content" style="background-color: {{ $integration['darker'] }}">
                        <i
                            class="{{ $integration['icon'] }}"
                            style="color: {{ $integration['color'] }}"
                        ></i>
                    </div>

                    <div class="d-flex gap-2 w-100 justify-content-between align-items-center">

                        <div class="d-flex align-items-center">
                            <h6 class="m-0">{{ $integration['name'] }}</h6>
                        </div>

                        @if ($integration['has_link'])

                            <small class="opacity-50 text-nowrap">2024 május 11. 16:14</small>

                        @endif

                    </div>

                </a>

                @endif

            @endforeach

        </div>

    </div>

</div>

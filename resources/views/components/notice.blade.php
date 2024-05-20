{{--

    Notince component for displaying alerts and notifications.

    @author Pihe Edmond <pihedy@gmail.com>

--}}

<style>
    .alert-container {
        display: flex;
        flex-direction: column;
    }

</style>

<div class="alert-container">

    @if ($errors->any())

        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            @foreach ($errors->all() as $error)
                <div class="span">{{ $error }}</div>
            @endforeach

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

</div>

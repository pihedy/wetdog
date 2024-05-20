{{--

Profile Page template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<div class="row">

    <h3 class="mb-4">Basic</h3>

    <div class="col-12 col-md-8">

        @include('pages.profile.components.profile-settings', ['user' => $user])

    </div>

    <div class="col-12 col-md-4">

        @include('pages.profile.components.delete-account')

    </div>

</div>

<hr class="my-5">

<div class="row">

    <h3 class="mb-4">Connections</h3>

    <div class="col-12">

        @include('pages.profile.components.integration-list', ['integrations' => $integrations])

    </div>

    <div class="col-12 my-5">

        @include('pages.profile.components.personal-access', ['user' => $user])

    </div>

</div>

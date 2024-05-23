{{--

Persion Access Tokens template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<?php

/* @var \Laravel\Sanctum\PersonalAccessToken $Token */

?>

<div class="card">

    <h5 class="card-header py-3">Persion Access Tokens</h5>

    <div class="card-body">

        @if (!empty($user['tokens']))

            <table class="table table-dark table-hover">

                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Token</th>
                        <th scope="col">Last used at</th>
                        <th scope="col">Expires at</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($user['tokens'] as $Token)

                        <tr>
                            <th scope="row">{{ $Token->name }}</th>
                            <td>
                                <input
                                    class="form-control"
                                    type="text"
                                    value="{{ $Token->token }}"
                                    aria-label="readonly input example"
                                    readonly
                                />
                            </td>
                            <td>
                                @if ($Token->last_used_at)
                                    {{ $Token->last_used_at }}
                                @else
                                    {{ 'Never' }}
                                @endif
                            </td>
                            <td>
                                @if ($Token->expires_at)
                                    {{ $Token->expires_at }}
                                @else
                                    {{ 'Never' }}
                                @endif
                            </td>
                            <td>{{ $Token->created_at }}</td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else
            <div class="alert alert-info" role="alert">
                No tokens found.
            </div>
        @endif

        <form action="{{ route('web.profile.tokens.store') }}" method="POST" class="mt-5">
            @csrf

            <div class="mb-3">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label
                    for="name"
                    class="form-label"
                >Name</label>

                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="My Token"
                    required
                />

            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </div>

</div>

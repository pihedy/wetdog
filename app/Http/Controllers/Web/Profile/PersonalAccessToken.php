<?php declare(strict_types=1);

namespace App\Http\Controllers\Web\Profile;

use \App\Http\Controller;

use \Illuminate\Support\Facades\Auth;

use \Illuminate\Http\ {Request, RedirectResponse};

class PersonalAccessToken extends Controller
{
    public function store(Request $Request): RedirectResponse
    {
        /**
         * @var \App\Models\User $User
         */
        $User = Auth::user();

        /**
         * Create a new personal access token for the user.
         */
        $User->createToken($Request->input('name'), expiresAt: now()->addYear());

        return response()
            ->redirectTo(route('web.profile.index'))
            ->with('success', 'Personal access token created successfully.');
    }
}

<?php declare(strict_types=1);

namespace App\Http\Controllers\Web\Auth;

use \App\Http\Controller;

use \Illuminate\Support\Facades\ {Auth, Validator};

use \Illuminate\Http\ {Request, RedirectResponse};

/**
 * The TwitchAccessTokenController class is responsible for handling the authentication flow with Twitch,
 * including retrieving and managing access tokens.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class TwitchAccessTokenController extends Controller
{
    public function index(Request $Request): RedirectResponse
    {
        Validator::make($Request->all(), [
            'code'  =>'required|string',
            'scope' =>'required|string',
            'state' =>'required|string',
        ])->validate();

        /**
         * @var \App\Models\User $User
         */
        $User = Auth::user();

        $User->attributes()->updateOrCreate(['attribute_name' => 'twitch_access_token'], [
            'attribute_value' => $Request->all(),
        ]);

        return response()
            ->redirectTo(route('web.profile.index'))
            ->with('success', 'Twitch access token created successfully.');
    }
}

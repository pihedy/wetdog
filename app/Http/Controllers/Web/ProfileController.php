<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;

use \Illuminate\Http\Response;
use \Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(): Response
    {
        return response()->view('main', [
            'head'      => ['title' => 'Profile'],
            'content'   => view('pages.profile.index', [
                'user' => [
                    'email'     => Auth::user()->email,
                    'name'      => Auth::user()->name,
                    'tokens'    => Auth::user()->tokens->all()
                ],
                'integrations' => [
                    [
                        'name'      => 'Twitch',
                        'icon'      => 'bi bi-twitch',
                        'color'     => '#6441A4',
                        'darker'    => '#281a42',
                        'link'      => 'https://twitch.tv/pihedy',
                        'is_active' => true,
                        'has_link'  => true,
                    ],
                    [
                        'name'      => 'Spotify',
                        'icon'      => 'bi bi-spotify',
                        'color'     => '#1ED760',
                        'darker'    => '#0c5626',
                        'link'      => 'https://open.spotify.com/playlist/37i9dQZF1DX2sUQwD7tbmL',
                        'is_active' => true,
                        'has_link'  => true,
                    ],
                    [
                        'name'      => 'Discord',
                        'icon'      => 'bi bi-discord',
                        'color'     => '#5865F2',
                        'darker'    => '#0a137a',
                        'link'      => 'https://discord.gg/w78JG8n',
                        'is_active' => true,
                        'has_link'  => true,
                    ]
                ],
            ])->render(),
            'layout'    => 'default',
        ]);
    }
}

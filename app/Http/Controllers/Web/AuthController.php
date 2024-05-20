<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;

use \Illuminate\Contracts\View\View;
use \Illuminate\Support\Facades\Auth;

use \Illuminate\Http\ {Request, RedirectResponse};

/**
 * Handles authentication-related functionality for the web application.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class AuthController extends Controller
{
    /**
     * Renders the login page.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('main', [
            'head'      => [
                'title' => 'Login'
            ],
            'content'   => view('pages.guest.login')->render(),
            'layout'    => 'login'
        ]);
    }

    /**
     * Handle an incoming login request.
     *
     * @param \Illuminate\Http\Request $Request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $Request): RedirectResponse
    {
        $credentials = $Request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        $Request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    /**
     * Logs out the current user and redirects them to the login page.
     *
     * @param \Illuminate\Http\Request $Request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $Request): RedirectResponse
    {
        Auth::logout();

        $Request->session()->invalidate();
        $Request->session()->regenerateToken();

        return redirect('/login');
    }
}

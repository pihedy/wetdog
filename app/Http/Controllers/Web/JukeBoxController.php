<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;
use \Illuminate\Http\Response;

/**
 * Represents the controller for the JukeBox functionality of the application.
 *
 * @auhor Pihe Edmond <pihedy@gmail.com>
 */
class JukeBoxController extends Controller
{
    /**
     * Handles the index action for the JukeBox controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response()->view('main', [
            'head'      => ['title' => 'JukeBox'],
            'content'   => view('pages.jukebox.index')->render(),
            'layout'    => 'default',
        ]);
    }
}

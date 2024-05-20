<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;
use \Illuminate\Http\Response;

class JukeBoxController extends Controller
{
    public function index(): Response
    {
        return response()->view('main', [
            'head'      => ['title' => 'JukeBox'],
            'content'   => view('pages.jukebox.index')->render(),
            'layout'    => 'default',
        ]);
    }
}

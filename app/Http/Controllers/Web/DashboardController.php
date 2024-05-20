<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;
use \Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return response()->view('main', [
            'head'      => ['title' => 'Dashboard'],
            'content'   => view('pages.dashboard.index')->render(),
            'layout'    => 'default',
        ]);
    }
}

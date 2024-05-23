<?php declare(strict_types=1);

namespace App\Http\Controllers\Web;

use \App\Http\Controller;
use \Illuminate\Http\Response;

/**
 * Represents the controller for the dashboard functionality of the application.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class DashboardController extends Controller
{
    /**
     * Handles the index action for the dashboard.
     *
     * This method is the entry point for the dashboard functionality. It is responsible for rendering the
     * main dashboard view and handling any related logic.
     *
     * @return \Illuminate\Http\Response The HTTP response containing the dashboard view.
     */
    public function index(): Response
    {
        return response()->view('main', [
            'head'      => ['title' => 'Dashboard'],
            'content'   => view('pages.dashboard.index')->render(),
            'layout'    => 'default',
        ]);
    }
}

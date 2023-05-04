<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|RedirectResponse|Application
    {
        if (auth()->check()) {
            switch (auth()->user()->role) {
                case 2:
                case 1 :
                    $message = auth()->user()->name . "welcome to admin panel";
                    return redirect()->route('admin-panel.index')->with('message', $message);
                case 3 :
                    return view('home');
            }
        }
    }
}

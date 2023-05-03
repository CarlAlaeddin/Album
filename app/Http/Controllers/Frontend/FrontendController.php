<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class FrontendController extends Controller
{
    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {

        $albums = Album::query()
            ->orderBy('created_at', 'desc')
            ->where('is_status', 'LIKE', 1)
            ->paginate(12);

        return view(
            'Frontend.index',
            compact([
                'albums',
            ])
        );
    }
}

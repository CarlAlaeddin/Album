<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;

class FrontendController extends Controller
{
    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        Cache::remember('albums',60, function (){
            return Album::query()
                ->orderBy('created_at', 'desc')
                ->where('is_status', 'LIKE', 1)
                ->paginate(12);
        });

        $albums = Cache::get('albums');

        return view(
            'Frontend.index',
            compact([
                'albums',
            ])
        );
    }


}

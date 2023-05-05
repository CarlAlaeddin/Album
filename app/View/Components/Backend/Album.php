<?php

namespace App\View\Components\Backend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Album extends Component
{
    public mixed $album;
    /**
     * Create a new component instance.
     */
    public function __construct($album)
    {
        $this->album = $album;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.album');
    }
}

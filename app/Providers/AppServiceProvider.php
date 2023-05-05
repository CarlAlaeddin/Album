<?php

namespace App\Providers;

use App\View\Components\Admin\Breadcrumb\BreadcrumbItem;
use App\View\Components\Admin\Breadcrumb\BreadcrumbTitle;
use App\View\Components\Backend\Album;
use App\View\Components\Backend\Forms\Form;
use App\View\Components\Backend\Forms\Input;
use App\View\Components\Backend\Forms\Select;
use App\View\Components\Backend\Forms\Textarea;
use App\View\Components\Backend\Forms\Label;
use App\View\Components\Backend\Button;
use App\View\Components\Admin\Breadcrumb;
use App\View\Components\Admin\Link;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('album',Album::class);
        Blade::component('form',Form::class);
        Blade::component('label',Label::class);
        Blade::component('input',Input::class);
        Blade::component('select',Select::class);
        Blade::component('textarea',Textarea::class);
        Blade::component('button',Button::class);
        Blade::component('breadcrumb',Breadcrumb::class);
        Blade::component('breadcrumb-item',BreadcrumbItem::class);
        Blade::component('breadcrumb-title',BreadcrumbTitle::class);
        Blade::component('link',Link::class);
    }
}

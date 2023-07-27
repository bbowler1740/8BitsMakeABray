<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class NavbarComposer
{
    public function compose(View $view)
    {
        $routes = [
            'Home',
            'Projects',
            'Blog Posts',
            'Resume',
            'Contact',
        ];

        $view->with(compact('routes'));
    }
}

<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class NavbarComposer
{
    public function compose(View $view) : void
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

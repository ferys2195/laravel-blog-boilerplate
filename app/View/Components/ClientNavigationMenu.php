<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientNavigationMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = [
            [
                'uri' => '#',
                'title' => 'Beranda',
                'icon'  => '',
            ],
            [
                'uri' => '#',
                'title' => 'Parent 1',
                'icon'  => '',
                'submenu' => [
                    [
                        'uri' => '#',
                        'title' => 'Sub Parent 1',
                        'icon'  => '',
                    ],
                    [
                        'uri' => '#',
                        'title' => 'Sub Parent 2',
                        'icon'  => '',
                    ],
                ],
            ],
            [
                'uri' => '#',
                'title' => 'Parent 2',
                'icon'  => '',
                'submenu' => [
                    [
                        'uri' => '#',
                        'title' => 'Sub Parent 1',
                        'icon'  => '',
                    ],
                    [
                        'uri' => '#',
                        'title' => 'Sub Parent 2',
                        'icon'  => '',
                    ],
                ],
            ],
            [
                'uri' => '/login',
                'title' => 'Login',
                'icon'  => '',
            ],
        ];
        return view('components.client-navigation-menu', compact('menus'));
    }
}

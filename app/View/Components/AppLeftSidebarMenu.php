<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLeftSidebarMenu extends Component
{
    public $appMenues = [
        [
            'iconclass' => "circle-08 text-pink",
            'label' => "Users"
        ],
        [
            'iconclass' => "planet text-blue",
            'label' => "Products"
        ],
        [
            'iconclass' => "pin-3 text-orange",
            'label' => "Product Category"
        ],
        [
            'iconclass' => "key-25 text-info",
            'label' => "Product Stock"
        ],
        [
            'iconclass' => "circle-08 text-pink",
            'label' => "Orders"
        ],

    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.app-left-sidebar-menu');
    }
}

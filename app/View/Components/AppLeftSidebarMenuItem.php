<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLeftSidebarMenuItem extends Component
{
    public $label;
    public $iconclass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $iconclass)
    {
        $this->label = $label;
        $this->iconclass = $iconclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.app-left-sidebar-menu-item');
    }
}

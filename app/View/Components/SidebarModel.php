<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarModel extends Component
{
    public $activeLink;
    public function __construct($activeLink)
    {
        $this->activeLink=$activeLink;
    }
    public function render(): View
    {
        return view('components.sidebar-model');
    }
}

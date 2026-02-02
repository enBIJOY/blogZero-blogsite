<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bgImage extends Component
{
    /**
     * Create a new component instance.
     */
    public string $bg;
    public function __construct($bg='success')
    {
        $this->bg=$bg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bg-image');
    }
}

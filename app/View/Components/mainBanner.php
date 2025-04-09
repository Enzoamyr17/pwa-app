<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mainBanner extends Component
{
    public $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function render()
    {
        return view('components.main-banner');
    }
}

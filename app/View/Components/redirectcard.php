<?php

namespace App\View\Components;

use Illuminate\View\Component;

class redirectcard extends Component
{
    public $href;
    public $title;
    public $imageUrl;

    public function __construct($href, $title, $imageUrl = null)
    {
        $this->href = $href;
        $this->title = $title;
        $this->imageUrl = $imageUrl;
    }

    public function render()
    {
        return view('components.redirectcard');
    }
}

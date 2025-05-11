<?php

namespace App\View\Components;

use Illuminate\View\Component;

class landingCard extends Component
{
    public $href;
    public $title;
    public $imageUrl;
    public $displayImg;

    public function __construct($title, $href = null, $imageUrl = null, $displayImg = null)
    {
        $this->title = $title;
        $this->href = $href;
        $this->imageUrl = $imageUrl;
        $this->displayImg = $displayImg;
    }

    public function render()
    {
        return view('components.landing-card');
    }
}

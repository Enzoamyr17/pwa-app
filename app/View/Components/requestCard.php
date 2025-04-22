<?php

namespace App\View\Components;

use Illuminate\View\Component;

class requestCard extends Component
{
    public $href;
    public $ordernum;
    public $partname;
    public $status;

    public function __construct($href, $ordernum, $partname, $status)
    {
        $this->href = $href;
        $this->ordernum = $ordernum;
        $this->partname = $partname;
        $this->status = $status;
    }

    public function render()
    {
        return view('components.request-card');
    }
}

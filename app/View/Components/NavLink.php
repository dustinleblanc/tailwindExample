<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $url;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param $url
     * @param $title
     */
    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}

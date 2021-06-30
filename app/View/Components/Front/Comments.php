<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class Comments extends Component
{
    public $comments;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.partials.comments');
    }
}

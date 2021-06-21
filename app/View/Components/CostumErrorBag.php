<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CostumErrorBag extends Component
{

    public $errorBag;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errorBag)
    {
        $this->errorBag = $errorBag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        dd($this->errorBag);
        return view('components.dashboard.partials.messages.error-bag');
    }
}

<?php

namespace App\View\Components\Dashboard\Errors;

use Illuminate\View\Component;

class ToastrErrorBag extends Component
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
        return view('components.dashboard.partials.messages.toastr-error-bag');
    }
}

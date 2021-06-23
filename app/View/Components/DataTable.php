<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{

    public $columns;
    public $iterator;
    public $isPaginated = false;
    public $tableColumnsCount;
    public $objectColumnNames;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($iterator = [], $columns = [], $tableColumnsCount = 0, $objectColumnNames = [], $isPaginated = false)
    {
        $this->iterator = $iterator;
        $this->isPaginated = $isPaginated;
        $this->columns = $columns;
        $this->tableColumnsCount = $tableColumnsCount;
        $this->objectColumnNames = $objectColumnNames;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.data-table');
    }
}

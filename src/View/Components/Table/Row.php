<?php

namespace Themesberg\FlowbiteBlade\View\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('flowbite-blade::components.table.row');
    }
}

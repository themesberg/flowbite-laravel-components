<?php

namespace Themesberg\FlowbiteBlade\View\Components\Table;

use Illuminate\View\Component;

class Cell extends Component
{
    public function __construct(
        public bool $header = false,
        public bool $rowHeader = false,
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.table.cell');
    }
}

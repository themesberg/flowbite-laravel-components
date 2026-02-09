<?php

namespace Themesberg\FlowbiteBlade\View\Components\Table;

use Illuminate\View\Component;

class Cell extends Component
{
    public function __construct(
        public bool $header = false,
    ) {}

    public function cellClass(): string
    {
        if ($this->header) {
            return 'px-6 py-3';
        }

        return 'px-6 py-4';
    }

    public function render()
    {
        return view('flowbite-blade::components.table.cell');
    }
}

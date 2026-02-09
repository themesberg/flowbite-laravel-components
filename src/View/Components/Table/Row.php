<?php

namespace Themesberg\FlowbiteBlade\View\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    public function __construct(
        public bool $striped = false,
        public bool $hoverable = false,
    ) {}

    public function rowClass(): string
    {
        $classes = ['bg-white border-b dark:bg-gray-800 dark:border-gray-700'];

        if ($this->striped) {
            $classes[] = 'odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800';
        }

        if ($this->hoverable) {
            $classes[] = 'hover:bg-gray-50 dark:hover:bg-gray-600';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.table.row');
    }
}

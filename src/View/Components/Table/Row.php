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
        $classes = ['bg-neutral-primary-soft border-b border-default'];

        if ($this->striped) {
            $classes[] = 'odd:bg-neutral-primary even:bg-neutral-secondary-soft';
        }

        if ($this->hoverable) {
            $classes[] = 'hover:bg-neutral-secondary-medium';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.table.row');
    }
}

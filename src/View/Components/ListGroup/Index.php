<?php

namespace Themesberg\FlowbiteBlade\View\Components\ListGroup;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public bool $bordered = true,
    ) {}

    public function listClass(): string
    {
        $classes = ['w-48 text-sm font-medium text-heading bg-neutral-primary-soft'];

        if ($this->bordered) {
            $classes[] = 'border border-default rounded-base';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.list-group.index');
    }
}

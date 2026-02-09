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
        $classes = ['w-48 text-sm font-medium text-gray-900 bg-white dark:bg-gray-700 dark:text-white'];

        if ($this->bordered) {
            $classes[] = 'border border-gray-200 rounded-lg dark:border-gray-600';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.list-group.index');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\ListGroup;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $href = null,
        public ?string $icon = null,
        public bool $active = false,
        public bool $disabled = false,
        public bool $button = false,
    ) {}

    public function itemClass(): string
    {
        $classes = ['block w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600'];

        if ($this->href || $this->button) {
            $classes[] = 'cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white';
        }

        if ($this->active) {
            $classes[] = 'text-white bg-blue-700 dark:bg-blue-600';
        }

        if ($this->disabled) {
            $classes[] = 'cursor-not-allowed opacity-50';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.list-group.item');
    }
}

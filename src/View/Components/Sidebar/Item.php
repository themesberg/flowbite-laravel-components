<?php

namespace Themesberg\FlowbiteBlade\View\Components\Sidebar;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public string $href = '#',
        public bool $active = false,
        public ?string $badge = null,
        public ?string $badgeColor = null,
    ) {
        //
    }

    public function badgeClasses(): string
    {
        return match ($this->badgeColor) {
            'blue' => 'inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300',
            'dark', 'gray' => 'inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300',
            default => 'inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.sidebar.item', [
            'badgeClassesComputed' => $this->badgeClasses(),
        ]);
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Spinner extends Component
{
    public string $color;
    public string $size;

    public function __construct(
        string $color = 'blue',
        string $size = 'md',
    ) {
        $this->color = $color;
        $this->size = $size;
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'w-3 h-3',
            'sm' => 'w-4 h-4',
            'lg' => 'w-12 h-12',
            'xl' => 'w-16 h-16',
            default => 'w-8 h-8',
        };
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-gray-200 fill-red-600 dark:text-gray-600',
            'green' => 'text-gray-200 fill-green-600 dark:text-gray-600',
            'yellow' => 'text-gray-200 fill-yellow-600 dark:text-gray-600',
            'purple' => 'text-gray-200 fill-purple-600 dark:text-gray-600',
            'pink' => 'text-gray-200 fill-pink-600 dark:text-gray-600',
            'gray', 'dark' => 'text-gray-200 fill-gray-600 dark:text-gray-600',
            'white' => 'text-gray-200 fill-white dark:text-gray-600',
            default => 'text-gray-200 fill-blue-600 dark:text-gray-600',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.spinner');
    }
}

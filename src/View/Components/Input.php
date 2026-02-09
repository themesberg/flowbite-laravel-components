<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Input extends Component
{
    use HasId;

    public string $sizeClasses;
    public string $colorClasses;

    public function __construct(
        public string $type = 'text',
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $helper = null,
        public string $size = 'md',
        public bool $disabled = false,
        public bool $readonly = false,
        public bool $required = false,
        public string $color = 'default',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'p-2 text-xs',
            'lg' => 'p-4 text-base',
            default => 'p-2.5 text-sm',
        };
        $this->colorClasses = match($this->color) {
            'green' => 'bg-green-50 border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-green-500',
            'red' => 'bg-red-50 border-red-500 text-red-900 dark:text-red-400 placeholder-red-700 dark:placeholder-red-500 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-red-500',
            default => 'bg-gray-50 border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.input');
    }
}

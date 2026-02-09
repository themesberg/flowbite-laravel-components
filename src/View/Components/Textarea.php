<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Textarea extends Component
{
    use HasId;

    public string $colorClasses;
    public string $labelClasses;
    public string $helperClasses;

    public function __construct(
        public ?string $label = null,
        public ?string $placeholder = null,
        public int $rows = 4,
        public ?string $helper = null,
        public bool $disabled = false,
        public bool $required = false,
        public string $color = 'default',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->colorClasses = match($this->color) {
            'green' => 'bg-green-50 border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-green-500',
            'red' => 'bg-red-50 border-red-500 text-red-900 dark:text-red-400 placeholder-red-700 dark:placeholder-red-500 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-red-500',
            default => 'bg-gray-50 border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
        };
        $this->labelClasses = match($this->color) {
            'green' => 'text-green-700 dark:text-green-500',
            'red' => 'text-red-700 dark:text-red-500',
            default => 'text-gray-900 dark:text-white',
        };
        $this->helperClasses = match($this->color) {
            'green' => 'text-green-600 dark:text-green-500',
            'red' => 'text-red-600 dark:text-red-500',
            default => 'text-gray-500 dark:text-gray-400',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.textarea');
    }
}

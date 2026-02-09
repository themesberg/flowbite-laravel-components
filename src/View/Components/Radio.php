<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Radio extends Component
{
    use HasId;

    public function __construct(
        public ?string $label = null,
        public ?string $helper = null,
        public bool $checked = false,
        public bool $disabled = false,
        public bool $required = false,
        public string $color = 'blue',
        public ?string $name = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-red-600 focus:ring-red-500 dark:focus:ring-red-600',
            'green' => 'text-green-600 focus:ring-green-500 dark:focus:ring-green-600',
            'purple' => 'text-purple-600 focus:ring-purple-500 dark:focus:ring-purple-600',
            'indigo' => 'text-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600',
            'pink' => 'text-pink-600 focus:ring-pink-500 dark:focus:ring-pink-600',
            'yellow' => 'text-yellow-400 focus:ring-yellow-500 dark:focus:ring-yellow-600',
            'teal' => 'text-teal-600 focus:ring-teal-500 dark:focus:ring-teal-600',
            'orange' => 'text-orange-500 focus:ring-orange-500 dark:focus:ring-orange-600',
            default => 'text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.radio');
    }
}

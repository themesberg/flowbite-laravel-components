<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Toggle extends Component
{
    use HasId;

    public string $sizeClasses;

    public function __construct(
        public ?string $label = null,
        public bool $checked = false,
        public bool $disabled = false,
        public bool $required = false,
        public string $color = 'blue',
        public string $size = 'md',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'w-9 h-5 after:h-4 after:w-4 after:top-[2px] after:start-[2px]',
            'lg' => 'w-14 h-7 after:h-6 after:w-6 after:top-0.5 after:start-[4px]',
            default => 'w-11 h-6 after:h-5 after:w-5 after:top-[2px] after:start-[2px]',
        };
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'peer-focus:ring-red-300 dark:peer-focus:ring-red-800 peer-checked:bg-red-600',
            'green' => 'peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:bg-green-600',
            'purple' => 'peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:bg-purple-600',
            'indigo' => 'peer-focus:ring-indigo-300 dark:peer-focus:ring-indigo-800 peer-checked:bg-indigo-600',
            'pink' => 'peer-focus:ring-pink-300 dark:peer-focus:ring-pink-800 peer-checked:bg-pink-600',
            'yellow' => 'peer-focus:ring-yellow-300 dark:peer-focus:ring-yellow-800 peer-checked:bg-yellow-400',
            'teal' => 'peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:bg-teal-600',
            'orange' => 'peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 peer-checked:bg-orange-500',
            default => 'peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 peer-checked:bg-blue-600',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.toggle');
    }
}

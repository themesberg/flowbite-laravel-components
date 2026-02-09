<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Toast extends Component
{
    use HasId;

    public string $colorClasses;
    public string $positionClasses;

    public function __construct(
        public string $color = 'blue',
        public bool $dismissible = true,
        public ?string $position = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);

        $this->colorClasses = match ($this->color) {
            'red' => 'text-red-500 bg-red-100 dark:bg-red-800 dark:text-red-200',
            'green' => 'text-green-500 bg-green-100 dark:bg-green-800 dark:text-green-200',
            'yellow' => 'text-yellow-500 bg-yellow-100 dark:bg-yellow-800 dark:text-yellow-200',
            'purple' => 'text-purple-500 bg-purple-100 dark:bg-purple-800 dark:text-purple-200',
            'pink' => 'text-pink-500 bg-pink-100 dark:bg-pink-800 dark:text-pink-200',
            'indigo' => 'text-indigo-500 bg-indigo-100 dark:bg-indigo-800 dark:text-indigo-200',
            'gray' => 'text-gray-500 bg-gray-100 dark:bg-gray-800 dark:text-gray-200',
            default => 'text-blue-500 bg-blue-100 dark:bg-blue-800 dark:text-blue-200',
        };

        $this->positionClasses = match ($this->position) {
            'top-left' => 'fixed top-5 left-5',
            'top-right' => 'fixed top-5 right-5',
            'bottom-left' => 'fixed bottom-5 left-5',
            'bottom-right' => 'fixed bottom-5 right-5',
            default => '',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.toast');
    }
}

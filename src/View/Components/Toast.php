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
            'red' => 'text-fg-danger-strong bg-danger-soft',
            'green' => 'text-fg-success-strong bg-success-soft',
            'yellow' => 'text-fg-warning bg-warning-soft',
            'purple' => 'text-purple-500 bg-purple-100 dark:bg-purple-800 dark:text-purple-200',
            'pink' => 'text-pink-500 bg-pink-100 dark:bg-pink-800 dark:text-pink-200',
            'indigo' => 'text-indigo-500 bg-indigo-100 dark:bg-indigo-800 dark:text-indigo-200',
            'gray' => 'text-heading bg-neutral-secondary-medium',
            default => 'text-fg-brand-strong bg-brand-softer',
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

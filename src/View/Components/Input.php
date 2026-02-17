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
            'green' => 'bg-success-soft border-success text-fg-success-strong placeholder-success focus:ring-success-medium focus:border-success',
            'red' => 'bg-danger-soft border-danger text-fg-danger-strong placeholder-danger focus:ring-danger-medium focus:border-danger',
            default => 'bg-neutral-secondary-soft border-default-medium text-heading focus:ring-brand-medium focus:border-brand',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.input');
    }
}

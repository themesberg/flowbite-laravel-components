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
            'green' => 'bg-success-soft border-success text-fg-success-strong placeholder-success focus:ring-success-medium focus:border-success',
            'red' => 'bg-danger-soft border-danger text-fg-danger-strong placeholder-danger focus:ring-danger-medium focus:border-danger',
            default => 'bg-neutral-secondary-soft border-default-medium text-heading focus:ring-brand-medium focus:border-brand',
        };
        $this->labelClasses = match($this->color) {
            'green' => 'text-fg-success-strong',
            'red' => 'text-fg-danger-strong',
            default => 'text-heading',
        };
        $this->helperClasses = match($this->color) {
            'green' => 'text-fg-success-strong',
            'red' => 'text-fg-danger-strong',
            default => 'text-body',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.textarea');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Select extends Component
{
    use HasId;

    public string $sizeClasses;
    public string $selectClasses;

    public function __construct(
        public ?string $label = null,
        public array $options = [],
        public ?string $placeholder = null,
        public ?string $helper = null,
        public string $size = 'md',
        public bool $disabled = false,
        public bool $required = false,
        public bool $multiple = false,
        public bool $underline = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'p-2 text-xs',
            'lg' => 'p-4 text-base',
            default => 'p-2.5 text-sm',
        };
        $this->selectClasses = $this->underline
            ? 'block py-2.5 px-0 w-full text-sm text-body bg-transparent border-0 border-b-2 border-default appearance-none focus:outline-none focus:ring-0 focus:border-default peer'
            : 'bg-neutral-secondary-soft border border-default-medium text-heading rounded-base focus:ring-brand-medium focus:border-brand block w-full ' . $this->sizeClasses;
    }

    public function render()
    {
        return view('flowbite-blade::components.select');
    }
}

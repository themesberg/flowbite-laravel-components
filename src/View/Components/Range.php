<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Range extends Component
{
    use HasId;

    public string $sizeClasses;

    public function __construct(
        public ?string $label = null,
        public int|float $min = 0,
        public int|float $max = 100,
        public int|float $step = 1,
        public int|float $value = 50,
        public string $size = 'md',
        public bool $disabled = false,
        public bool $required = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'h-1 range-sm',
            'lg' => 'h-3 range-lg',
            default => 'h-2',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.range');
    }
}

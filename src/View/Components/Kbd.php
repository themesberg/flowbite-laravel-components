<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Kbd extends Component
{
    public string $sizeClasses;

    public function __construct(
        public string $size = 'default',
        public bool $arrow = false,
    ) {
        $this->sizeClasses = match($this->size) {
            'sm' => 'px-1.5 py-1 text-xs',
            'lg' => 'px-4 py-2.5 text-sm',
            default => 'px-2 py-1.5 text-xs',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.kbd');
    }
}

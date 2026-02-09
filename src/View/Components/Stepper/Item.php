<?php

namespace Themesberg\FlowbiteBlade\View\Components\Stepper;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public bool $completed = false,
        public bool $current = false,
        public ?string $label = null,
        public ?string $description = null,
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.stepper.item');
    }
}

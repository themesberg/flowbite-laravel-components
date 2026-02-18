<?php

namespace Themesberg\FlowbiteBlade\View\Components\Dropdown;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $href = null,
        public ?string $icon = null,
        public ?string $fwbIcon = null,
        public bool $divider = false,
    ) {
    }

    public function render()
    {
        return view('flowbite-blade::components.dropdown.item');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\BottomNav;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public string $href = '#',
        public ?string $icon = null,
        public ?string $label = null,
        public bool $active = false,
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.bottom-nav.item');
    }
}

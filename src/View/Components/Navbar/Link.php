<?php

namespace Themesberg\FlowbiteBlade\View\Components\Navbar;

use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public string $href = '#',
        public bool $active = false,
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.navbar.link');
    }
}

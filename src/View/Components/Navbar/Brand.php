<?php

namespace Themesberg\FlowbiteBlade\View\Components\Navbar;

use Illuminate\View\Component;

class Brand extends Component
{
    public function __construct(
        public string $href = '/',
        public ?string $src = null,
        public string $alt = '',
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.navbar.brand');
    }
}

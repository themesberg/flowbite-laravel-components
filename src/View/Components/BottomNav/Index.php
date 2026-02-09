<?php

namespace Themesberg\FlowbiteBlade\View\Components\BottomNav;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public string $variant = 'default',
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.bottom-nav.index');
    }
}

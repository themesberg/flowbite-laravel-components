<?php

namespace Themesberg\FlowbiteBlade\View\Components\Breadcrumb;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $href = null,
        public bool $home = false,
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.breadcrumb.item');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\Layouts;

use Illuminate\View\Component;

class Admin extends Component
{
    public function __construct(
        public ?string $title = null,
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.layouts.admin');
    }
}

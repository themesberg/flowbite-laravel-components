<?php

namespace Themesberg\FlowbiteBlade\View\Components\Avatar;

use Illuminate\View\Component;

class Group extends Component
{
    public bool $stacked;

    public function __construct(
        bool $stacked = false,
    ) {
        $this->stacked = $stacked;
    }

    public function render()
    {
        return view('flowbite-blade::components.avatar.group');
    }
}

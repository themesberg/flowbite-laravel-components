<?php

namespace Themesberg\FlowbiteBlade\View\Components\Layouts;

use Illuminate\View\Component;

class Settings extends Component
{
    public function __construct(
        public ?string $heading = null,
        public ?string $subheading = null,
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.layouts.settings');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public string $positionClasses;

    public function __construct(
        public string $variant = 'default',
        public bool $sticky = false,
    ) {
        $this->positionClasses = $this->sticky ? 'fixed bottom-0 left-0 z-20 w-full' : '';
    }

    public function render()
    {
        return view('flowbite-blade::components.footer');
    }
}

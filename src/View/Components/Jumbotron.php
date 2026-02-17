<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public string $bgClasses;

    public function __construct(
        public ?string $bg = null,
        public string $variant = 'default',
    ) {
        $this->bgClasses = $this->bg
            ? 'bg-center bg-no-repeat bg-cover bg-blend-multiply bg-dark'
            : 'bg-neutral-primary';
    }

    public function render()
    {
        return view('flowbite-blade::components.jumbotron');
    }
}

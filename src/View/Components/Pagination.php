<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{
    public function __construct(
        public mixed $paginator = null,
        public string $variant = 'default',
        public bool $icons = false,
        public ?string $previousLabel = 'Previous',
        public ?string $nextLabel = 'Next',
        public bool $showInfo = false,
    ) {
        //
    }

    public function render()
    {
        return view('flowbite-blade::components.pagination');
    }
}

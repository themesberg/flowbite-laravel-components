<?php

namespace Themesberg\FlowbiteBlade\View\Components\Timeline;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $date = null,
        public ?string $title = null,
        public bool $horizontal = false,
        public ?string $fwbIcon = null,
    ) {}

    public function itemClass(): string
    {
        if ($this->horizontal) {
            return 'relative mb-6 sm:mb-0';
        }

        return 'mb-10 ms-6';
    }

    public function render()
    {
        return view('flowbite-blade::components.timeline.item');
    }
}

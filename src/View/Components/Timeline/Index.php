<?php

namespace Themesberg\FlowbiteBlade\View\Components\Timeline;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public bool $horizontal = false,
        public string $variant = 'default',
    ) {}

    public function listClass(): string
    {
        if ($this->horizontal) {
            return 'items-center sm:flex';
        }

        return 'relative border-s border-gray-200 dark:border-gray-700';
    }

    public function render()
    {
        return view('flowbite-blade::components.timeline.index');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\Gallery;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public int $grid = 3,
        public string $gap = 'gap-4',
        public bool $masonry = false,
    ) {}

    public function galleryClass(): string
    {
        if ($this->masonry) {
            return "grid grid-cols-2 md:grid-cols-{$this->grid} {$this->gap}";
        }

        return "grid grid-cols-2 md:grid-cols-{$this->grid} {$this->gap}";
    }

    public function render()
    {
        return view('flowbite-blade::components.gallery.index');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\Gallery;

use Illuminate\View\Component;

class Image extends Component
{
    public function __construct(
        public string $src = '',
        public string $alt = '',
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.gallery.image');
    }
}

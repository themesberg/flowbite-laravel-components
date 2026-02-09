<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Skeleton extends Component
{
    public function __construct(
        public string $variant = 'text',
    ) {}

    public static function availableVariants(): array
    {
        return ['text', 'card', 'image', 'video', 'list', 'widget', 'testimonial'];
    }

    public function render()
    {
        return view('flowbite-blade::components.skeleton');
    }
}

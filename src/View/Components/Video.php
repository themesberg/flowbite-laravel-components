<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Video extends Component
{
    public string $sizeClasses;

    public function __construct(
        public string $src = '',
        public bool $autoplay = false,
        public bool $muted = false,
        public bool $controls = true,
        public string $size = 'full',
    ) {
        $this->sizeClasses = match($this->size) {
            'sm' => 'w-full max-w-sm',
            'md' => 'w-full max-w-lg',
            'lg' => 'w-full max-w-4xl',
            'xl' => 'w-full max-w-7xl',
            'w-96' => 'w-96',
            'h-80' => 'h-80',
            'responsive' => 'w-full h-auto max-w-full',
            default => 'w-full',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.video');
    }
}

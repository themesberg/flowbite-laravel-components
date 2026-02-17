<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Spinner extends Component
{
    public string $color;
    public string $size;

    public function __construct(
        string $color = 'blue',
        string $size = 'md',
    ) {
        $this->color = $color;
        $this->size = $size;
    }

    public function baseClasses(): string
    {
        return 'animate-spin ' . $this->sizeClasses() . ' ' . $this->colorClasses();
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'w-3 h-3',
            'sm' => 'w-4 h-4',
            'lg' => 'w-12 h-12',
            'xl' => 'w-16 h-16',
            default => 'w-8 h-8',
        };
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-neutral-tertiary fill-danger',
            'green' => 'text-neutral-tertiary fill-success',
            'yellow' => 'text-neutral-tertiary fill-warning',
            'purple' => 'text-neutral-tertiary fill-purple-600',
            'pink' => 'text-neutral-tertiary fill-pink-600',
            'gray', 'dark' => 'text-neutral-tertiary fill-dark',
            'white' => 'text-neutral-tertiary fill-white',
            default => 'text-neutral-tertiary fill-brand',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.spinner');
    }
}

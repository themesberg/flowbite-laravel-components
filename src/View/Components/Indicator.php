<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Indicator extends Component
{
    public string $color;
    public string $size;
    public ?string $placement;
    public bool $pill;
    public ?int $count;

    public function __construct(
        string $color = 'blue',
        string $size = 'md',
        ?string $placement = null,
        bool $pill = false,
        ?int $count = null,
    ) {
        $this->color = $color;
        $this->size = $size;
        $this->placement = $placement;
        $this->pill = $pill;
        $this->count = $count;
    }

    public function sizeClasses(): string
    {
        if ($this->pill || $this->count !== null) {
            return match ($this->size) {
                'xs' => 'text-xs px-1.5 py-0.5',
                'sm' => 'text-xs px-2 py-0.5',
                'lg' => 'text-sm px-3 py-1',
                'xl' => 'text-base px-3.5 py-1',
                default => 'text-xs px-2.5 py-0.5',
            };
        }

        return match ($this->size) {
            'xs' => 'w-2 h-2',
            'sm' => 'w-2.5 h-2.5',
            'lg' => 'w-3.5 h-3.5',
            'xl' => 'w-6 h-6',
            default => 'w-3 h-3',
        };
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-red-500',
            'green' => 'bg-green-500',
            'yellow' => 'bg-yellow-500',
            'purple' => 'bg-purple-500',
            'pink' => 'bg-pink-500',
            'indigo' => 'bg-indigo-500',
            'gray', 'dark' => 'bg-gray-500',
            'white' => 'bg-white',
            default => 'bg-blue-500',
        };
    }

    public function placementClasses(): string
    {
        if (! $this->placement) {
            return '';
        }

        return match ($this->placement) {
            'top-left' => 'absolute top-0 start-0 -translate-x-1/2 -translate-y-1/2',
            'top-center' => 'absolute top-0 start-1/2 -translate-x-1/2 -translate-y-1/2',
            'top-right' => 'absolute top-0 end-0 translate-x-1/2 -translate-y-1/2',
            'center-left' => 'absolute top-1/2 start-0 -translate-x-1/2 -translate-y-1/2',
            'center' => 'absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2',
            'center-right' => 'absolute top-1/2 end-0 translate-x-1/2 -translate-y-1/2',
            'bottom-left' => 'absolute bottom-0 start-0 -translate-x-1/2 translate-y-1/2',
            'bottom-center' => 'absolute bottom-0 start-1/2 -translate-x-1/2 translate-y-1/2',
            'bottom-right' => 'absolute bottom-0 end-0 translate-x-1/2 translate-y-1/2',
            default => '',
        };
    }

    public function roundedClasses(): string
    {
        if ($this->pill || $this->count !== null) {
            return 'rounded';
        }

        return 'rounded-full';
    }

    public function render()
    {
        return view('flowbite-blade::components.indicator');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    public int|float $value;
    public int $max;
    public string $color;
    public string $size;
    public ?string $label;

    public function __construct(
        int|float $value = 0,
        int $max = 100,
        string $color = 'blue',
        string $size = 'md',
        ?string $label = null,
    ) {
        $this->value = $value;
        $this->max = $max;
        $this->color = $color;
        $this->size = $size;
        $this->label = $label;
    }

    public function percentage(): float
    {
        if ($this->max <= 0) {
            return 0;
        }

        return min(100, max(0, ($this->value / $this->max) * 100));
    }

    public function containerClasses(): string
    {
        return 'w-full bg-neutral-quaternary rounded-full ' . $this->sizeClasses();
    }

    public function barClasses(): string
    {
        return $this->colorClasses() . ' ' . $this->sizeClasses() . ' rounded-full ' . $this->labelSizeClasses() . ' font-medium text-center p-0.5 leading-none text-white';
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'h-1',
            'sm' => 'h-1.5',
            'lg' => 'h-4',
            'xl' => 'h-6',
            default => 'h-2.5',
        };
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-danger',
            'green' => 'bg-success',
            'yellow' => 'bg-warning',
            'purple' => 'bg-purple-600 dark:bg-purple-500',
            'indigo' => 'bg-indigo-600 dark:bg-indigo-500',
            'gray', 'dark' => 'bg-dark',
            default => 'bg-brand',
        };
    }

    public function labelSizeClasses(): string
    {
        return match ($this->size) {
            'lg' => 'text-sm',
            'xl' => 'text-base',
            default => 'text-xs',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.progress');
    }
}

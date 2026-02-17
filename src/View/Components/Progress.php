<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    public int|float $value;
    public int $max;
    public string $color;
    public string $size;
    public ?string $outsideLabel;
    public ?string $outsideRightLabel;
    public ?string $insideLabel;

    public function __construct(
        int|float $value = 0,
        int $max = 100,
        string $color = 'blue',
        string $size = 'md',
        ?string $outsideLabel = null,
        ?string $outsideRightLabel = null,
        ?string $insideLabel = null,
    ) {
        $this->value = $value;
        $this->max = $max;
        $this->color = $color;
        $this->outsideLabel = $outsideLabel;
        $this->outsideRightLabel = $outsideRightLabel;
        $this->insideLabel = $insideLabel;
        $this->size = $this->insideLabel && !in_array($size, ['lg', 'xl']) ? 'lg' : $size;
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
        $base = $this->colorClasses() . ' ' . $this->sizeClasses() . ' rounded-full';

        if ($this->insideLabel) {
            return $base . ' ' . $this->labelSizeClasses() . ' font-medium text-white flex items-center justify-center';
        }

        return $base;
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

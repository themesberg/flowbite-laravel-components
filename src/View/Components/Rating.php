<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Rating extends Component
{
    public float $value;
    public int $max;
    public string $size;
    public ?int $count;
    public bool $showValue;

    public function __construct(
        float $value = 0,
        int $max = 5,
        string $size = 'md',
        ?int $count = null,
        bool $showValue = false,
    ) {
        $this->value = $value;
        $this->max = $max;
        $this->size = $size;
        $this->count = $count;
        $this->showValue = $showValue;
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'sm' => 'w-4 h-4',
            'lg' => 'w-7 h-7',
            default => 'w-5 h-5',
        };
    }

    public function filledStars(): int
    {
        return (int) floor($this->value);
    }

    public function hasHalfStar(): bool
    {
        return ($this->value - floor($this->value)) >= 0.5;
    }

    public function emptyStars(): int
    {
        $empty = $this->max - $this->filledStars();
        if ($this->hasHalfStar()) {
            $empty--;
        }

        return max(0, $empty);
    }

    public function render()
    {
        return view('flowbite-blade::components.rating');
    }
}

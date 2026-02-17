<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public ?string $href;
    public bool $horizontal;
    public ?string $img;
    public string $imgAlt;
    public string $imgPosition;

    public function __construct(
        ?string $href = null,
        bool $horizontal = false,
        ?string $img = null,
        string $imgAlt = '',
        string $imgPosition = 'top',
    ) {
        $this->href = $href;
        $this->horizontal = $horizontal;
        $this->img = $img;
        $this->imgAlt = $imgAlt;
        $this->imgPosition = $imgPosition;
    }

    public function baseClasses(): string
    {
        $classes = 'bg-neutral-primary-soft border border-default rounded-base shadow-xs overflow-hidden';

        if ($this->horizontal) {
            $classes .= ' flex flex-col md:flex-row md:max-w-xl';
        }

        if ($this->href) {
            $classes .= ' hover:shadow-sm transition-shadow';
        }

        return $classes;
    }

    public function imgClasses(): string
    {
        if ($this->horizontal) {
            return 'object-cover w-full rounded-t-base h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-base';
        }

        return match ($this->imgPosition) {
            'bottom' => 'rounded-b-base',
            default => 'rounded-t-base',
        };
    }

    public function resolvedTag(): string
    {
        return $this->href ? 'a' : 'div';
    }

    public function render()
    {
        return view('flowbite-blade::components.card');
    }
}

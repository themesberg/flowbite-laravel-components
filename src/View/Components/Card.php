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
        $classes = 'bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700';

        if ($this->horizontal) {
            $classes .= ' flex flex-col md:flex-row md:max-w-xl';
        }

        if ($this->href) {
            $classes .= ' hover:shadow-lg transition-shadow';
        }

        return $classes;
    }

    public function imgClasses(): string
    {
        if ($this->horizontal) {
            return 'object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg';
        }

        return match ($this->imgPosition) {
            'bottom' => 'rounded-b-lg',
            default => 'rounded-t-lg',
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

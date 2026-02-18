<?php

namespace Themesberg\FlowbiteBlade\View\Components\ListGroup;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $href = null,
        public ?string $icon = null,
        public ?string $fwbIcon = null,
        public bool $active = false,
        public bool $disabled = false,
        public bool $button = false,
    ) {}

    public function itemClass(): string
    {
        $classes = ['block w-full px-4 py-2 border-b border-default'];

        if ($this->href || $this->button) {
            $classes[] = 'cursor-pointer hover:bg-neutral-secondary-medium hover:text-fg-brand-strong focus:outline-none focus:ring-2 focus:ring-brand-medium focus:text-fg-brand-strong';
        }

        if ($this->active) {
            $classes[] = 'text-white bg-brand';
        }

        if ($this->disabled) {
            $classes[] = 'cursor-not-allowed opacity-50';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.list-group.item');
    }
}

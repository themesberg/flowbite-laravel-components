<?php

namespace Themesberg\FlowbiteBlade\View\Components\Sidebar;

use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public string $href = '#',
        public bool $active = false,
        public ?string $badge = null,
        public ?string $badgeColor = null,
    ) {
        //
    }

    public function badgeClasses(): string
    {
        return match ($this->badgeColor) {
            'blue' => 'inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-fg-brand-strong bg-brand-softer rounded-full',
            'dark', 'gray' => 'inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-heading bg-neutral-secondary-medium rounded-full',
            default => 'inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-heading bg-neutral-secondary-medium rounded-full',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.sidebar.item', [
            'badgeClassesComputed' => $this->badgeClasses(),
        ]);
    }
}

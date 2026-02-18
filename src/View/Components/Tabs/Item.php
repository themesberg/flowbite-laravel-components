<?php

namespace Themesberg\FlowbiteBlade\View\Components\Tabs;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Item extends Component
{
    use HasId;

    public function __construct(
        public bool $active = false,
        public bool $disabled = false,
        public string $variant = 'default',
        public ?string $fwbIcon = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function tabClasses(): string
    {
        if ($this->disabled) {
            return match ($this->variant) {
                'pills' => 'inline-block px-4 py-3 text-fg-disabled cursor-not-allowed rounded-base',
                'full' => 'inline-block w-full p-4 text-fg-disabled cursor-not-allowed bg-neutral-secondary-soft',
                'underline' => 'inline-block p-4 text-fg-disabled border-b-2 border-transparent cursor-not-allowed',
                default => 'inline-block p-4 text-fg-disabled rounded-t-base cursor-not-allowed',
            };
        }

        if ($this->active) {
            return match ($this->variant) {
                'pills' => 'inline-block px-4 py-3 text-white bg-brand rounded-base active',
                'full' => 'inline-block w-full p-4 text-heading bg-neutral-secondary-medium active focus:outline-none',
                'underline' => 'inline-block p-4 text-fg-brand-strong border-b-2 border-brand rounded-t-base active',
                default => 'inline-block p-4 text-fg-brand-strong bg-neutral-secondary-medium rounded-t-base active',
            };
        }

        return match ($this->variant) {
            'pills' => 'inline-block px-4 py-3 rounded-base hover:text-heading hover:bg-neutral-secondary-medium',
            'full' => 'inline-block w-full p-4 bg-neutral-primary-soft hover:text-heading hover:bg-neutral-secondary-soft focus:outline-none',
            'underline' => 'inline-block p-4 border-b-2 border-transparent rounded-t-base hover:text-heading hover:border-default',
            default => 'inline-block p-4 rounded-t-base hover:text-heading hover:bg-neutral-secondary-soft',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tabs.item', [
            'tabClasses' => $this->tabClasses(),
        ]);
    }
}

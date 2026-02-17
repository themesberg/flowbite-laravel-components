<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Banner extends Component
{
    use HasId;

    public string $positionClasses;
    public string $borderClasses;
    public string $colorClasses;

    public function __construct(
        public string $position = 'top',
        public bool $dismissible = true,
        public string $color = 'default',
        public string $variant = 'default',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->positionClasses = match($this->position) {
            'bottom' => 'fixed bottom-0 start-0 z-50 w-full',
            default => 'fixed top-0 start-0 z-50 w-full',
        };
        $this->borderClasses = match($this->position) {
            'bottom' => 'border-t',
            default => 'border-b',
        };
        $this->colorClasses = match($this->color) {
            'dark' => 'bg-dark text-white',
            'info' => 'bg-brand-softer text-fg-brand-strong',
            default => 'bg-neutral-secondary-soft',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.banner');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Tooltip extends Component
{
    use HasId;

    public string $styleClasses;

    public function __construct(
        public string $placement = 'top',
        public string $triggerType = 'hover',
        public string $style = 'dark',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->styleClasses = match ($this->style) {
            'light' => 'bg-neutral-primary-soft text-heading border border-default shadow-sm',
            default => 'bg-dark text-white',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tooltip');
    }
}

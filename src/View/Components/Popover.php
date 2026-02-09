<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Popover extends Component
{
    use HasId;

    public function __construct(
        public string $placement = 'top',
        public string $triggerType = 'hover',
        public bool $arrow = true,
        public ?int $offset = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.popover');
    }
}

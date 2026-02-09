<?php

namespace Themesberg\FlowbiteBlade\View\Components\SpeedDial;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Index extends Component
{
    use HasId;

    public function __construct(
        public string $placement = 'top',
        public string $triggerType = 'hover',
        public bool $tooltip = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.speed-dial.index');
    }
}

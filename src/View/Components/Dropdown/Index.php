<?php

namespace Themesberg\FlowbiteBlade\View\Components\Dropdown;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Index extends Component
{
    use HasId;

    public function __construct(
        public string $label = 'Dropdown',
        public string $color = 'blue',
        public string $size = 'md',
        public string $placement = 'bottom',
        public bool $inline = false,
        public string $triggerType = 'click',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.dropdown.index');
    }
}

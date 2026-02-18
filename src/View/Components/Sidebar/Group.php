<?php

namespace Themesberg\FlowbiteBlade\View\Components\Sidebar;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Group extends Component
{
    use HasId;

    public function __construct(
        public string $label = '',
        public ?string $fwbIcon = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.sidebar.group');
    }
}

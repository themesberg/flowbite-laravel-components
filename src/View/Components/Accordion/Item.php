<?php

namespace Themesberg\FlowbiteBlade\View\Components\Accordion;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Item extends Component
{
    use HasId;

    public function __construct(
        public bool $open = false,
        public string $arrowStyle = 'default',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.accordion.item');
    }
}

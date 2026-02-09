<?php

namespace Themesberg\FlowbiteBlade\View\Components\Accordion;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Index extends Component
{
    use HasId;

    public function __construct(
        public bool $flush = false,
        public bool $alwaysOpen = false,
        public bool $separated = false,
        public ?string $activeClasses = null,
        public ?string $inactiveClasses = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function dataAccordionValue(): string
    {
        return $this->alwaysOpen ? 'open' : 'collapse';
    }

    public function render()
    {
        return view('flowbite-blade::components.accordion.index');
    }
}

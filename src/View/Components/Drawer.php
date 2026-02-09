<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Drawer extends Component
{
    use HasId;

    public string $positionClasses;

    public function __construct(
        public string $position = 'left',
        public bool $backdrop = true,
        public bool $bodyScrolling = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->positionClasses = match ($this->position) {
            'right' => 'fixed top-0 right-0 z-40 h-screen w-80 transition-transform translate-x-full',
            'top' => 'fixed top-0 left-0 right-0 z-40 w-full transition-transform -translate-y-full',
            'bottom' => 'fixed bottom-0 left-0 right-0 z-40 w-full transition-transform translate-y-full',
            default => 'fixed top-0 left-0 z-40 h-screen w-80 transition-transform -translate-x-full',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.drawer');
    }
}

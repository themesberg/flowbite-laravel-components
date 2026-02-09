<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Modal extends Component
{
    use HasId;

    public string $sizeClass;

    public function __construct(
        public string $size = 'md',
        public string $position = 'center',
        public bool $dismissible = true,
        public bool $popup = false,
        public bool $static = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClass = match ($this->size) {
            'sm' => 'max-w-md',
            'lg' => 'max-w-4xl',
            'xl' => 'max-w-7xl',
            default => 'max-w-lg',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.modal');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Modal extends Component
{
    use HasId;

    public string $sizeClass;

    public string $positionClass;

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
        $this->positionClass = match ($this->position) {
            'top-left' => 'justify-start items-start',
            'top-center' => 'justify-center items-start',
            'top-right' => 'justify-end items-start',
            'center-left' => 'justify-start items-center',
            'center-right' => 'justify-end items-center',
            'bottom-left' => 'justify-start items-end',
            'bottom-center' => 'justify-center items-end',
            'bottom-right' => 'justify-end items-end',
            default => 'justify-center items-center',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.modal');
    }
}

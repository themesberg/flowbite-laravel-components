<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class FileInput extends Component
{
    use HasId;

    public string $sizeClasses;

    public function __construct(
        public ?string $label = null,
        public ?string $helper = null,
        public bool $multiple = false,
        public string $size = 'md',
        public bool $disabled = false,
        public bool $required = false,
        public bool $dropzone = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'text-xs',
            'lg' => 'text-lg',
            default => 'text-sm',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.file-input');
    }
}

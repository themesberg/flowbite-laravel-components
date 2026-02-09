<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class FloatingLabel extends Component
{
    use HasId;

    public function __construct(
        public string $type = 'text',
        public string $label = '',
        public string $variant = 'standard',
        public string $color = 'default',
        public string $size = 'md',
        public bool $disabled = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function render()
    {
        return view('flowbite-blade::components.floating-label');
    }
}

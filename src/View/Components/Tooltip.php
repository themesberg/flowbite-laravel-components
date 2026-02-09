<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Tooltip extends Component
{
    use HasId;

    public string $styleClasses;

    public function __construct(
        public string $placement = 'top',
        public string $triggerType = 'hover',
        public string $style = 'dark',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->styleClasses = match ($this->style) {
            'light' => 'bg-white text-gray-900 border border-gray-200 shadow-sm',
            default => 'bg-gray-900 text-white dark:bg-gray-700',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tooltip');
    }
}

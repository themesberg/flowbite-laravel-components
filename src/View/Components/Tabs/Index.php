<?php

namespace Themesberg\FlowbiteBlade\View\Components\Tabs;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Index extends Component
{
    use HasId;

    public string $variantClasses;

    public function __construct(
        public string $variant = 'default',
        public ?string $activeClasses = null,
        public ?string $inactiveClasses = null,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->variantClasses = $this->resolveVariantClasses();
    }

    protected function resolveVariantClasses(): string
    {
        return match ($this->variant) {
            'underline' => 'flex flex-wrap -mb-px text-sm font-medium text-center text-body',
            'pills' => 'flex flex-wrap text-sm font-medium text-center text-body',
            'full' => 'flex flex-wrap text-sm font-medium text-center text-body divide-x divide-default rounded-base shadow-sm',
            default => 'flex flex-wrap text-sm font-medium text-center text-body border-b border-default',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tabs.index');
    }
}

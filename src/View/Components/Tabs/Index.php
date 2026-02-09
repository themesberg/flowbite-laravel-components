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
            'underline' => 'flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400',
            'pills' => 'flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400',
            'full' => 'flex flex-wrap text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow-sm dark:divide-gray-700 dark:text-gray-400',
            default => 'flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tabs.index');
    }
}

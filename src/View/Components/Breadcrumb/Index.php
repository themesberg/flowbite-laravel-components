<?php

namespace Themesberg\FlowbiteBlade\View\Components\Breadcrumb;

use Illuminate\View\Component;

class Index extends Component
{
    public string $containerClasses;

    public function __construct(
        public bool $solid = false,
    ) {
        $this->containerClasses = $this->resolveContainerClasses();
    }

    protected function resolveContainerClasses(): string
    {
        if ($this->solid) {
            return 'flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700';
        }

        return 'flex';
    }

    public function render()
    {
        return view('flowbite-blade::components.breadcrumb.index');
    }
}

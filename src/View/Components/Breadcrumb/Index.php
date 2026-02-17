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
            return 'flex px-5 py-3 text-heading border border-default rounded-base bg-neutral-secondary-soft';
        }

        return 'flex';
    }

    public function render()
    {
        return view('flowbite-blade::components.breadcrumb.index');
    }
}

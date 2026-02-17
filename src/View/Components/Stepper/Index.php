<?php

namespace Themesberg\FlowbiteBlade\View\Components\Stepper;

use Illuminate\View\Component;

class Index extends Component
{
    public string $containerClasses;

    public function __construct(
        public string $variant = 'default',
    ) {
        $this->containerClasses = match($this->variant) {
            'vertical' => 'space-y-4 w-full',
            'breadcrumb' => 'flex items-center border border-default rounded-base shadow-sm bg-neutral-primary-soft p-3 sm:p-4',
            'timeline' => 'relative border-s border-default ms-3.5',
            default => 'flex items-center w-full text-sm font-medium text-center text-body sm:text-base',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.stepper.index');
    }
}

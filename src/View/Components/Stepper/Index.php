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
            'breadcrumb' => 'flex items-center border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 bg-white dark:bg-gray-800 p-3 sm:p-4',
            'timeline' => 'relative border-s border-gray-200 dark:border-gray-700 ms-3.5',
            default => 'flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.stepper.index');
    }
}

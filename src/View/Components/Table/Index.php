<?php

namespace Themesberg\FlowbiteBlade\View\Components\Table;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public bool $striped = false,
        public bool $hoverable = false,
        public bool $shadow = false,
        public bool $noborder = false,
    ) {}

    public function tableClass(): string
    {
        return 'w-full text-sm text-left rtl:text-right text-body';
    }

    public function wrapperClass(): string
    {
        $classes = ['relative overflow-x-auto rounded-base'];

        if (! $this->noborder) {
            $classes[] = 'border border-default';
        }

        if ($this->shadow) {
            $classes[] = 'shadow-xs';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.table.index');
    }
}

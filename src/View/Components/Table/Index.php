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
        $classes = ['w-full text-sm text-left rtl:text-right text-body'];

        return implode(' ', $classes);
    }

    public function wrapperClass(): string
    {
        $classes = ['relative overflow-x-auto sm:rounded-base'];

        if ($this->shadow) {
            $classes[] = 'shadow-md';
        }

        return implode(' ', $classes);
    }

    public function render()
    {
        return view('flowbite-blade::components.table.index');
    }
}

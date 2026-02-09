<?php

namespace Themesberg\FlowbiteBlade\View\Components\Navbar;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Index extends Component
{
    use HasId;

    public string $navClasses;

    public function __construct(
        public bool $fluid = true,
        public bool $rounded = false,
        public bool $bordered = false,
        public bool $sticky = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->navClasses = $this->resolveNavClasses();
    }

    protected function resolveNavClasses(): string
    {
        $classes = 'bg-white dark:bg-gray-900';

        if ($this->bordered) {
            $classes .= ' border-gray-200 dark:border-gray-600 border-b';
        } else {
            $classes .= ' border-gray-200 dark:border-gray-600';
        }

        if ($this->rounded) {
            $classes .= ' rounded-lg';
        }

        if ($this->sticky) {
            $classes .= ' fixed w-full z-20 top-0 start-0';
        }

        return $classes;
    }

    public function render()
    {
        return view('flowbite-blade::components.navbar.index');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Select extends Component
{
    use HasId;

    public string $sizeClasses;
    public string $selectClasses;

    public function __construct(
        public ?string $label = null,
        public array $options = [],
        public ?string $placeholder = null,
        public ?string $helper = null,
        public string $size = 'md',
        public bool $disabled = false,
        public bool $required = false,
        public bool $multiple = false,
        public bool $underline = false,
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
        $this->sizeClasses = match($this->size) {
            'sm' => 'p-2 text-xs',
            'lg' => 'p-4 text-base',
            default => 'p-2.5 text-sm',
        };
        $this->selectClasses = $this->underline
            ? 'block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer'
            : 'bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ' . $this->sizeClasses . ' dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
    }

    public function render()
    {
        return view('flowbite-blade::components.select');
    }
}

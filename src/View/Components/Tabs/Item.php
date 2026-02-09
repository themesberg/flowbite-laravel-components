<?php

namespace Themesberg\FlowbiteBlade\View\Components\Tabs;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Item extends Component
{
    use HasId;

    public function __construct(
        public bool $active = false,
        public bool $disabled = false,
        public string $variant = 'default',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function tabClasses(): string
    {
        if ($this->disabled) {
            return match ($this->variant) {
                'pills' => 'inline-block px-4 py-3 text-gray-400 cursor-not-allowed rounded-lg dark:text-gray-500',
                'full' => 'inline-block w-full p-4 text-gray-400 cursor-not-allowed bg-gray-50 dark:bg-gray-800 dark:text-gray-500',
                'underline' => 'inline-block p-4 text-gray-400 border-b-2 border-transparent cursor-not-allowed dark:text-gray-500',
                default => 'inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500',
            };
        }

        if ($this->active) {
            return match ($this->variant) {
                'pills' => 'inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active',
                'full' => 'inline-block w-full p-4 text-gray-900 bg-gray-100 active focus:outline-none dark:bg-gray-700 dark:text-white',
                'underline' => 'inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500',
                default => 'inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500',
            };
        }

        return match ($this->variant) {
            'pills' => 'inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white',
            'full' => 'inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700',
            'underline' => 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300',
            default => 'inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.tabs.item', [
            'tabClasses' => $this->tabClasses(),
        ]);
    }
}

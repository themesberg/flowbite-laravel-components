<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Alert extends Component
{
    use HasId;

    public string $color;
    public ?string $icon;
    public bool $dismissible;
    public bool $bordered;

    public function __construct(
        string $color = 'blue',
        ?string $icon = null,
        bool $dismissible = false,
        bool $bordered = false,
        ?string $id = null,
    ) {
        $this->color = $color;
        $this->icon = $icon;
        $this->dismissible = $dismissible;
        $this->bordered = $bordered;
        $this->initializeHasId($id);
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400',
            'green' => 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400',
            'yellow' => 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300',
            'gray', 'dark' => 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300',
            default => 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400',
        };
    }

    public function borderClasses(): string
    {
        if (! $this->bordered) {
            return '';
        }

        return match ($this->color) {
            'red' => 'border-t-4 border-red-300 dark:border-red-800',
            'green' => 'border-t-4 border-green-300 dark:border-green-800',
            'yellow' => 'border-t-4 border-yellow-300 dark:border-yellow-800',
            'gray', 'dark' => 'border-t-4 border-gray-300 dark:border-gray-800',
            default => 'border-t-4 border-blue-300 dark:border-blue-800',
        };
    }

    public function dismissButtonClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-red-50 text-red-500 focus:ring-red-400 hover:bg-red-200 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700',
            'green' => 'bg-green-50 text-green-500 focus:ring-green-400 hover:bg-green-200 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700',
            'yellow' => 'bg-yellow-50 text-yellow-500 focus:ring-yellow-400 hover:bg-yellow-200 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700',
            'gray', 'dark' => 'bg-gray-50 text-gray-500 focus:ring-gray-400 hover:bg-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700',
            default => 'bg-blue-50 text-blue-500 focus:ring-blue-400 hover:bg-blue-200 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.alert');
    }
}

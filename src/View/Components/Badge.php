<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Badge extends Component
{
    use HasId;

    public string $color;
    public string $size;
    public bool $pill;
    public bool $bordered;
    public bool $dismissible;
    public ?string $href;
    public bool $iconOnly;

    public function __construct(
        string $color = 'blue',
        string $size = 'xs',
        bool $pill = false,
        bool $bordered = false,
        bool $dismissible = false,
        ?string $href = null,
        bool $iconOnly = false,
        ?string $id = null,
    ) {
        $this->color = $color;
        $this->size = $size;
        $this->pill = $pill;
        $this->bordered = $bordered;
        $this->dismissible = $dismissible;
        $this->href = $href;
        $this->iconOnly = $iconOnly;
        $this->initializeHasId($id);
    }

    public function sizeClasses(): string
    {
        if ($this->iconOnly) {
            return match ($this->size) {
                'sm' => 'p-1.5',
                default => 'p-1',
            };
        }

        return match ($this->size) {
            'sm' => 'text-sm px-3 py-1',
            default => 'text-xs px-2.5 py-0.5',
        };
    }

    public function colorClasses(): string
    {
        if ($this->bordered) {
            return $this->borderedColorClasses();
        }

        return match ($this->color) {
            'red' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
            'green' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
            'yellow' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
            'purple' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
            'pink' => 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300',
            'indigo' => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300',
            'gray', 'dark' => 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-300',
            default => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
        };
    }

    protected function borderedColorClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-red-100 text-red-800 border border-red-400 dark:bg-gray-700 dark:text-red-400',
            'green' => 'bg-green-100 text-green-800 border border-green-400 dark:bg-gray-700 dark:text-green-400',
            'yellow' => 'bg-yellow-100 text-yellow-800 border border-yellow-300 dark:bg-gray-700 dark:text-yellow-300',
            'purple' => 'bg-purple-100 text-purple-800 border border-purple-400 dark:bg-gray-700 dark:text-purple-400',
            'pink' => 'bg-pink-100 text-pink-800 border border-pink-400 dark:bg-gray-700 dark:text-pink-400',
            'indigo' => 'bg-indigo-100 text-indigo-800 border border-indigo-400 dark:bg-gray-700 dark:text-indigo-400',
            'gray', 'dark' => 'bg-gray-100 text-gray-800 border border-gray-500 dark:bg-gray-700 dark:text-gray-400',
            default => 'bg-blue-100 text-blue-800 border border-blue-400 dark:bg-gray-700 dark:text-blue-400',
        };
    }

    public function dismissButtonClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-red-400 hover:bg-red-200 hover:text-red-900 dark:hover:bg-red-800 dark:hover:text-red-300',
            'green' => 'text-green-400 hover:bg-green-200 hover:text-green-900 dark:hover:bg-green-800 dark:hover:text-green-300',
            'yellow' => 'text-yellow-400 hover:bg-yellow-200 hover:text-yellow-900 dark:hover:bg-yellow-800 dark:hover:text-yellow-300',
            'purple' => 'text-purple-400 hover:bg-purple-200 hover:text-purple-900 dark:hover:bg-purple-800 dark:hover:text-purple-300',
            'pink' => 'text-pink-400 hover:bg-pink-200 hover:text-pink-900 dark:hover:bg-pink-800 dark:hover:text-pink-300',
            'indigo' => 'text-indigo-400 hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-800 dark:hover:text-indigo-300',
            'gray', 'dark' => 'text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300',
            default => 'text-blue-400 hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300',
        };
    }

    public function roundedClasses(): string
    {
        return $this->pill ? 'rounded-full' : 'rounded';
    }

    public function render()
    {
        return view('flowbite-blade::components.badge');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $color;
    public string $size;
    public bool $pill;
    public bool $outline;
    public bool $disabled;
    public ?string $href;
    public ?string $tag;

    public function __construct(
        string $color = 'blue',
        string $size = 'md',
        bool $pill = false,
        bool $outline = false,
        bool $disabled = false,
        ?string $href = null,
        ?string $tag = null,
    ) {
        $this->color = $color;
        $this->size = $size;
        $this->pill = $pill;
        $this->outline = $outline;
        $this->disabled = $disabled;
        $this->href = $href;
        $this->tag = $tag;
    }

    public function baseClasses(): string
    {
        return 'font-medium focus:outline-none text-center inline-flex items-center';
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'px-3 py-2 text-xs',
            'sm' => 'px-3 py-2 text-sm',
            'lg' => 'px-5 py-3 text-base',
            'xl' => 'px-6 py-3.5 text-base',
            default => 'px-5 py-2.5 text-sm',
        };
    }

    public function colorClasses(): string
    {
        if ($this->outline) {
            return $this->outlineColorClasses();
        }

        return $this->solidColorClasses();
    }

    protected function solidColorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800',
            'green' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800',
            'yellow' => 'text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900',
            'purple' => 'text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800',
            'dark' => 'text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700',
            'light' => 'text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700',
            default => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
        };
    }

    protected function outlineColorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-800',
            'green' => 'text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-800',
            'yellow' => 'text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900',
            'purple' => 'text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:border-purple-500 dark:text-purple-500 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-800',
            'dark' => 'text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800',
            'light' => 'text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700',
            default => 'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800',
        };
    }

    public function roundedClasses(): string
    {
        return $this->pill ? 'rounded-full' : 'rounded-lg';
    }

    public function resolvedTag(): string
    {
        if ($this->href) {
            return 'a';
        }

        if ($this->tag) {
            return $this->tag;
        }

        return 'button';
    }

    public function render()
    {
        return view('flowbite-blade::components.button');
    }
}

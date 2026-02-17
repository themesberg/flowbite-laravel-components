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

    public function baseClasses(): string
    {
        return 'font-medium inline-flex items-center ' . $this->sizeClasses() . ' ' . $this->colorClasses() . ' ' . $this->roundedClasses();
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
            'red' => 'bg-danger-soft text-fg-danger-strong',
            'green' => 'bg-success-soft text-fg-success-strong',
            'yellow' => 'bg-warning-soft text-fg-warning',
            'purple' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
            'pink' => 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300',
            'indigo' => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300',
            'gray', 'dark' => 'bg-neutral-secondary-medium text-heading',
            default => 'bg-brand-softer text-fg-brand-strong',
        };
    }

    protected function borderedColorClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-danger-soft text-fg-danger-strong border border-danger-subtle',
            'green' => 'bg-success-soft text-fg-success-strong border border-success-subtle',
            'yellow' => 'bg-warning-soft text-fg-warning border border-warning-subtle',
            'purple' => 'bg-purple-100 text-purple-800 border border-purple-400 dark:bg-gray-700 dark:text-purple-400',
            'pink' => 'bg-pink-100 text-pink-800 border border-pink-400 dark:bg-gray-700 dark:text-pink-400',
            'indigo' => 'bg-indigo-100 text-indigo-800 border border-indigo-400 dark:bg-gray-700 dark:text-indigo-400',
            'gray', 'dark' => 'bg-neutral-secondary-medium text-heading border border-default-medium',
            default => 'bg-brand-softer text-fg-brand-strong border border-brand-subtle',
        };
    }

    public function dismissButtonClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-fg-danger-strong hover:bg-danger-medium',
            'green' => 'text-fg-success-strong hover:bg-success-medium',
            'yellow' => 'text-fg-warning hover:bg-warning-medium',
            'purple' => 'text-purple-400 hover:bg-purple-200 hover:text-purple-900 dark:hover:bg-purple-800 dark:hover:text-purple-300',
            'pink' => 'text-pink-400 hover:bg-pink-200 hover:text-pink-900 dark:hover:bg-pink-800 dark:hover:text-pink-300',
            'indigo' => 'text-indigo-400 hover:bg-indigo-200 hover:text-indigo-900 dark:hover:bg-indigo-800 dark:hover:text-indigo-300',
            'gray', 'dark' => 'text-heading hover:bg-neutral-tertiary-medium',
            default => 'text-fg-brand-strong hover:bg-brand-soft',
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

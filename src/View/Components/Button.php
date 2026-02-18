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
        public ?string $fwbIcon = null,
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
        return 'font-medium focus:outline-none text-center inline-flex items-center shadow-xs';
    }

    public function allClasses(): string
    {
        $classes = $this->baseClasses() . ' ' . $this->sizeClasses() . ' ' . $this->colorClasses() . ' ' . $this->roundedClasses();

        if ($this->disabled) {
            $classes .= ' opacity-50 cursor-not-allowed';
        }

        return $classes;
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'px-3 py-1.5 text-xs',
            'sm' => 'px-3 py-2 text-sm',
            'lg' => 'px-5 py-3 text-base',
            'xl' => 'px-6 py-3.5 text-base',
            default => 'px-4 py-2.5 text-sm',
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
            'red' => 'text-white bg-danger border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium',
            'green' => 'text-white bg-success border border-transparent hover:bg-success-strong focus:ring-4 focus:ring-success-medium',
            'yellow' => 'text-white bg-warning border border-transparent hover:bg-warning-strong focus:ring-4 focus:ring-warning-medium',
            'purple' => 'text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800',
            'dark' => 'text-white bg-dark border border-transparent hover:bg-dark-strong focus:ring-4 focus:ring-neutral-tertiary',
            'light' => 'text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft',
            default => 'text-white bg-brand border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium',
        };
    }

    protected function outlineColorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-danger bg-neutral-primary border border-danger hover:bg-danger hover:text-white focus:ring-4 focus:ring-neutral-tertiary',
            'green' => 'text-success bg-neutral-primary border border-success hover:bg-success hover:text-white focus:ring-4 focus:ring-neutral-tertiary',
            'yellow' => 'text-warning bg-neutral-primary border border-warning hover:bg-warning hover:text-white focus:ring-4 focus:ring-neutral-tertiary',
            'purple' => 'text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 dark:border-purple-500 dark:text-purple-500 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-800',
            'dark' => 'text-body bg-neutral-primary border border-default hover:bg-neutral-secondary-soft hover:text-heading focus:ring-4 focus:ring-neutral-tertiary',
            'light' => 'text-body bg-neutral-primary border border-default hover:bg-neutral-secondary-soft hover:text-heading focus:ring-4 focus:ring-neutral-tertiary',
            default => 'text-fg-brand bg-neutral-primary border border-brand hover:bg-brand hover:text-white focus:ring-4 focus:ring-brand-subtle',
        };
    }

    public function roundedClasses(): string
    {
        return $this->pill ? 'rounded-full' : 'rounded-base';
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

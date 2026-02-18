<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Alert extends Component
{
    use HasId;

    public string $color;
    public bool $dismissible;
    public bool $bordered;

    public function __construct(
        string $color = 'blue',
        public ?string $fwbIcon = null,
        bool $dismissible = false,
        bool $bordered = false,
        ?string $id = null,
    ) {
        $this->color = $color;
        $this->dismissible = $dismissible;
        $this->bordered = $bordered;
        $this->initializeHasId($id);
    }

    public function baseClasses(): string
    {
        return 'flex items-center p-4 mb-4 text-sm rounded-base ' . $this->colorClasses() . ' ' . $this->borderClasses();
    }

    public function colorClasses(): string
    {
        return match ($this->color) {
            'red' => 'text-fg-danger-strong bg-danger-soft',
            'green' => 'text-fg-success-strong bg-success-soft',
            'yellow' => 'text-fg-warning bg-warning-soft',
            'gray', 'dark' => 'text-heading bg-neutral-secondary-medium',
            default => 'text-fg-brand-strong bg-brand-softer',
        };
    }

    public function borderClasses(): string
    {
        if (! $this->bordered) {
            return '';
        }

        return match ($this->color) {
            'red' => 'border-t-4 border-danger-subtle',
            'green' => 'border-t-4 border-success-subtle',
            'yellow' => 'border-t-4 border-warning-subtle',
            'gray', 'dark' => 'border-t-4 border-default-medium',
            default => 'border-t-4 border-brand-subtle',
        };
    }

    public function dismissButtonClasses(): string
    {
        return match ($this->color) {
            'red' => 'bg-danger-soft text-fg-danger-strong focus:ring-danger-medium hover:bg-danger-medium',
            'green' => 'bg-success-soft text-fg-success-strong focus:ring-success-medium hover:bg-success-medium',
            'yellow' => 'bg-warning-soft text-fg-warning focus:ring-warning-medium hover:bg-warning-medium',
            'gray', 'dark' => 'bg-neutral-secondary-medium text-heading focus:ring-neutral-tertiary hover:bg-neutral-tertiary-medium',
            default => 'bg-brand-softer text-fg-brand-strong focus:ring-brand-medium hover:bg-brand-soft',
        };
    }

    public function render()
    {
        return view('flowbite-blade::components.alert');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public ?string $src;
    public string $alt;
    public string $size;
    public bool $rounded;
    public bool $bordered;
    public ?string $status;
    public string $statusPosition;
    public ?string $initials;

    public function __construct(
        ?string $src = null,
        string $alt = '',
        string $size = 'md',
        bool $rounded = true,
        bool $bordered = false,
        ?string $status = null,
        string $statusPosition = 'top-right',
        ?string $initials = null,
    ) {
        $this->src = $src;
        $this->alt = $alt;
        $this->size = $size;
        $this->rounded = $rounded;
        $this->bordered = $bordered;
        $this->status = $status;
        $this->statusPosition = $statusPosition;
        $this->initials = $initials;
    }

    public function sizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'w-6 h-6',
            'sm' => 'w-8 h-8',
            'lg' => 'w-20 h-20',
            'xl' => 'w-36 h-36',
            default => 'w-10 h-10',
        };
    }

    public function initialsSizeClasses(): string
    {
        return match ($this->size) {
            'xs' => 'text-xs',
            'sm' => 'text-xs',
            'lg' => 'text-2xl',
            'xl' => 'text-4xl',
            default => 'text-sm',
        };
    }

    public function statusClasses(): string
    {
        $colorClass = match ($this->status) {
            'online' => 'bg-success',
            'offline' => 'bg-gray-400',
            'busy' => 'bg-danger',
            'away' => 'bg-warning',
            default => 'bg-gray-400',
        };

        $positionClass = match ($this->statusPosition) {
            'top-left' => 'top-0 start-0',
            'top-right' => 'top-0 end-0',
            'bottom-left' => 'bottom-0 start-0',
            'bottom-right' => 'bottom-0 end-0',
            default => 'top-0 end-0',
        };

        return "{$colorClass} {$positionClass}";
    }

    public function render()
    {
        return view('flowbite-blade::components.avatar');
    }
}

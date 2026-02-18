<div class="relative" {{ $attributes }}>
    @if ($src)
        <img class="{{ $sizeClasses() }} {{ $rounded ? 'rounded-full' : 'rounded-base' }} {{ $bordered ? 'ring-2 ring-default' : '' }}" src="{{ $src }}" alt="{{ $alt }}">
    @elseif ($initials)
        <div class="relative inline-flex items-center justify-center {{ $sizeClasses() }} overflow-hidden bg-neutral-tertiary {{ $rounded ? 'rounded-full' : 'rounded-base' }} {{ $bordered ? 'ring-2 ring-default' : '' }}">
            <span class="font-medium text-body {{ $initialsSizeClasses() }}">{{ $initials }}</span>
        </div>
    @else
        <div class="relative inline-flex items-center justify-center {{ $sizeClasses() }} overflow-hidden bg-neutral-secondary-medium {{ $rounded ? 'rounded-full' : 'rounded-base' }} {{ $bordered ? 'ring-2 ring-default' : '' }}">
            <x-fwb-s-user-circle class="w-auto h-auto text-body-subtle" />
        </div>
    @endif

    @if ($status)
        <span class="absolute block w-3.5 h-3.5 border-2 border-buffer rounded-full {{ $statusClasses() }}"></span>
    @endif
</div>

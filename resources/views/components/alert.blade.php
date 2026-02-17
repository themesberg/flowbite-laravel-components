<div id="{{ $id }}" {{ $attributes->class([$baseClasses()]) }} role="alert">
    @if ($icon ?? false)
        {{ $icon }}
    @endif

    <div class="ms-3 text-sm font-medium">
        {{ $slot }}
    </div>

    @if ($dismissible)
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded-base focus:ring-2 p-1.5 inline-flex items-center justify-center h-8 w-8 {{ $dismissButtonClasses() }}" data-dismiss-target="#{{ $id }}" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    @endif
</div>

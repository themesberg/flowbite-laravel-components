<div id="{{ $id }}" class="flex items-center w-full max-w-xs p-4 text-body bg-neutral-primary-soft rounded-base shadow-sm {{ $positionClasses }}" role="alert" {{ $attributes }}>
    @if($icon ?? false)
    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 rounded-lg {{ $colorClasses }}">
        {{ $icon }}
    </div>
    @endif
    <div class="ms-3 text-sm font-normal">{{ $slot }}</div>
    @if($dismissible)
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-neutral-primary-soft text-body hover:text-heading rounded-base focus:ring-2 focus:ring-neutral-tertiary p-1.5 hover:bg-neutral-secondary-medium inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#{{ $id }}" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
    </button>
    @endif
</div>

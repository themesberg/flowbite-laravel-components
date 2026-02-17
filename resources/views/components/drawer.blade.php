<div id="{{ $id }}" class="{{ $positionClasses }} bg-neutral-primary-soft p-4" tabindex="-1" aria-labelledby="{{ $id }}-label" @if(!$backdrop) data-drawer-backdrop="false" @endif @if($bodyScrolling) data-drawer-body-scrolling="true" @endif {{ $attributes }}>
    @if($header ?? false)
    <h5 id="{{ $id }}-label" class="text-base font-semibold text-body uppercase">{{ $header }}</h5>
    <button type="button" data-drawer-hide="{{ $id }}" aria-controls="{{ $id }}" class="text-body bg-transparent hover:bg-neutral-secondary-medium hover:text-heading rounded-base text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
        <span class="sr-only">Close menu</span>
    </button>
    @endif
    <div class="py-4 overflow-y-auto">
        {{ $slot }}
    </div>
</div>

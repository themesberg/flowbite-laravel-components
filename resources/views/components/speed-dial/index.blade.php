<div data-dial-init class="fixed end-6 bottom-6 group" {{ $attributes }}>
    <div id="speed-dial-{{ $id }}" class="flex flex-col items-center hidden mb-4 space-y-2">
        {{ $slot }}
    </div>
    <button type="button" data-dial-toggle="speed-dial-{{ $id }}" data-dial-trigger="{{ $triggerType }}" aria-controls="speed-dial-{{ $id }}" aria-expanded="false" class="flex items-center justify-center text-white bg-brand rounded-full w-14 h-14 hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium focus:outline-none">
        <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/></svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

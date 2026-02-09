<div {{ $attributes }}>
    @if($trigger ?? false)
        <div data-dropdown-toggle="{{ $id }}" data-dropdown-placement="{{ $placement }}" @if($triggerType === 'hover') data-dropdown-trigger="hover" @endif>
            {{ $trigger }}
        </div>
    @else
        <button id="btn-{{ $id }}" data-dropdown-toggle="{{ $id }}" data-dropdown-placement="{{ $placement }}" @if($triggerType === 'hover') data-dropdown-trigger="hover" @endif class="{{ $inline ? 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-1.5' : 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800' }}" type="button">
            {{ $label }}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
        </button>
    @endif
    <div id="{{ $id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
        @if($header ?? false)
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            {{ $header }}
        </div>
        @endif
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="btn-{{ $id }}">
            {{ $slot }}
        </ul>
        @if($footer ?? false)
        <div class="py-2">
            {{ $footer }}
        </div>
        @endif
    </div>
</div>

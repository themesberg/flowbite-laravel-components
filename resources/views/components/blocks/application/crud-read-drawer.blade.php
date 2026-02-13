@props([
    'title' => 'Item Details',
    'id' => 'read-drawer',
])

<div id="{{ $id }}" {{ $attributes->merge(['class' => 'fixed top-0 left-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800']) }} tabindex="-1" aria-labelledby="{{ $id }}-label">
    <div class="flex items-center justify-between mb-4">
        <h5 id="{{ $id }}-label" class="text-lg font-semibold text-gray-500 dark:text-gray-400">{{ $title }}</h5>
        <button type="button" data-drawer-hide="{{ $id }}" aria-controls="{{ $id }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            <span class="sr-only">Close drawer</span>
        </button>
    </div>

    <div class="py-4 overflow-y-auto">
        {{ $slot }}
    </div>

    @if(isset($actions))
    <div class="flex items-center space-x-4 mt-4 border-t border-gray-200 pt-4 dark:border-gray-600">
        {{ $actions }}
    </div>
    @endif
</div>

@once
@pushOnce('default-slot')
{{-- Default slot content for crud-read-drawer --}}
<dl>
    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Name</dt>
    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Apple iMac 27"</dd>
    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt>
    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Electronics/PC</dd>
    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Price</dt>
    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">$2999</dd>
    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Description</dt>
    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory.</dd>
</dl>
<div class="flex items-center space-x-4">
    <button type="button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
        Edit
    </button>
    <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
        <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        Delete
    </button>
</div>
@endPushOnce
@endonce

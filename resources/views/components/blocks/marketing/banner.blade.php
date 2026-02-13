@props([
    'message' => 'Get 5% commission per sale',
    'href' => '#',
    'id' => 'banner',
])

<div id="{{ $id }}" tabindex="-1" {{ $attributes->merge(['class' => 'flex fixed z-50 gap-8 justify-between items-start py-3 px-4 w-full bg-gray-50 border border-b border-gray-200 sm:items-center dark:border-gray-700 lg:py-4 dark:bg-gray-800']) }}>
    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
        {{ $slot->isNotEmpty() ? $slot : '' }}
        @if($slot->isEmpty())
        <span class="font-normal text-gray-900 dark:text-white">{{ $message }}</span>
        <a class="flex items-center text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline" href="{{ $href }}">
            Learn More
            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
        @endif
    </p>
    <button data-collapse-toggle="{{ $id }}" type="button" class="flex items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

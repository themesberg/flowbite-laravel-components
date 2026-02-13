@props([
    'title' => 'All Products',
    'description' => 'Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.',
])

<div {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden']) }}>
    <div class="flex flex-col p-4 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
        <div class="flex items-center flex-1 space-x-4">
            <h5 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h5>
        </div>
        @if(isset($actions))
            {{ $actions }}
        @endif
    </div>
    <div class="p-4 pt-0">
        <div class="flex items-center p-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                @if(isset($cta))
                    {{ $cta }}
                @else
                    <p>{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
    @unless($slot->isEmpty())
        {{ $slot }}
    @endunless
</div>

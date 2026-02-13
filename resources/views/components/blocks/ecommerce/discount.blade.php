@props([
    'title' => 'Get 5% OFF your order!',
    'description' => 'Use our exclusive discount code at checkout to save on your next purchase. Limited time offer - don\'t miss out!',
    'code' => 'SAVE5NOW',
    'buttonText' => 'Shop Now',
    'buttonHref' => '#',
])

<section {{ $attributes->merge(['class' => 'bg-white py-8 antialiased dark:bg-gray-900 md:py-16']) }}>
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:flex lg:items-center lg:gap-16">
            <div class="hidden shrink-0 lg:block">
                <img class="dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list.svg" alt="discount illustration" />
                <img class="hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg" alt="discount illustration" />
            </div>

            <div class="mt-4 w-full lg:mt-0">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">{{ $title }}</h2>
                <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">{{ $description }}</p>

                <div class="mt-4 sm:flex sm:items-center sm:gap-4">
                    <div class="flex items-center gap-2">
                        <span class="text-base font-medium text-gray-500 dark:text-gray-400">Discount code:</span>
                        <div class="inline-flex items-center gap-1.5 rounded border border-gray-300 bg-white px-3 py-1.5 dark:border-gray-600 dark:bg-gray-700">
                            <span id="discount-code" class="text-base font-semibold text-gray-900 dark:text-white">{{ $code }}</span>
                            <button type="button" onclick="navigator.clipboard.writeText(document.getElementById('discount-code').innerText)" class="text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V6a3 3 0 0 0-3-3H7v-.5A2.5 2.5 0 0 1 9.5 0h6A2.5 2.5 0 0 1 18 2.5V3ZM14 17H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2Z" />
                                </svg>
                                <span class="sr-only">Copy code</span>
                            </button>
                        </div>
                    </div>

                    <div class="mt-4 sm:mt-0">
                        @if(isset($actions))
                            {{ $actions }}
                        @else
                            <a href="{{ $buttonHref }}" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                {{ $buttonText }}
                                <svg class="ms-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>

                @if(! $slot->isEmpty())
                    <div class="mt-4">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

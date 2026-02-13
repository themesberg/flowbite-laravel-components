@props([
    'title' => 'Account overview',
])

<section {{ $attributes->merge(['class' => 'bg-white py-8 antialiased dark:bg-gray-900 md:py-8']) }}>
    <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
        @if(isset($breadcrumb))
            {{ $breadcrumb }}
        @else
            <nav class="mb-4 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ms-2">My account</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Account</span>
                        </div>
                    </li>
                </ol>
            </nav>
        @endif

        <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">{{ $title }}</h2>

        @if($slot->isEmpty())
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                {{-- General information --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-6">
                    <div class="mb-4 flex items-center gap-2">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">General information</h3>
                    </div>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400">Name</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">Jese Leos</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400">Email</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">jese@flowbite.com</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400">Phone</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">+(123) 456 7890</dd>
                        </div>
                    </dl>
                    <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Edit your data
                        <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                {{-- Delivery address --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-6">
                    <div class="mb-4 flex items-center gap-2">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                        </svg>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Delivery address</h3>
                    </div>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400">Address</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">34 Scott Street, San Francisco, California, USA</dd>
                        </div>
                    </dl>
                    <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Edit address
                        <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                {{-- Payment methods --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-6">
                    <div class="mb-4 flex items-center gap-2">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8H5m12 0a1 1 0 0 1 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1Z"/>
                        </svg>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Payment methods</h3>
                    </div>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-normal text-gray-500 dark:text-gray-400">Visa ending in 7658</dt>
                            <dd class="text-base font-semibold text-gray-900 dark:text-white">Expiry 10/2024</dd>
                        </div>
                    </dl>
                    <a href="#" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        Edit payment methods
                        <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        @else
            {{ $slot }}
        @endif
    </div>
</section>

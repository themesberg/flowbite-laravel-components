@props([
    'title' => 'Schedule',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900 antialiased']) }}>
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">{{ $title }}</h2>
            <div class="mt-4">
                <a href="#" title="" class="inline-flex items-center text-lg font-medium text-blue-600 hover:underline dark:text-blue-500">
                    Download PDF version
                    <svg aria-hidden="true" class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                {{ $slot }}
                @if($slot->isEmpty())
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">08:00 - 09:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Opening remarks</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">09:00 - 10:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Keynote: The Future of Design Systems</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">10:00 - 11:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Workshop: Building Accessible Components</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">11:00 - 12:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Networking and coffee break</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">12:00 - 13:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Lunch break</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">13:00 - 14:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Panel: Scaling Tailwind CSS in Production</h3>
                </div>
                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                    <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">14:00 - 15:00</p>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Closing remarks and Q&A</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

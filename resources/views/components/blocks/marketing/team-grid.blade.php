@props([
    'title' => 'Our team',
    'description' => 'Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind.',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}>
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if($slot->isNotEmpty())
                {{ $slot }}
            @else
                {{-- Bonnie Green --}}
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Bonnie Green</a>
                    </h3>
                    <p>CEO/Co-founder</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                <x-fwb-s-facebook class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-400 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                                <x-fwb-s-twitter class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                                <x-fwb-s-github class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-500 hover:text-pink-700 dark:text-pink-400 dark:hover:text-pink-300">
                                <x-fwb-s-dribbble class="w-6 h-6" />
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Jese Leos --}}
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Jese Leos</a>
                    </h3>
                    <p>CTO</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                <x-fwb-s-facebook class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-400 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                                <x-fwb-s-twitter class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                                <x-fwb-s-github class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-500 hover:text-pink-700 dark:text-pink-400 dark:hover:text-pink-300">
                                <x-fwb-s-dribbble class="w-6 h-6" />
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Michael Gough --}}
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Michael Gough</a>
                    </h3>
                    <p>Senior Front-end Developer</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                <x-fwb-s-facebook class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-400 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                                <x-fwb-s-twitter class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                                <x-fwb-s-github class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-500 hover:text-pink-700 dark:text-pink-400 dark:hover:text-pink-300">
                                <x-fwb-s-dribbble class="w-6 h-6" />
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Lana Byrd --}}
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Lana Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Lana Byrd</a>
                    </h3>
                    <p>Marketing & Sale</p>
                    <ul class="flex justify-center mt-4 space-x-4">
                        <li>
                            <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                <x-fwb-s-facebook class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-400 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                                <x-fwb-s-twitter class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                                <x-fwb-s-github class="w-6 h-6" />
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-500 hover:text-pink-700 dark:text-pink-400 dark:hover:text-pink-300">
                                <x-fwb-s-dribbble class="w-6 h-6" />
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>

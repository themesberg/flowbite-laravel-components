@props([
    'title' => 'Our Team',
    'description' => 'Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind.',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            @if($slot->isNotEmpty())
                {{ $slot }}
            @else
                {{-- Bonnie Green --}}
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Bonnie Green</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Bonnie drives the technical strategy of the Flowbite platform and brand.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-facebook class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-twitter class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-github class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-dribbble class="w-5 h-5" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Jese Leos --}}
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Jese Leos</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CTO</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Jese drives the technical strategy of the Flowbite platform and brand.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-facebook class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-twitter class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-github class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-dribbble class="w-5 h-5" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Michael Gough --}}
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Michael Gough</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Senior Front-end Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Michael drives the technical strategy of the Flowbite platform and brand.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-facebook class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-twitter class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-github class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-dribbble class="w-5 h-5" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Lana Byrd --}}
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Lana Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Lana Byrd</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the Flowbite platform and brand.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-facebook class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-twitter class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-github class="w-5 h-5" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <x-fwb-s-dribbble class="w-5 h-5" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@props([
    'title' => 'Our Blog',
    'description' => 'We use an agile approach to test assumptions and connect with the needs of your audience early and often.',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            {{ $slot }}
            @if($slot->isEmpty())
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        <x-fwb-s-video class="mr-1 w-3 h-3" />
                        Tutorial
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to quickly deploy a static website</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                        <span class="font-medium dark:text-white">Jese Leos</span>
                    </div>
                    <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Read more
                        <x-fwb-o-arrow-right class="ml-2 w-4 h-4" />
                    </a>
                </div>
            </article>
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        <x-fwb-s-newspaper class="mr-1 w-3 h-3" />
                        Article
                    </span>
                    <span class="text-sm">12 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our first project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green avatar" />
                        <span class="font-medium dark:text-white">Bonnie Green</span>
                    </div>
                    <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Read more
                        <x-fwb-o-arrow-right class="ml-2 w-4 h-4" />
                    </a>
                </div>
            </article>
            @endif
        </div>
    </div>
</section>

@props([
    'title' => 'Testimonials',
    'description' => 'Hear from our customers about their experience.',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}>
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
            <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
            {{ $slot }}
        </div>
    </div>
</section>

@once
@push('slot-defaults')
{{-- Default testimonial cards slot example:
<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
        <p class="my-4">If you care for your time, I hands down would go with this.</p>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>Bonnie Green</div>
            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
        </div>
    </figcaption>
</figure>
<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:rounded-se-lg md:border-b-0 dark:bg-gray-800 dark:border-gray-700">
    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
        <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!</p>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>Roberta Casas</div>
            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
        </div>
    </figcaption>
</figure>
<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application.</p>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>Jese Leos</div>
            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
        </div>
    </figcaption>
</figure>
<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
        <p class="my-4">You have many tools to choose from to work together on a project in real time.</p>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>Joseph McFall</div>
            <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
        </div>
    </figcaption>
</figure>
--}}
@endpush
@endonce

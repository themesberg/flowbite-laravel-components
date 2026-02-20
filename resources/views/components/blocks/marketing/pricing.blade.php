@props([
    'title' => 'Designed for business teams like yours',
    'description' => 'Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.',
])

<section class="bg-neutral-primary">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-heading">{{ $title }}</h2>
            <p class="mb-5 font-light text-body sm:text-xl">{{ $description }}</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            {{ $slot }}
        </div>
    </div>
</section>

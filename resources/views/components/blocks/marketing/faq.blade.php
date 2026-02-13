@props([
    'title' => 'Frequently asked questions',
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}>
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2 class="mb-8 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $title }}</h2>
        <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
            {{ $slot }}
        </div>
    </div>
</section>

@once
@pushOnce('default-slot')
{{-- Default slot content for faq --}}
<div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            What do you mean by "Figma assets"?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">You will have access to download a Figma file that contains all of the assets from each block section.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            What does "lifetime access" exactly mean?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">Once you have purchased either the design, code, or both packages, you will have access to all of the future updates of the content based on the type of purchase.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            How does support work?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">We provide support through our community Discord server and direct email. Our team typically responds within 24 hours on business days.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            What does "free updates" include?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">The free updates include any improvements to existing block sections, new components, and bug fixes that are released after your initial purchase.</p>
    </div>
</div>
<div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            What is your refund policy?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">If you are unsatisfied with your purchase, we accept refund requests within the first 30 days of purchasing with no questions asked.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            Can I use the components for commercial projects?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">Yes, you can use our components in any number of commercial or personal projects. There are no limitations on the number of projects or end products.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            Do you offer a student discount?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">Yes, we offer special pricing for students. Please contact our support team with your valid student ID for verification and discount eligibility.</p>
    </div>
    <div class="mb-10">
        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            Is there a team or enterprise plan?
        </h3>
        <p class="text-gray-500 dark:text-gray-400">Yes, we offer team and enterprise licensing options. Please reach out to our sales team for custom pricing based on your team size and requirements.</p>
    </div>
</div>
@endPushOnce
@endonce
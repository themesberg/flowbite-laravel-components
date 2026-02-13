@props([
    'title' => 'Best practices for successful prototypes',
    'author' => 'Jese Leos',
    'authorRole' => 'Graphic Designer, educator & CEO Flowbite',
    'authorAvatar' => 'https://flowbite.com/docs/images/people/profile-picture-2.jpg',
    'publishDate' => 'Feb. 8, 2022',
    'publishDatetime' => '2022-02-08',
    'category' => 'Tutorial',
])

<main {{ $attributes->merge(['class' => 'pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased']) }}>
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="{{ $authorAvatar }}" alt="{{ $author }}">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $author }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $authorRole }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400">
                                <time pubdate datetime="{{ $publishDatetime }}" title="{{ $publishDate }}">{{ $publishDate }}</time>
                            </p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $title }}</h1>
            </header>

            {{ $slot }}

            @if($slot->isEmpty())
            <p class="lead">Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers.</p>
            <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way, you can think things through before committing to an actual design project.</p>
            <p>But then I found a <a href="#">component library based on Tailwind CSS called Flowbite</a>. It comes with the most commonly used UI components, such as buttons, navigation bars, cards, form elements, and more which are conveniently built with the utility classes from Tailwind CSS.</p>
            <figure>
                <img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="Digital art workspace">
                <figcaption>Digital art by <a href="#">Unsplash</a></figcaption>
            </figure>
            <h2>Getting started with Flowbite</h2>
            <p>First of all you need to understand how Flowbite works. This library is not another framework. Rather, it is a set of components based on Tailwind CSS that you can just copy-paste from the documentation.</p>
            <ol>
                <li><strong>Usability testing</strong>. Does your user know how to exit out of screens? Can they follow your intended user journey and buy something off the site you have designed? By게 running a usability test, you'll be able to see how users will interact with your design once it's live.</li>
                <li><strong>&nbsp;Involving stakeholders</strong>. Project stakeholders need to be aligned on the key deliverables before implementation starts. This includes the project timeline, key milestones, and budgets.</li>
                <li><strong>A/B testing</strong>. A/B testing can be a great way to test the effectiveness of different design approaches within the same project scope.</li>
            </ol>
            <h3>Key takeaways</h3>
            <p>A design system is a set of guidelines, principles, and assets that streamline the design and development process. It ensures consistency across products while accelerating time-to-market.</p>
            @endif

            @if(isset($share))
            <div class="not-format">
                {{ $share }}
            </div>
            @else
            <div class="flex items-center space-x-4 not-format mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Share this article</span>
                <button type="button" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Share on Facebook</span>
                </button>
                <button type="button" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                        <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.981A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Share on Twitter</span>
                </button>
                <button type="button" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Share on GitHub</span>
                </button>
                <button type="button" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
                    </svg>
                    <span class="sr-only">Share on X</span>
                </button>
            </div>
            @endif
        </article>

        @if(isset($sidebar))
        <aside class="hidden xl:block xl:w-80" aria-label="Sidebar">
            <div class="sticky top-6">
                {{ $sidebar }}
            </div>
        </aside>
        @endif
    </div>

    @if(isset($relatedPosts))
    <div class="px-4 mx-auto max-w-screen-xl mt-12 pt-12 border-t border-gray-200 dark:border-gray-700">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            {{ $relatedPosts }}
        </div>
    </div>
    @endif
</main>

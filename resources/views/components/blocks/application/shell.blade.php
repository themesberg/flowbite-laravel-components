@props([
    'brandName' => 'Flowbite',
    'brandHref' => '/',
    'sidebarId' => 'logo-sidebar',
])

<div {{ $attributes->merge(['class' => 'antialiased bg-gray-50 dark:bg-gray-900']) }}>
    {{-- Navbar --}}
    @if(isset($navbar))
        {{ $navbar }}
    @else
        <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button data-drawer-target="{{ $sidebarId }}" data-drawer-toggle="{{ $sidebarId }}" aria-controls="{{ $sidebarId }}" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="{{ $brandHref }}" class="flex items-center justify-between mr-4">
                        @if(isset($logo))
                            {{ $logo }}
                        @else
                            <svg class="mr-3 h-8" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.2696 13.126C25.1955 13.6364 24.8589 14.3299 24.4728 14.9328C23.9856 15.6936 23.2125 16.2264 22.3276 16.4114L18.43 17.2265C17.8035 17.3575 17.2899 17.8139 17.0918 18.4189L15.8089 22.2194C15.5528 23.0001 15.0349 23.6769 14.2728 24.0484C13.3171 24.5128 12.146 24.2945 11.4136 23.5765L8.04929 20.2862C7.55599 19.8038 6.88498 19.5421 6.18974 19.5595L4.00072 19.6134C3.01099 19.6387 2.09459 19.1826 1.5765 18.3894C1.0584 17.5963 1.01985 16.5882 1.47397 15.759L3.27751 12.3758C3.60352 11.7643 3.69856 11.052 3.54202 10.3731L2.86186 7.42969C2.64698 6.49972 2.95438 5.52913 3.6737 4.89469C4.39303 4.26024 5.38866 4.07426 6.28836 4.4023L8.87994 5.34554C9.52424 5.58014 10.2328 5.5472 10.8528 5.25401L13.6812 3.91493C14.5246 3.51572 15.5183 3.56003 16.3208 4.03367C17.1234 4.50731 17.6222 5.34498 17.6645 6.26748L17.7634 8.37983C17.7942 9.0337 18.0942 9.64704 18.5922 10.0723L20.1379 11.3909C20.5765 11.7655 21.1241 11.9868 21.6962 12.0218L24.1765 12.1738C24.7289 12.2074 25.1853 12.5915 25.2696 13.126Z" fill="#1C64F2"/>
                            </svg>
                        @endif
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $brandName }}</span>
                    </a>
                </div>
                @if(isset($navbarEnd))
                    {{ $navbarEnd }}
                @endif
            </div>
        </nav>
    @endif

    {{-- Sidebar --}}
    <aside id="{{ $sidebarId }}" class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidenav">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            @if(isset($sidebar))
                {{ $sidebar }}
            @else
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Overview</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Pages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sales</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
        @if(isset($sidebarBottom))
            <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20 border-r border-gray-200 dark:border-gray-700">
                {{ $sidebarBottom }}
            </div>
        @endif
    </aside>

    {{-- Main Content --}}
    <main class="p-4 md:ml-64 h-auto pt-20">
        @if(isset($content))
            {{ $content }}
        @else
            {{ $slot }}
        @endif
    </main>
</div>

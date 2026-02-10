@aware(['flush' => false, 'separated' => false])

<h2 id="heading-{{ $id }}">
    <button
        type="button"
        @class([
            'flex items-center justify-between w-full font-medium rtl:text-right text-gray-500 dark:text-gray-400 gap-3',
            'p-5 border border-b-0 border-gray-200 dark:border-gray-700 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800' => !$flush && !$separated,
            'py-5 border-b border-gray-200 dark:border-gray-700' => $flush,
            'p-5 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm hover:bg-gray-100 dark:hover:bg-gray-800' => $separated && !$flush,
        ])
        data-accordion-target="#body-{{ $id }}"
        aria-expanded="{{ $open ? 'true' : 'false' }}"
        aria-controls="body-{{ $id }}"
    >
        <span>{{ $title }}</span>
        @if($arrowStyle === 'default')
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/></svg>
        @elseif($arrowStyle === 'static')
            <svg class="w-3 h-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/></svg>
        @endif
    </button>
</h2>
<div id="body-{{ $id }}" class="{{ $open ? '' : 'hidden' }}" aria-labelledby="heading-{{ $id }}">
    <div @class([
        'p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900' => !$flush && !$separated,
        'py-5 border-b border-gray-200 dark:border-gray-700' => $flush,
        'p-5 border border-t-0 border-gray-200 dark:border-gray-700 rounded-b-lg' => $separated && !$flush,
    ])>
        @if(isset($content))
            {{ $content }}
        @elseif(preg_match('/<[a-z][\s\S]*>/i', (string) $slot))
            {{ $slot }}
        @else
            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $slot }}</p>
        @endif
    </div>
</div>

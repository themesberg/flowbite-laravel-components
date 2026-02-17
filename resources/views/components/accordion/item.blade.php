@aware(['flush' => false, 'separated' => false])

@php
$buttonClasses = match (true) {
    $flush => 'flex items-center justify-between w-full py-5 font-medium rtl:text-right text-body border-b border-default gap-3',
    $separated => 'flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body gap-3 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary',
    default => 'flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body gap-3 hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary',
};

$bodyClasses = match (true) {
    $flush => 'py-5 border-b border-default',
    $separated => 'p-5 border border-t-0 border-default rounded-b-base',
    default => 'p-5',
};
@endphp

<h2 id="heading-{{ $id }}">
    <button
        type="button"
        {{ $attributes->class([$buttonClasses]) }}
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
    <div class="{{ $bodyClasses }}">
        @if(isset($content))
            {{ $content }}
        @elseif(preg_match('/<[a-z][\s\S]*>/i', (string) $slot))
            {{ $slot }}
        @else
            <p class="mb-2 text-body">{{ $slot }}</p>
        @endif
    </div>
</div>

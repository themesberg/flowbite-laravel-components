@if($horizontal)
<li class="{{ $itemClass() }}" {{ $attributes }}>
    <div class="flex items-center">
        <div class="z-10 flex items-center justify-center w-6 h-6 bg-brand-softer rounded-full ring-0 ring-buffer sm:ring-8 shrink-0">
            @if($icon ?? false)
                {{ $icon }}
            @else
                <svg class="w-2.5 h-2.5 text-fg-brand-strong" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/></svg>
            @endif
        </div>
        <div class="hidden sm:flex w-full bg-neutral-tertiary h-0.5"></div>
    </div>
    <div class="mt-3 sm:pe-8">
        @if($title)
            <h3 class="text-lg font-semibold text-heading">{{ $title }}</h3>
        @endif
        @if($date)
            <time class="block mb-2 text-sm font-normal leading-none text-body">{{ $date }}</time>
        @endif
        <div class="text-base font-normal text-body">
            {{ $slot }}
        </div>
    </div>
</li>
@else
<li class="{{ $itemClass() }}" {{ $attributes }}>
    <span class="absolute flex items-center justify-center w-6 h-6 bg-brand-softer rounded-full -start-3 ring-8 ring-buffer">
        @if($icon ?? false)
            {{ $icon }}
        @else
            <svg class="w-2.5 h-2.5 text-fg-brand-strong" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/></svg>
        @endif
    </span>
    @if($title)
        <h3 class="flex items-center mb-1 text-lg font-semibold text-heading">{{ $title }}</h3>
    @endif
    @if($date)
        <time class="block mb-2 text-sm font-normal leading-none text-body">{{ $date }}</time>
    @endif
    <div class="mb-4 text-base font-normal text-body">
        {{ $slot }}
    </div>
</li>
@endif

<{{ $resolvedTag() }}
    @if ($href) href="{{ $href }}" @endif
    class="{{ $baseClasses() }}"
    {{ $attributes }}
>
    @if ($img && $imgPosition === 'top')
        <img class="{{ $imgClasses() }}" src="{{ $img }}" alt="{{ $imgAlt }}" />
    @endif

    @if ($header ?? false)
        <div class="p-5 border-b border-gray-200 dark:border-gray-700">
            {{ $header }}
        </div>
    @endif

    <div class="p-5">
        {{ $slot }}
    </div>

    @if ($footer ?? false)
        <div class="p-5 border-t border-gray-200 dark:border-gray-700">
            {{ $footer }}
        </div>
    @endif

    @if ($img && $imgPosition === 'bottom')
        <img class="{{ $imgClasses() }}" src="{{ $img }}" alt="{{ $imgAlt }}" />
    @endif
</{{ $resolvedTag() }}>

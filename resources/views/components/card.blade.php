<{{ $resolvedTag() }}
    @if ($href) href="{{ $href }}" @endif
    {{ $attributes->class([$baseClasses()]) }}
>
    @if ($img && $imgPosition === 'top')
        <img class="{{ $imgClasses() }}" src="{{ $img }}" alt="{{ $imgAlt }}" />
    @endif

    @if ($header ?? false)
        <div class="p-5 border-b border-default">
            {{ $header }}
        </div>
    @endif

    <div class="p-5">
        {{ $slot }}
    </div>

    @if ($footer ?? false)
        <div class="p-5 border-t border-default">
            {{ $footer }}
        </div>
    @endif

    @if ($img && $imgPosition === 'bottom')
        <img class="{{ $imgClasses() }}" src="{{ $img }}" alt="{{ $imgAlt }}" />
    @endif
</{{ $resolvedTag() }}>

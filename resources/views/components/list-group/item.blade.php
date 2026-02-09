<li>
    @if($href)
        <a href="{{ $href }}" class="{{ $itemClass() }}" {{ $attributes }}>
            @if($icon){!! $icon !!}@endif
            {{ $slot }}
        </a>
    @elseif($button)
        <button type="button" class="{{ $itemClass() }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
            @if($icon){!! $icon !!}@endif
            {{ $slot }}
        </button>
    @else
        <span class="{{ $itemClass() }}" {{ $attributes }}>
            @if($icon){!! $icon !!}@endif
            {{ $slot }}
        </span>
    @endif
</li>

@if($divider)
    <div class="my-1 border-t border-default"></div>
@endif
<li>
    @if($href)
        <a href="{{ $href }}" class="flex items-center px-4 py-2 hover:bg-neutral-secondary-medium" {{ $attributes }}>
            @if($icon){!! $icon !!}@endif
            {{ $slot }}
        </a>
    @else
        <button type="button" class="flex items-center w-full px-4 py-2 hover:bg-neutral-secondary-medium" {{ $attributes }}>
            @if($icon){!! $icon !!}@endif
            {{ $slot }}
        </button>
    @endif
</li>

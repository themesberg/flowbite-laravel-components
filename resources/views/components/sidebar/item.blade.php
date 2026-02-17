<li>
    <a href="{{ $href }}" class="flex items-center p-2 text-heading rounded-base hover:bg-neutral-secondary-medium group {{ $active ? 'bg-neutral-secondary-medium' : '' }}" {{ $attributes }}>
        {{ $icon ?? '' }}
        <span class="flex-1 ms-3 whitespace-nowrap">{{ $slot }}</span>
        @if($badge)
            <span class="{{ $badgeClassesComputed }}">{{ $badge }}</span>
        @endif
    </a>
</li>

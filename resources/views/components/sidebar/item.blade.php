<li>
    <a href="{{ $href }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $active ? 'bg-gray-100 dark:bg-gray-700' : '' }}" {{ $attributes }}>
        {{ $icon ?? '' }}
        <span class="flex-1 ms-3 whitespace-nowrap">{{ $slot }}</span>
        @if($badge)
            <span class="{{ $badgeClassesComputed }}">{{ $badge }}</span>
        @endif
    </a>
</li>

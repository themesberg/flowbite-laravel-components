<a href="{{ $href }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group {{ $active ? 'text-blue-600 dark:text-blue-500' : '' }}" {{ $attributes }}>
    @if($icon)
        {!! $icon !!}
    @endif
    @if($label)
        <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">{{ $label }}</span>
    @endif
</a>

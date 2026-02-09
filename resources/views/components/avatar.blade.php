<div class="relative" {{ $attributes }}>
    @if ($src)
        <img class="{{ $sizeClasses() }} {{ $rounded ? 'rounded-full' : 'rounded' }} {{ $bordered ? 'ring-2 ring-gray-300 dark:ring-gray-500' : '' }}" src="{{ $src }}" alt="{{ $alt }}">
    @elseif ($initials)
        <div class="relative inline-flex items-center justify-center {{ $sizeClasses() }} overflow-hidden bg-gray-100 {{ $rounded ? 'rounded-full' : 'rounded' }} {{ $bordered ? 'ring-2 ring-gray-300 dark:ring-gray-500' : '' }} dark:bg-gray-600">
            <span class="font-medium text-gray-600 dark:text-gray-300 {{ $initialsSizeClasses() }}">{{ $initials }}</span>
        </div>
    @else
        <div class="relative inline-flex items-center justify-center {{ $sizeClasses() }} overflow-hidden bg-gray-100 {{ $rounded ? 'rounded-full' : 'rounded' }} {{ $bordered ? 'ring-2 ring-gray-300 dark:ring-gray-500' : '' }} dark:bg-gray-600">
            <svg class="w-auto h-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
        </div>
    @endif

    @if ($status)
        <span class="absolute block w-3.5 h-3.5 border-2 border-white rounded-full dark:border-gray-800 {{ $statusClasses() }}"></span>
    @endif
</div>

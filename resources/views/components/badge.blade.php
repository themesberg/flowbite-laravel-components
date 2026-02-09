@if ($href)
    <a href="{{ $href }}" class="font-medium {{ $sizeClasses() }} {{ $colorClasses() }} {{ $roundedClasses() }} inline-flex items-center" {{ $attributes }}>{{ $slot }}</a>
@else
    <span id="{{ $id }}" class="font-medium {{ $sizeClasses() }} {{ $colorClasses() }} {{ $roundedClasses() }} inline-flex items-center gap-1" {{ $attributes }}>
        {{ $slot }}
        @if ($dismissible)
            <button type="button" class="inline-flex items-center p-1 ms-2 bg-transparent rounded-sm {{ $dismissButtonClasses() }}" data-dismiss-target="#{{ $id }}" aria-label="Remove">
                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Remove badge</span>
            </button>
        @endif
    </span>
@endif

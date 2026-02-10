<{{ $resolvedTag() }}
    @if ($href) href="{{ $href }}" @endif
    @if ($resolvedTag() === 'button' && !$attributes->has('type')) type="button" @endif
    @if ($disabled) disabled @endif
    class="{{ $baseClasses() }} {{ $sizeClasses() }} {{ $colorClasses() }} {{ $roundedClasses() }} {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}"
    {{ $attributes }}
>{{ $slot }}</{{ $resolvedTag() }}>

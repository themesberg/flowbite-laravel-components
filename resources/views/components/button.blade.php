<{{ $resolvedTag() }}
    @if ($href) href="{{ $href }}" @endif
    @if ($resolvedTag() === 'button' && !$attributes->has('type')) type="button" @endif
    @if ($disabled) disabled @endif
    {{ $attributes->class([$allClasses()]) }}
>{{ $slot }}</{{ $resolvedTag() }}>

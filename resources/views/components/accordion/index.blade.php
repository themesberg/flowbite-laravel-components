<div
    id="{{ $id }}"
    data-accordion="{{ $dataAccordionValue() }}"
    @if($activeClasses) data-active-classes="{{ $activeClasses }}" @endif
    @if($inactiveClasses) data-inactive-classes="{{ $inactiveClasses }}" @endif
    {{ $attributes->class([
        'space-y-4' => $separated,
    ]) }}
>{{ $slot }}</div>

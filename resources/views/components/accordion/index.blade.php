@php
$containerClasses = $separated
    ? 'space-y-4'
    : 'rounded-base border border-default overflow-hidden shadow-xs divide-y divide-default';
@endphp

<div
    id="{{ $id }}"
    data-accordion="{{ $dataAccordionValue() }}"
    @if($activeClasses) data-active-classes="{{ $activeClasses }}" @endif
    @if($inactiveClasses) data-inactive-classes="{{ $inactiveClasses }}" @endif
    {{ $attributes->class([$containerClasses]) }}
>{{ $slot }}</div>

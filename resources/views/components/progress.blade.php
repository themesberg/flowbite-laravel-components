@if ($label)
    <div class="flex justify-between mb-1">
        <span class="text-base font-medium text-body">{{ $label }}</span>
        <span class="text-sm font-medium text-body">{{ round($percentage()) }}%</span>
    </div>
@endif
<div {{ $attributes->class([$containerClasses()]) }}>
    <div class="{{ $barClasses() }}" style="width: {{ $percentage() }}%">
        @if ($size === 'lg' || $size === 'xl')
            {{ round($percentage()) }}%
        @endif
    </div>
</div>

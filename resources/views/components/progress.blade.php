@if ($label)
    <div class="flex justify-between mb-1">
        <span class="text-base font-medium text-gray-700 dark:text-white">{{ $label }}</span>
        <span class="text-sm font-medium text-gray-700 dark:text-white">{{ round($percentage()) }}%</span>
    </div>
@endif
<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 {{ $sizeClasses() }}" {{ $attributes }}>
    <div class="{{ $colorClasses() }} {{ $sizeClasses() }} rounded-full {{ $labelSizeClasses() }} font-medium text-center p-0.5 leading-none text-blue-100" style="width: {{ $percentage() }}%">
        @if ($size === 'lg' || $size === 'xl')
            {{ round($percentage()) }}%
        @endif
    </div>
</div>

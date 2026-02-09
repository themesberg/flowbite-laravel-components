<div>
    @if($label)
        <label for="{{ $id }}" class="block mb-2 text-sm font-medium {{ $color === 'red' ? 'text-red-700 dark:text-red-500' : ($color === 'green' ? 'text-green-700 dark:text-green-500' : 'text-gray-900 dark:text-white') }}">{{ $label }}</label>
    @endif
    <div class="relative">
        @if($prefix ?? false)
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                {{ $prefix }}
            </div>
        @endif
        <input type="{{ $type }}" id="{{ $id }}" class="block w-full rounded-lg border {{ $sizeClasses }} {{ $colorClasses }} {{ isset($prefix) ? 'ps-10' : '' }} {{ isset($suffix) ? 'pe-10' : '' }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>
        @if($suffix ?? false)
            <div class="absolute inset-y-0 end-0 flex items-center pe-3.5">
                {{ $suffix }}
            </div>
        @endif
    </div>
    @if($helper)
        <p class="mt-2 text-sm {{ $color === 'red' ? 'text-red-600 dark:text-red-500' : ($color === 'green' ? 'text-green-600 dark:text-green-500' : 'text-gray-500 dark:text-gray-400') }}">{{ $helper }}</p>
    @endif
</div>

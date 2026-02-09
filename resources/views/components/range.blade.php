<div>
    @if($label)
        <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    @endif
    <input id="{{ $id }}" type="range" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" value="{{ $value }}" class="w-full {{ $sizeClasses }} bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>
</div>

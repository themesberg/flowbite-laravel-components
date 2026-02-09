<div class="flex items-start">
    <div class="flex items-center h-5">
        <input id="{{ $id }}" type="checkbox" class="w-4 h-4 {{ $colorClasses() }} bg-gray-100 border-gray-300 rounded-sm dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>
    </div>
    @if($label || $helper)
        <div class="ms-2 text-sm">
            @if($label)
                <label for="{{ $id }}" class="font-medium text-gray-900 dark:text-gray-300 {{ $disabled ? 'opacity-50' : '' }}">{{ $label }}</label>
            @endif
            @if($helper)
                <p class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $helper }}</p>
            @endif
        </div>
    @endif
</div>

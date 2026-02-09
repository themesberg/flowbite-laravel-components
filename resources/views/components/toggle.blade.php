<label class="inline-flex items-center cursor-pointer {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}">
    <input type="checkbox" id="{{ $id }}" class="sr-only peer" {{ $checked ? 'checked' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>
    <div class="relative {{ $sizeClasses }} bg-gray-200 peer-focus:outline-none peer-focus:ring-4 {{ $colorClasses() }} rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:bg-white after:border-gray-300 after:border after:rounded-full after:transition-all dark:border-gray-600"></div>
    @if($label)
        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $label }}</span>
    @endif
</label>

<div>
    @if($label)
        <label for="{{ $id }}" class="block mb-2 text-sm font-medium {{ $labelClasses }}">{{ $label }}</label>
    @endif
    @if($footer ?? false)
        <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <textarea id="{{ $id }}" rows="{{ $rows }}" class="block w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>{{ $slot }}</textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                {{ $footer }}
            </div>
        </div>
    @else
        <textarea id="{{ $id }}" rows="{{ $rows }}" class="block p-2.5 w-full text-sm rounded-lg border {{ $colorClasses }}" placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>{{ $slot }}</textarea>
    @endif
    @if($helper)
        <p class="mt-2 text-sm {{ $helperClasses }}">{{ $helper }}</p>
    @endif
</div>

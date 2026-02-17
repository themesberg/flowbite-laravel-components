@if($dropzone)
    <div class="flex items-center justify-center w-full">
        @if($label)
            <label for="{{ $id }}" class="flex flex-col items-center justify-center w-full h-64 border-2 border-default-medium border-dashed rounded-base cursor-pointer bg-neutral-secondary-soft hover:bg-neutral-secondary-medium">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-body"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    @if($helper)
                        <p class="text-xs text-body">{{ $helper }}</p>
                    @endif
                </div>
                <input id="{{ $id }}" type="file" class="hidden" {{ $multiple ? 'multiple' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }} />
            </label>
        @endif
    </div>
@else
    <div>
        @if($label)
            <label class="block mb-2 {{ $sizeClasses }} font-medium text-heading" for="{{ $id }}">{{ $label }}</label>
        @endif
        <input class="block w-full {{ $sizeClasses }} text-heading border border-default-medium rounded-base cursor-pointer bg-neutral-secondary-soft focus:outline-none" id="{{ $id }}" type="file" {{ $multiple ? 'multiple' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes }}>
        @if($helper)
            <p class="mt-1 text-sm text-body">{{ $helper }}</p>
        @endif
    </div>
@endif

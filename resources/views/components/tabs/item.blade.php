<li class="{{ $variant === 'full' ? 'w-full' : 'me-2' }}" role="presentation">
    <button class="{{ $tabClasses }}" id="tab-{{ $id }}" type="button" role="tab" aria-selected="{{ $active ? 'true' : 'false' }}" {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>
        {{ $slot }}
    </button>
</li>

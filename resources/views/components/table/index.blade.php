<div class="{{ $wrapperClass() }}" {{ $attributes }}>
    @if($caption ?? false)
    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-heading bg-neutral-primary-soft">
        {{ $caption }}
    </caption>
    @endif
    <table class="{{ $tableClass() }}">
        @if($head ?? false)
        <thead class="text-xs text-heading uppercase bg-neutral-secondary-soft">
            {{ $head }}
        </thead>
        @endif
        <tbody>
            {{ $slot }}
        </tbody>
        @if($foot ?? false)
        <tfoot class="font-semibold text-heading">
            {{ $foot }}
        </tfoot>
        @endif
    </table>
</div>

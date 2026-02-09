<div class="{{ $wrapperClass() }}" {{ $attributes }}>
    @if($caption ?? false)
    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        {{ $caption }}
    </caption>
    @endif
    <table class="{{ $tableClass() }}">
        @if($head ?? false)
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            {{ $head }}
        </thead>
        @endif
        <tbody>
            {{ $slot }}
        </tbody>
        @if($foot ?? false)
        <tfoot class="font-semibold text-gray-900 dark:text-white">
            {{ $foot }}
        </tfoot>
        @endif
    </table>
</div>

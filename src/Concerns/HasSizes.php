<?php

namespace Themesberg\FlowbiteBlade\Concerns;

trait HasSizes
{
    public string $size;

    public function initializeHasSizes(string $size = null): void
    {
        $this->size = $size ?? config('flowbite-blade.default_size', 'md');
    }

    public static function availableSizes(): array
    {
        return ['xs', 'sm', 'md', 'lg', 'xl'];
    }
}

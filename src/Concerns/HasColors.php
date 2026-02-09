<?php

namespace Themesberg\FlowbiteBlade\Concerns;

trait HasColors
{
    public string $color;

    public function initializeHasColors(string $color = null): void
    {
        $this->color = $color ?? config('flowbite-blade.default_color', 'blue');
    }

    public static function colorMap(): array
    {
        return [
            'primary' => 'blue',
            'blue' => 'blue',
            'red' => 'red',
            'green' => 'green',
            'yellow' => 'yellow',
            'purple' => 'purple',
            'pink' => 'pink',
            'indigo' => 'indigo',
            'gray' => 'gray',
            'dark' => 'gray',
            'light' => 'gray',
        ];
    }

    public static function availableColors(): array
    {
        return array_keys(static::colorMap());
    }
}

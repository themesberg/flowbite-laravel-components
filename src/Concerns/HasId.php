<?php

namespace Themesberg\FlowbiteBlade\Concerns;

use Illuminate\Support\Str;

trait HasId
{
    public string $id;

    public function initializeHasId(?string $id = null): void
    {
        $this->id = $id ?? 'fwb-' . Str::random(8);
    }
}

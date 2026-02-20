<?php

namespace Themesberg\FlowbiteBlade\View\Components\PricingCard;

use Illuminate\View\Component;

class Feature extends Component
{
    public function __construct(
        public bool $included = true,
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.pricing-card.feature');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components\PricingCard;

use Illuminate\View\Component;

class Index extends Component
{
    public function __construct(
        public string $title = '',
        public ?string $description = null,
        public string $price = '',
        public string $currency = '$',
        public ?string $period = null,
        public ?string $buttonText = null,
        public ?string $buttonHref = null,
        public string $buttonColor = 'blue',
    ) {}

    public function baseClasses(): string
    {
        return 'flex flex-col p-6 mx-auto max-w-lg text-center text-heading bg-neutral-primary-soft border border-default rounded-base shadow-xs xl:p-8';
    }

    public function render()
    {
        return view('flowbite-blade::components.pricing-card.index');
    }
}

<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;
use Themesberg\FlowbiteBlade\Concerns\HasId;

class Carousel extends Component
{
    use HasId;

    public function __construct(
        public array $items = [],
        public bool $indicators = true,
        public bool $controls = true,
        public bool $slide = false,
        public string $duration = 'duration-700',
        public string $easing = 'ease-in-out',
        ?string $id = null,
    ) {
        $this->initializeHasId($id);
    }

    public function carouselType(): string
    {
        return $this->slide ? 'slide' : 'static';
    }

    public function render()
    {
        return view('flowbite-blade::components.carousel');
    }
}

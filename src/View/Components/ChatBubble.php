<?php

namespace Themesberg\FlowbiteBlade\View\Components;

use Illuminate\View\Component;

class ChatBubble extends Component
{
    public function __construct(
        public ?string $message = null,
        public ?string $time = null,
        public ?string $avatar = null,
        public ?string $name = null,
        public string $position = 'left',
    ) {}

    public function render()
    {
        return view('flowbite-blade::components.chat-bubble');
    }
}

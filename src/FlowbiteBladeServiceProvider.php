<?php

namespace Themesberg\FlowbiteBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Themesberg\FlowbiteBlade\View\Components;

class FlowbiteBladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/flowbite-blade.php', 'flowbite-blade');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flowbite-blade');

        $this->publishes([
            __DIR__ . '/../config/flowbite-blade.php' => config_path('flowbite-blade.php'),
        ], 'flowbite-blade-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/flowbite-blade'),
        ], 'flowbite-blade-views');

        $this->registerComponents();
    }

    protected function registerComponents(): void
    {
        $prefix = config('flowbite-blade.prefix', 'fwb');

        $components = [
            // Phase 1 — Core UI
            'accordion' => Components\Accordion\Index::class,
            'accordion.item' => Components\Accordion\Item::class,
            'alert' => Components\Alert::class,
            'avatar' => Components\Avatar::class,
            'avatar.group' => Components\Avatar\Group::class,
            'badge' => Components\Badge::class,
            'button' => Components\Button::class,
            'button.group' => Components\Button\Group::class,
            'card' => Components\Card::class,
            'pricing-card' => Components\PricingCard\Index::class,
            'pricing-card.feature' => Components\PricingCard\Feature::class,
            'spinner' => Components\Spinner::class,
            'progress' => Components\Progress::class,
            'rating' => Components\Rating::class,
            'indicator' => Components\Indicator::class,

            // Phase 2 — Navigation
            'breadcrumb' => Components\Breadcrumb\Index::class,
            'breadcrumb.item' => Components\Breadcrumb\Item::class,
            'navbar' => Components\Navbar\Index::class,
            'navbar.brand' => Components\Navbar\Brand::class,
            'navbar.link' => Components\Navbar\Link::class,
            'sidebar' => Components\Sidebar\Index::class,
            'sidebar.item' => Components\Sidebar\Item::class,
            'sidebar.group' => Components\Sidebar\Group::class,
            'tabs' => Components\Tabs\Index::class,
            'tabs.item' => Components\Tabs\Item::class,
            'pagination' => Components\Pagination::class,
            'bottom-nav' => Components\BottomNav\Index::class,
            'bottom-nav.item' => Components\BottomNav\Item::class,

            // Phase 3 — Overlays & Interactive
            'modal' => Components\Modal::class,
            'drawer' => Components\Drawer::class,
            'dropdown' => Components\Dropdown\Index::class,
            'dropdown.item' => Components\Dropdown\Item::class,
            'popover' => Components\Popover::class,
            'tooltip' => Components\Tooltip::class,
            'toast' => Components\Toast::class,
            'speed-dial' => Components\SpeedDial\Index::class,

            // Phase 4 — Data Display
            'table' => Components\Table\Index::class,
            'table.head' => Components\Table\Head::class,
            'table.row' => Components\Table\Row::class,
            'table.cell' => Components\Table\Cell::class,
            'list-group' => Components\ListGroup\Index::class,
            'list-group.item' => Components\ListGroup\Item::class,
            'timeline' => Components\Timeline\Index::class,
            'timeline.item' => Components\Timeline\Item::class,
            'carousel' => Components\Carousel::class,
            'gallery' => Components\Gallery::class,
            'skeleton' => Components\Skeleton::class,
            'chat-bubble' => Components\ChatBubble::class,

            // Phase 5 — Forms
            'input' => Components\Input::class,
            'textarea' => Components\Textarea::class,
            'select' => Components\Select::class,
            'checkbox' => Components\Checkbox::class,
            'radio' => Components\Radio::class,
            'toggle' => Components\Toggle::class,
            'range' => Components\Range::class,
            'file-input' => Components\FileInput::class,
            'floating-label' => Components\FloatingLabel::class,

            // Phase 6 — Content & Layout
            'footer' => Components\Footer::class,
            'jumbotron' => Components\Jumbotron::class,
            'banner' => Components\Banner::class,
            'kbd' => Components\Kbd::class,
            'stepper' => Components\Stepper\Index::class,
            'stepper.item' => Components\Stepper\Item::class,
            'video' => Components\Video::class,

            // Layouts
            'layouts.admin' => Components\Layouts\Admin::class,
            'layouts.auth' => Components\Layouts\Auth::class,
            'layouts.settings' => Components\Layouts\Settings::class,
        ];

        foreach ($components as $alias => $class) {
            Blade::component("{$prefix}.{$alias}", $class);
        }

        $this->registerBlockComponents($prefix);
    }

    protected function registerBlockComponents(string $prefix): void
    {
        $blocksPath = __DIR__ . '/../resources/views/components/blocks';
        $categories = ['marketing', 'application', 'ecommerce', 'publisher'];

        foreach ($categories as $category) {
            $categoryPath = $blocksPath . '/' . $category;
            if (! is_dir($categoryPath)) {
                continue;
            }
            foreach (glob($categoryPath . '/*.blade.php') as $file) {
                $name = basename($file, '.blade.php');
                Blade::component(
                    "flowbite-blade::components.blocks.{$category}.{$name}",
                    "{$prefix}.blocks.{$category}.{$name}"
                );
            }
        }
    }
}

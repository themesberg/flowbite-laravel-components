# Flowbite Blade

Laravel Blade components for [Flowbite](https://flowbite.com). 60+ UI components, 80+ pre-built blocks, dark mode, and Tailwind CSS v4 — all as composable Blade components.

**Documentation:** [flowbite-laravel.com](https://flowbite-laravel.com)

## Installation

```bash
composer require themesberg/flowbite-laravel-components
```

Or get started even faster with the [Flowbite Laravel Starter Kit](https://github.com/themesberg/flowbite-laravel-starter-kit) which includes authentication, layouts, dark mode, and everything pre-configured:

```bash
laravel new my-app --using=themesberg/flowbite-laravel-starter-kit
```

### Manual setup

Add the Flowbite theme and plugin to your `resources/css/app.css`:

```css
@import 'tailwindcss';
@import 'flowbite/src/themes/default';
@plugin 'flowbite/plugin';

@source '../../vendor/themesberg/flowbite-blade/resources/views/**/*.blade.php';
@source '../../vendor/themesberg/flowbite-blade/src/**/*.php';
```

## Quick Start

```blade
<x-fwb.button>Click me</x-fwb.button>

<x-fwb.alert color="green">
    Operation successful!
</x-fwb.alert>

<x-fwb.card title="Card title">
    <p class="text-body">Card content.</p>
</x-fwb.card>
```

## Components

All components use the `x-fwb.` prefix.

### Core UI

| Component | Alias | Sub-components |
|-----------|-------|----------------|
| Accordion | `x-fwb.accordion` | `.item` |
| Alert | `x-fwb.alert` | |
| Avatar | `x-fwb.avatar` | `.group` |
| Badge | `x-fwb.badge` | |
| Button | `x-fwb.button` | `.group` |
| Card | `x-fwb.card` | |
| Indicator | `x-fwb.indicator` | |
| Pricing Card | `x-fwb.pricing-card` | `.feature` |
| Progress | `x-fwb.progress` | |
| Rating | `x-fwb.rating` | |
| Spinner | `x-fwb.spinner` | |

### Navigation

| Component | Alias | Sub-components |
|-----------|-------|----------------|
| Breadcrumb | `x-fwb.breadcrumb` | `.item` |
| Bottom Nav | `x-fwb.bottom-nav` | `.item` |
| Navbar | `x-fwb.navbar` | `.brand`, `.link` |
| Pagination | `x-fwb.pagination` | |
| Sidebar | `x-fwb.sidebar` | `.item`, `.group` |
| Tabs | `x-fwb.tabs` | `.item` |

### Overlays & Interactive

| Component | Alias |
|-----------|-------|
| Drawer | `x-fwb.drawer` |
| Dropdown | `x-fwb.dropdown` + `.item` |
| Modal | `x-fwb.modal` |
| Popover | `x-fwb.popover` |
| Speed Dial | `x-fwb.speed-dial` |
| Toast | `x-fwb.toast` |
| Tooltip | `x-fwb.tooltip` |

### Data Display

| Component | Alias | Sub-components |
|-----------|-------|----------------|
| Carousel | `x-fwb.carousel` | |
| Chat Bubble | `x-fwb.chat-bubble` | |
| Gallery | `x-fwb.gallery` | `.image` |
| List Group | `x-fwb.list-group` | `.item` |
| Skeleton | `x-fwb.skeleton` | |
| Table | `x-fwb.table` | `.head`, `.row`, `.cell` |
| Timeline | `x-fwb.timeline` | `.item` |

### Forms

| Component | Alias |
|-----------|-------|
| Checkbox | `x-fwb.checkbox` |
| File Input | `x-fwb.file-input` |
| Floating Label | `x-fwb.floating-label` |
| Input | `x-fwb.input` |
| Radio | `x-fwb.radio` |
| Range | `x-fwb.range` |
| Select | `x-fwb.select` |
| Textarea | `x-fwb.textarea` |
| Toggle | `x-fwb.toggle` |

### Content & Layout

| Component | Alias | Sub-components |
|-----------|-------|----------------|
| Banner | `x-fwb.banner` | |
| Footer | `x-fwb.footer` | |
| Jumbotron | `x-fwb.jumbotron` | |
| Kbd | `x-fwb.kbd` | |
| Stepper | `x-fwb.stepper` | `.item` |
| Video | `x-fwb.video` | |

### Layouts

| Layout | Alias |
|--------|-------|
| Admin | `x-fwb.layouts.admin` |
| Auth | `x-fwb.layouts.auth` |
| Settings | `x-fwb.layouts.settings` |

## Blocks

Pre-built page sections available as `x-fwb.blocks.{category}.{name}`.

### Marketing (34 blocks)

Hero, header, footer, pricing, CTA, features, testimonials, social proof, FAQ, contact form, blog, portfolio, team, newsletter, error pages, login/register forms, and more.

```blade
<x-fwb.blocks.marketing.hero
    title="We invest in the world's potential"
    primaryButtonText="Learn more"
/>

<x-fwb.blocks.marketing.pricing title="Our plans">
    <x-fwb.pricing-card title="Starter" price="29" period="/month">
        <x-fwb.pricing-card.feature>10 users</x-fwb.pricing-card.feature>
    </x-fwb.pricing-card>
</x-fwb.blocks.marketing.pricing>
```

### Application (28 blocks)

CRUD tables, modals, drawers, forms, filters, navigation, dashboard shell, and more.

```blade
<x-fwb.blocks.application.crud-products />
<x-fwb.blocks.application.crud-create-modal id="create-modal" />
```

### Ecommerce (24 blocks)

Product pages, shopping cart, checkout, order tracking, payment forms, reviews, and more.

```blade
<x-fwb.blocks.ecommerce.shopping-cart />
<x-fwb.blocks.ecommerce.checkout />
```

### Publisher (2 blocks)

Blog templates and comment sections.

```blade
<x-fwb.blocks.publisher.blog-template />
```

## Composition Pattern

Components use parent-child composition:

```blade
<x-fwb.accordion>
    <x-fwb.accordion.item title="Question 1">Answer 1</x-fwb.accordion.item>
    <x-fwb.accordion.item title="Question 2">Answer 2</x-fwb.accordion.item>
</x-fwb.accordion>

<x-fwb.table>
    <x-fwb.table.head :columns="['Name', 'Email', 'Role']" />
    <x-fwb.table.row>
        <x-fwb.table.cell>John Doe</x-fwb.table.cell>
        <x-fwb.table.cell>john@example.com</x-fwb.table.cell>
        <x-fwb.table.cell>Admin</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>

<x-fwb.gallery :grid="3">
    <x-fwb.gallery.image src="/img/photo-1.jpg" alt="Photo 1" />
    <x-fwb.gallery.image src="/img/photo-2.jpg" alt="Photo 2" />
    <x-fwb.gallery.image src="/img/photo-3.jpg" alt="Photo 3" />
</x-fwb.gallery>
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=flowbite-blade-config
```

```php
// config/flowbite-blade.php
return [
    'prefix' => 'fwb',           // Component alias prefix
    'default_color' => 'blue',   // Default color for buttons, badges, etc.
    'default_size' => 'md',      // Default size for inputs, buttons, etc.
    'layout' => 'admin',         // Default layout
];
```

## Customizing Views

Publish all blade views to customize them:

```bash
php artisan vendor:publish --tag=flowbite-blade-views
```

Views are published to `resources/views/vendor/flowbite-blade/`.

## Icons

This package depends on [`flowbite-blade-icons`](https://github.com/themesberg/flowbite-blade-icons) for icons:

```blade
{{-- Outline icons --}}
<x-fwb-o-envelope class="w-5 h-5" />

{{-- Solid icons --}}
<x-fwb-s-envelope class="w-5 h-5" />

{{-- Inside components --}}
<x-fwb.button fwb-icon="s-plus">Add item</x-fwb.button>
```

## Requirements

- PHP 8.2+
- Laravel 12+
- Tailwind CSS v4
- Flowbite 4

## License

MIT

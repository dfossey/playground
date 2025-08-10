@props([
    'label' => '',
    'icon' => '',
    'routes' => [
        /*
        *   'route.name' => 'label',
         *  'route.name' => [
         *      'label' => 'label',
         *      'badge' => 123,
         *  ],
         */
    ],
])

@php
    $currentRoute = Route::currentRouteName();
    $active = array_key_exists($currentRoute, $routes);
@endphp

<div
    data-kt-menu-trigger="click"
    class="menu-item menu-accordion @if($active) hover show @endif"
    wire:ignore.self
>
    <span class="menu-link">
        <span class="menu-icon">
            <x-partials.icon
                :icon="$icon"
                class="fs-2"
            />
        </span>
        <span class="menu-title">
            {{ $label }}
        </span>
        <span class="menu-arrow"></span>
    </span>

    <div class="menu-sub menu-sub-accordion">
        @foreach ($routes as $key => $value)
            <x-layouts.sidebar_item
                :label="$value['label'] ?? $value"
                :href="Route::has($key) ? route($key) : '#'"
                :active="$currentRoute === $key"
                :badge="is_array($value) && array_key_exists('badge', $value) ? $value['badge'] : false"
                :accordion-item="true"
            />
        @endforeach
    </div>
</div>

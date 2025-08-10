@props([
    'route' => '',
    'href' => '',
    'label' => '',
    'icon' => '',
    'badge' => 0,
    'active' => null,
    'accordionItem' => false,
])

@php
    if (is_null($active)) {
        $active = $route && Route::is($route);
    }
@endphp

<div class="menu-item">
    <a class="menu-link @if($active) active @endif"
        {{ $attributes->whereStartsWith(['target', 'data', 'title']) }}
        @if ($href)
            href="{{ $href }}"
        @elseif ($route)
            href="{{ RouteHelper::to($route) }}"
        @endif
        wire:ignore.self
    >
        @if ($accordionItem)
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
        @else
            <span class="menu-icon">
                <x-partials.icon
                    :icon="$icon"
                    class="fs-2"
                />
            </span>
        @endif

        <span class="menu-title">
            {{ $label }}
        </span>

        @if ($badge && is_int($badge))
            <span class="menu-badge">
                <span class="badge badge-primary">
                    {{ $badge }}
                </span>
            </span>
        @endif
    </a>
</div>

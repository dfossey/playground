@props([
    'content'      => '',
    'placement'    => '',
    'tooltipClass' => '',
])

<div
    data-bs-toggle="tooltip"
    title="{!! $content !!}"
    {{ $attributes->whereStartsWith(['style', 'class']) }}
    @if ($placement) data-bs-placement="{{ $placement }}" @endif
    @if ($tooltipClass) data-bs-custom-class="{{ $tooltipClass }}" @endif
    x-init="typeof bootstrap !== 'undefined' && bootstrap.Tooltip.getOrCreateInstance($el)"
    wire:ignore.self
>
    {{ $slot }}
</div>

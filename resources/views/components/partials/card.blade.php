@props([
    'header' => null,
    'footer' => null,
])

<div class="card {{ $attributes->whereStartsWith('class')->first() ?? 'mb-8' }}">
    @if ($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>

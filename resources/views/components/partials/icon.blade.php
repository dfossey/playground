@props([
    'icon'  => 'bi-list',
    'class' => '',
])

<i
    class="bi {{ $icon }} {{ $class }}"
    {{ $attributes->whereStartsWith(['style', 'x-']) }}
></i>

@props([
    'icon'  => 'ki-category',
    'class' => '',
])

@if (Str::startsWith($icon, 'ki-'))
    <i
        class="ki-duotone {{ $icon }} {{ $class }}"
        {{ $attributes->whereStartsWith(['style', 'x-']) }}
    >
        @php $pathes = config("constants.icon.{$icon}"); @endphp
        @for ($i = 1; $i <= $pathes; $i++)
            <span class="path{{ $i }}"></span>
        @endfor
    </i>
@else
    <i
        class="bi {{ $icon }} {{ $class }}"
        {{ $attributes->whereStartsWith(['style', 'x-']) }}
    ></i>
@endif

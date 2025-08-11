@props([
    'btnClass' => '',
    'dropdownClass' => 'bg-light-secondary',
])

<div
    class="dropdown {{ $attributes['class'] ?? '' }}"
    x-data="{
        show: false,
        hideTimer: null
    }"
    x-on:mouseenter="show = true"
    x-on:mouseleave="show = false"
    x-init="
        $watch('show', (value) => {
            const dropdown = bootstrap.Dropdown.getOrCreateInstance($el);
            clearTimeout($data.hideTimer);

            if (value) {
                dropdown.show();
            } else {
                $data.hideTimer = setTimeout(() => dropdown.hide(), 100);
            }
        })
    "
>
    <button
        class="btn {{ $btnClass }}"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        x-bind:class="{ 'showed': show }"
    >
        {{ $label ?? $attributes['label'] ?? '' }}
    </button>
    <div class="dropdown-menu p-0 {{ $dropdownClass }}">
        <div class="d-flex flex-column p-2">
            {{ $slot }}
        </div>
    </div>
</div>

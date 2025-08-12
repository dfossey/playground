@props([
    'class' => ''
])

@php
    /**
     * Up to 20 slots 'tab_{iteration}'
     */
    $items = [];
    for ($i = 1; $i <= 20; $i++) {
        $tab = "tab_{$i}";
        $id = Str::uuid() . $tab;

        if (isset($$tab) && $$tab->hasActualContent()) {
            $items[$id] = $tab;
        }
    }
@endphp

<ul
    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fw-bold fs-6 border-2 {{ $class }}"
    id="pills-tab"
    role="tablist"
>
    @foreach ($items as $id => $item)
        <li class="nav-item" role="presentation">
            <button
                class="nav-link {{ $loop->first ? 'active' : '' }}"
                id="{{ $id }}-tab"
                data-bs-toggle="pill"
                data-bs-target="#{{ $id }}"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                wire:ignore.self
            >
                {{ $$item->attributes['title'] ?? '' }}
            </button>
        </li>
    @endforeach
</ul>
<div class="tab-content" id="pills-tabContent">
    @foreach ($items as $id => $item)
        <div
            class="tab-pane fade {{ $loop->first ? 'show active' : '' }} pt-6"
            id="{{ $id }}"
            role="tabpanel"
            aria-labelledby="{{ $id }}-tab"
            tabindex="0"
            wire:ignore.self
        >
            {{ $$item }}
        </div>
    @endforeach
</div>
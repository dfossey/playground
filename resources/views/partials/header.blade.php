<div class="header px-8 py-2 h-auto justify-content-end">
    {{-- Theme menu --}}
    <x-plugins.dropdown
        class="p-4"
    >
        <x-slot:label>
            <x-partials.icon
                icon="bi-brightness-high"
                class="theme-light-show fs-2"
            />
            <x-partials.icon
                icon="bi-moon-stars"
                class="theme-dark-show fs-2"
            />
        </x-slot:label>

        <button
            class="btn btn-active-light-primary text-start fs-7 py-3 px-4 mb-2 text-gray-600"
            x-on:click="setAppTheme('light')"
        >
            <x-partials.icon
                icon="bi-brightness-high"
                class="text-inherit fs-4 me-2"
            />
            Light
        </button>

        <button
            class="btn btn-active-light-primary text-start fs-7 py-3 px-4 text-gray-600"
            x-on:click="setAppTheme('dark')"
        >
            <x-partials.icon
                icon="bi-moon-stars"
                class="text-inherit fs-4 me-2"
            />
            Dark
        </button>
    </x-plugins.dropdown>
</div>

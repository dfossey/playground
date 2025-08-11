<div class="header px-8 py-2 align-items-center h-60px">
    <div
        class="btn d-flex d-lg-none bg-hover-light-secondary text-hover-primary
        px-3 h-45px align-items-center justify-content-center text-gray-600"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#sidebarOffcanvas"
        aria-controls="sidebarOffcanvas"
    >
        <x-partials.icon
            icon="bi-list"
            class="fs-1 p-0"
        />

        <span class="text-inherit ms-4 fs-6 fw-bold">
            Playground
        </span>
    </div>

    {{-- Theme menu --}}
    <x-plugins.dropdown
        class="ms-auto"
        btn-class="w-45px h-45px d-flex align-items-center justify-content-center"
    >
        <x-slot:label>
            <x-partials.icon
                icon="bi-brightness-high"
                class="theme-light-show fs-2 p-0"
            />
            <x-partials.icon
                icon="bi-moon-stars"
                class="theme-dark-show fs-2 p-0"
            />
        </x-slot:label>

        <button
            type="button"
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
            type="button"
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

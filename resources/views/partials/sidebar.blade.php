<div class="aside aside-default overflow-clip">
    <div class="aside-logo flex-column-auto p-5 pt-7 h-auto">
        <div
            class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex h-auto sidebar-toggler"
            x-on:click="toggleSidebar()"
            x-data
        >
            <x-partials.icon icon="bi-list" class="fs-1 ms-1" />
            {{-- <span class="ms-4 text-muted fw-bold">
                Logo
            </span> --}}
        </div>
    </div>

    <div class="d-flex flex-column flex-grow-1 p-6 pt-5">
        <x-plugins.tooltip placement="right" content="Home" class="mb-7">
            <a href="{{ route('home') }}">
                <x-partials.icon
                    icon="bi-grid-1x2"
                    :class="(Route::is('home') ? 'text-primary' : '') . ' fs-2 text-hover-primary'"
                />
            </a>
        </x-plugins.tooltip>
        <x-plugins.tooltip placement="right" content="Components" class="mb-7">
            <a href="https://preview.keenthemes.com/html/craft/docs/base/utilities" target="_blank">
                <x-partials.icon
                    icon="bi-columns-gap"
                    class="fs-2 text-hover-primary"
                />
            </a>
        </x-plugins.tooltip>
        <x-plugins.tooltip placement="right" content="Demo">
            <a href="https://preview.keenthemes.com/craft/index.html" target="_blank">
                <x-partials.icon
                    icon="bi-layout-sidebar"
                    class="fs-2 text-hover-primary"
                />
            </a>
        </x-plugins.tooltip>
    </div>
</div>

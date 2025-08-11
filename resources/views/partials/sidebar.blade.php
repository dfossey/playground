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

    <div class="d-flex flex-column flex-grow-1 p-6 ps-2 pt-5">
        @for($i = 1; $i <= 20; $i++)
            <x-plugins.tooltip
                placement="right"
                content="My awesome demo label"
                tooltip-class="sidebar-tooltip"
            >
                <a href="{{ route('home') }}" class="sidebar-item">
                    <x-partials.icon
                        icon="bi-grid-1x2"
                        :class="($i === 1 && Route::is('home') ? 'text-primary' : '') . ' fs-2'"
                    />
                    <span class="sidebar-label">
                        My awesome demo label
                    </span>
                </a>
            </x-plugins.tooltip>
        @endfor

        <div class="mt-auto"><div class="separator my-6 mx-4"></div></div>

        <x-plugins.tooltip
            placement="right"
            content="Demo preview"
            tooltip-class="sidebar-tooltip"
        >
            <a href="https://preview.keenthemes.com/html/craft/docs/base/utilities" target="_blank" class="sidebar-item">
                <x-partials.icon
                    icon="bi-columns-gap"
                    class="fs-2"
                />
                <span class="sidebar-label">
                    Demo preview
                </span>
            </a>
        </x-plugins.tooltip>

        <x-plugins.tooltip
            placement="right"
            content="Craft components"
            tooltip-class="sidebar-tooltip"
        >
            <a href="https://preview.keenthemes.com/craft/index.html" target="_blank" class="sidebar-item">
                <x-partials.icon
                    icon="bi-layout-sidebar"
                    class="fs-2"
                />
                <span class="sidebar-label">
                    Craft components
                </span>
            </a>
        </x-plugins.tooltip>
    </div>
</div>

<div class="aside aside-default overflow-clip d-block">
    <div class="aside-logo flex-column-auto p-lg-5 pt-lg-7 h-auto">
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

    <div
        class="offcanvas-lg offcanvas-start"
        tabindex="-1"
        id="sidebarOffcanvas"
        aria-labelledby="sidebar_mobile"
    >
        <div
            class="offcanvas-header py-4 position-relative border-bottom"
        >
            Menu
            <button
                type="button"
                class="btn-close position-absolute"
                style="top: 1.25rem; right: 1.5rem"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarOffcanvas"
                aria-label="Close"
            ></button>
        </div>

        <div class="offcanvas-body p-2">
            <div class="sidebar-content d-flex flex-column flex-grow-1 p-6 ps-2 pt-5">
                @for($i = 1; $i <= 20; $i++)
                    <x-plugins.tooltip
                        placement="right"
                        content="My awesome demo label"
                        tooltip-class="sidebar-tooltip"
                    >
                        <a href="{{ route('home') }}" class="sidebar-item {{ $i === 1 && Route::is('home') ? 'active' : '' }}">
                            <x-partials.icon
                                icon="bi-grid-1x2"
                                class="fs-2"
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
    </div>
</div>

<div class="header p-8 h-auto justify-content-end">
    {{-- Theme menu --}}
    <div class="d-flex align-items-center">
        <a
            href="#"
            class="btn btn-icon btn-active-light-primary h-auto"
            style="background-color: transparent !important"
            data-kt-menu-trigger="{ default:'click', lg: 'hover' }"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end"
        >
            <x-partials.icon
                icon="ki-night-day"
                class="theme-light-show fs-1"
            />
            <x-partials.icon
                icon="ki-moon"
                class="theme-dark-show fs-1"
            />
        </a>

        <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700
            menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px mt-8"
            data-kt-menu="true"
            data-kt-element="theme-mode-menu"
            style=""
        >
            <div class="menu-item px-3 my-0">
                <a
                    href="#"
                    class="menu-link px-3 py-2"
                    data-kt-element="mode"
                    data-kt-value="light"
                >
                    <span class="menu-icon" data-kt-element="icon">
                        <x-partials.icon
                            icon="ki-night-day"
                            class="fs-2"
                        />
                    </span>
                    <span class="menu-title">
                        Light
                    </span>
                </a>
            </div>

            <div class="menu-item px-3 my-0">
                <a
                    href="#"
                    class="menu-link px-3 py-2"
                    data-kt-element="mode"
                    data-kt-value="dark"
                >
                    <span class="menu-icon" data-kt-element="icon">
                        <x-partials.icon
                            icon="ki-moon"
                            class="fs-2"
                        />
                    </span>
                    <span class="menu-title">
                        Dark
                    </span>
                </a>
            </div>

            <div class="menu-item px-3 my-0">
                <a
                    href="#"
                    class="menu-link px-3 py-2"
                    data-kt-element="mode"
                    data-kt-value="system"
                >
                    <span class="menu-icon" data-kt-element="icon">
                        <x-partials.icon
                            icon="ki-screen"
                            class="fs-2"
                        />
                    </span>
                    <span class="menu-title">
                        System
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

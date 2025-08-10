<div
    id="kt_aside"
    class="aside aside-default overflow-clip"
    data-kt-drawer="true"
    data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle"
>
    <div
        class="aside-logo flex-column-auto p-8 h-auto"
        id="kt_aside_logo"
    >
        <div
            class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex h-auto {{
                ($_COOKIE['data-kt-aside-minimize'] ?? null) === 'on' ? 'active' : ''
            }}"
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize"
        >
            <x-partials.icon icon="bi-list" class="fs-1 ms-1" />
            {{-- <span class="ms-4 text-muted fw-bold">
                Logo
            </span> --}}
        </div>
    </div>

    <div class="aside-menu flex-column-fluid">
        <div
            id="kt_aside_menu"
            data-kt-menu="true"
            class="menu menu-sub-indention menu-column menu-rounded menu-title-gray-600 menu-icon-gray-400
            menu-active-bg menu-state-primary menu-arrow-gray-500 fw-semibold fs-6 my-5 mt-lg-2 mb-lg-0"
        >
            <div
                class="hover-scroll-y mx-4"
                id="kt_aside_menu_wrapper"
                data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_aside_menu"
                data-kt-scroll-offset="20px"
                data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            >
                <x-layouts.sidebar_accordion
                    icon="ki-element-11"
                    label="Accordion"
                    :routes="[
                        'home' => 'Home',
                        'link' => 'Link',
                        'link2' => 'Link',
                        'link3' => 'Link',
                    ]"
                />

                {{-- <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div> --}}

                <x-layouts.sidebar_item
                    icon="ki-row-vertical"
                    label="Craft components"
                    href="https://preview.keenthemes.com/html/craft/docs/base/utilities"
                    target="_blank"
                />
            </div>
        </div>
    </div>
</div>

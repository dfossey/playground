<div
    id="kt_aside"
    class="aside aside-default"
    data-kt-drawer="true"
    data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle"
>
    <div
        class="aside-logo flex-column-auto px-10 pt-9 pb-5"
        id="kt_aside_logo"
    >
        <div
            class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex me-2 me-lg-5"
            data-kt-toggle="true"
            data-kt-toggle-state="active"
            data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize"
        >
            <i class="ki-duotone ki-black-left-line fs-1 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <span class="ms-4 text-muted fw-bold">
                Logo
            </span>
        </div>
    </div>

    <div class="aside-menu flex-column-fluid ps-3 pe-1">
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
                style="height: 1202px;"
            >
                <div
                    data-kt-menu-trigger="click"
                    class="menu-item menu-accordion"
                >
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboards</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion"
                        style="display: none; overflow: hidden;"
                        kt-hidden-height="167"
                    >
                        <div class="menu-item">
                            <a class="menu-link" href="/craft/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Multipurpose</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="https://preview.keenthemes.com/html/craft/docs/base/utilities" target="_blank">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-row-vertical fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Components</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

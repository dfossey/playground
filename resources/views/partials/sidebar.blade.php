<div class="aside aside-default overflow-clip">
    <div class="aside-logo flex-column-auto p-8 h-auto">
        <div class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex h-auto">
            <x-partials.icon icon="bi-list" class="fs-1 ms-1" />
            {{-- <span class="ms-4 text-muted fw-bold">
                Logo
            </span> --}}
        </div>
    </div>

    <div class="d-flex flex-column flex-grow-1 p-9 pt-5">
        <x-plugins.tooltip placement="right" content="Link" class="mb-7">
            <x-partials.icon icon="bi-grid-1x2" class="fs-2 text-hover-primary" />
        </x-plugins.tooltip>
        <x-plugins.tooltip placement="right" content="Link">
            <x-partials.icon icon="bi-columns-gap" class="fs-2 text-hover-primary" />
        </x-plugins.tooltip>
    </div>
</div>

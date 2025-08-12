<x-layouts.app
    title="Home"
    description="Home"
>
    <div class="container px-8">
        @php
            $colors = [
                'primary',
                'secondary',
                'light',
                'info',
                'warning',
                'danger',
                'success',
                'dark',
            ];

            $components = [
                'button' => 'btn',
                'span' => 'badge',
                'div' => 'alert',
            ];

            $noLight = ['alert'];
        @endphp

        @foreach ($components as $type => $class)
            <x-partials.card>
                <div class="d-flex justify-content-between flex-wrap">
                    @foreach ($colors as $color)
                        <x-plugins.tooltip
                            :content="$class . '-' . $color"
                            placement="top"
                        >
                            <{{ $type }} class="{{ "{$class} {$class}" }}-{{ $color }} mb-0">
                                Placeholder
                            </{{ $type }}>
                        </x-plugins.tooltip>
                    @endforeach
                </div>

                @if (!in_array($class, $noLight))
                    <div class="d-flex justify-content-between flex-wrap mt-6">
                        @foreach ($colors as $color)
                            <x-plugins.tooltip
                                :content="$class . '-light-' . $color"
                                placement="bottom"
                            >
                                <{{ $type }} class="{{ "{$class} {$class}" }}-light-{{ $color }} mb-0">
                                    Placeholder
                                </{{ $type }}>
                            </x-plugins.tooltip>
                        @endforeach
                    </div>
                @endif
            </x-partials.card>
        @endforeach

        <x-partials.card class-body="pt-4">
            <x-plugins.tabs>
                <x-slot name="tab_1" title="Tab 1">
                    Tab 1: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, perspiciatis eos! Nostrum animi fugit doloribus praesentium quo sunt, dolore sed!
                </x-slot>
                <x-slot name="tab_2" title="Tab 2">
                    Tab 2: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, perspiciatis eos! Nostrum animi fugit doloribus praesentium quo sunt, dolore sed!
                </x-slot>
                <x-slot name="tab_3" title="Tab 3">
                    Tab 3: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, perspiciatis eos! Nostrum animi fugit doloribus praesentium quo sunt, dolore sed!
                </x-slot>
                <x-slot name="tab_4" title="Tab 4">
                    Tab 4: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, perspiciatis eos! Nostrum animi fugit doloribus praesentium quo sunt, dolore sed!
                </x-slot>
            </x-plugins.tabs>
        </x-partials.card>
    </div>
</x-layouts.app>
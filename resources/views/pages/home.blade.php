<x-layouts.app
    title="Home"
    description="Home"
>
    <div class="container p-8">
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
                <div class="d-flex justify-content-between flex-wrap {{ !in_array($class, $noLight) ? 'mb-6' : '' }}">
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
                    <div class="d-flex justify-content-between flex-wrap">
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
    </div>
</x-layouts.app>
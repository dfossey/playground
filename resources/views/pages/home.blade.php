<x-layouts.app
    title="Home"
    description="Home"
>
    <div class="container">
        <h1 class="my-8">
            Mon super titre
        </h1>

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
            <div class="card mb-8">
                <div class="card-header d-flex align-items-center" style="min-height: 60px">
                    <h3 class="text-gray-800 mb-0">{{ $class }}</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-wrap {{ !in_array($class, $noLight) ? 'mb-6' : '' }}">
                        @foreach ($colors as $color)
                            <{{ $type }} class="{{ "{$class} {$class}" }}-{{ $color }} mb-0">Placeholder</{{ $type }}>
                        @endforeach
                    </div>

                    @if (!in_array($class, $noLight))
                        <div class="d-flex justify-content-between flex-wrap">
                            @foreach ($colors as $color)
                                <{{ $type }} class="{{ "{$class} {$class}" }}-light-{{ $color }} mb-0">Placeholder</{{ $type }}>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.app>
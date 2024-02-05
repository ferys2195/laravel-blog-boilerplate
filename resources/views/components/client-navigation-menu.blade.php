@foreach ($menus as $menu)
    @isset($menu['submenu'])
        <li>
            <details class="lg:dropdown">
                <summary>
                    {{ $menu['title'] }}
                </summary>
                <x-submenu>
                    @foreach ($menu['submenu'] as $submenu)
                        <li><a href="{{ $submenu['uri'] }}">{{ $submenu['title'] }}</a></li>
                    @endforeach
                </x-submenu>
                {{-- <ul class="p-2 lg:bg-base-100 lg:rounded-t-none lg:dropdown-content">
                </ul> --}}
            </details>
        </li>
    @else
        <li><a href="{{ $menu['uri'] }}">{{ $menu['title'] }}</a></li>
    @endisset
@endforeach
<li class="hidden lg:inline">
    <x-theme/>
</li>

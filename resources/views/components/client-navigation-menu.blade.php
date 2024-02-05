@foreach ($menus as $menu)
    <li>
        @isset($menu['submenu'])
            <x-submenu :title="$menu['title']" :menus="$menu['submenu']" />
        @else
            <a href="{{ $menu['uri'] }}">{{ $menu['title'] }}</a>
        @endisset
    </li>
@endforeach
<li class="hidden lg:inline">
    <x-theme />
</li>

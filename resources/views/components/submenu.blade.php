<details class="dropdown">
    <summary>
        {{ $title }}
    </summary>
    <ul class="p-2 lg:bg-base-100 lg:rounded-t-none lg:dropdown-content">
        @foreach ($menus as $submenu)
            <li>
                <a href="{{ $submenu['uri'] }}">{{ $submenu['title'] }}</a>
            </li>
        @endforeach
    </ul>
</details>

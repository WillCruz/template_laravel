@props(['links'])
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach ($links as $link)
        <li class="nav-item {{ isset($link['sublinks']) ? 'dropdown' : '' }}">
            <a class="nav-link {{ isset($link['sublinks']) ? 'collapsed' : '' }} {{ $link['active'] ? 'active' : '' }}"
                href="{{ isset($link['route']) ? route($link['route']) : '#' }}" {{ isset($link['sublinks'])
                ? 'data-toggle="collapse" aria-expanded="false"' : '' }}>
                <i class="{{ $link['icon'] }} menu-icon"></i>
                <span class="menu-title">{{ $link['label'] }}</span>
                @if (isset($link['sublinks']))
                <i class="menu-arrow"></i>
                @endif
            </a>
            @if (isset($link['sublinks']))
            <div class="collapse" id="{{ Str::slug($link['label']) }}">
                <ul class="nav flex-column sub-menu">
                    @foreach ($link['sublinks'] as $sublink)
                    <li class="nav-item">
                        <a class="nav-link {{ $sublink['active'] ? 'active' : '' }}"
                            href="{{ route($sublink['route']) }}">
                            {{ $sublink['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</nav>
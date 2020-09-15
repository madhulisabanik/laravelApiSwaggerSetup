<ul class="navbar-nav">
    <x-app-left-sidebar-menu-item iconclass="tv-2 text-primary" label="Dashboard"></x-app-left-sidebar-menu-item>
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Manage') }}</span>
        </a>

        <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                @foreach ($appMenues as $menu)
                    <x-app-left-sidebar-menu-item iconclass="{{ $menu['iconclass'] }}" label="{{ $menu['label'] }}"></x-app-left-sidebar-menu-item>
                @endforeach
            </ul>
        </div>
    </li>
</ul>

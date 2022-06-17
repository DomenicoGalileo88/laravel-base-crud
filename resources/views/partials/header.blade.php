<header class="site_header p-2">
    <div class="container d-flex justify-content-center">
        <nav class="d-flex align-items-center justify-content-center">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png')}}" alt="logo">
                </a>
            </div>
            <ul class="link_nav nav justify-content-center">
                <li class="nav-item {{ Route::currentRouteName() === 'comics.index'|| Route::currentRouteName() === 'comics.edit' || Route::currentRouteName() === 'comics.create' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
                </li>

            </ul>
        </nav>
    </div>
</header>
<!-- /#site_header -->
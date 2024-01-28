<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-text demo menu-text white fw-bolder ms-2">
                <img src="{{asset('img/logo.png')}}" alt="@lang('albe.APP_NAME_SHORT')"
                    width="auto" height="60px"/>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @include('layout.sidebar')
</aside>

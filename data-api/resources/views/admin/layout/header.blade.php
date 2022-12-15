<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="" class="logo-link">
                    <img class="logo-light logo-img" src="/dashlite/images/logo.png"
                         srcset="./images/logo2x.png 2x" alt="logo">
                </a>
            </div><!-- .nk-header-brand -->

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">@lang('Staff')</div>
                                    <div class="user-name dropdown-indicator">Admin</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Admin</span>
                                        <span class="sub-text">Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="#"><em class="icon ni ni-setting-alt"></em><span>@lang('Update profile')</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><em class="icon ni ni-setting-alt"></em><span>@lang('Change password')</span></a>
                                    </li>
                                    @if(Session::get('locale') == 'vi')
                                    <li>
                                        <a href="{{ request()->addQuery(['locale' => 'en']) }}">
                                            <img src="{{ asset('template/image/flag-en.png') }}" class="switch-language-img"
                                            ><span>@lang('English')</span>
                                        </a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('template/image/flag-vn.png') }}" class="switch-language-img">
                                            <span>@lang('Tiếng việt')</span>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="#">
                                            <em class="icon ni ni-signout"></em><span>@lang("Log out")</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>

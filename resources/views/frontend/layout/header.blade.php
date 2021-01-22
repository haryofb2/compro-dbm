<header id="header">

    <div id="logo" class="pull-left">
        <a href="{{ route ('frontend') }}">
            <img src="/frontend/img/logo_final.png">Djava Berkah Mineral
        </a>
    </div>

    <nav id="nav-menu-container">
        <ul class="nav-menu justify-content-center">
        <li><a href="{{ route ('frontend') }}" style="text-transform: uppercase;">
                <img src="/frontend/img/logo_final.png">Djava Berkah Mineral
            </a>
        </li>
        <li><a href="#contact">{{ __('header.contact') }}</a></li>

        <li class="menu-has-children"><a href="{{ route ('about') }}">{{ __('header.about.about') }}</a>
            <ul>
                <li><a href="{{ route ('about') }}">{{ __('header.about.about') }}</a></li>
                <li><a href="{{ route ('service') }}">{{ __('header.about.service') }}</a></li>
                <li><a href="{{ route ('stakeholder') }}">{{ __('header.about.stakeholder') }}</a></li>
                <li><a href="{{ route ('statistic') }}">{{ __('header.about.statistic') }}</a></li>
            </ul>
        </li>
        <li class="menu-has-children"><a href="#about">{{ __('header.gallery.activity') }}</a>
            <ul>
                <li><a href="{{ route ('gallery') }}">{{ __('header.gallery.gallery') }}</a></li>
                <li><a href="{{ route ('info.index') }}">{{ __('header.gallery.information') }}</a></li>
                <li><a href="{{ route ('event') }}">{{ __('header.gallery.event') }}</a></li>
            </ul>
        </li>
            <li class="menu-has-children"><a href="#">{{ __('header.language.language') }}</a>
                <ul>
                    <li>
                        <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('localization.switch', 'en') }}">{{ __('header.language.english') }}</a>
                    </li>
                    <li>
                        <a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}" href="{{ route('localization.switch', 'id') }}">{{ __('header.language.indonesia') }}</a>
                    </li>
                </ul>
            </li>

            <li class="menu-has-children"><a href="#about">login</a>
                <ul>
                    <li><a href="{{ route('login') }}">admin compro</a></li>
                    <li><a href="#">djava system</a></li>
                </ul>
            </li>
        </li>
        </ul>
    </nav><!-- #nav-menu-container -->
</header><!-- #header -->

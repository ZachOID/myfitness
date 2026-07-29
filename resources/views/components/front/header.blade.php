    <header class="header-style-01">
        <nav class="navbar navbar-area color-two navbar-two navbar-expand-lg nav-absolute">
            <div class="container container-two nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="{{ env('APP_URL') }}" class="logo">
                            <img src="{{ config('app.logo') }}" alt="{{ env('APP_NAME') }}" width="" height="auto">
                        </a>
                    </div>
                    <a href="#" class="click_show_icon" style="color:#ffffff;">
                        <i class="las la-ellipsis-v"></i>
                    </a>
                    <button class="navbar-toggler white-color" type="button" data-toggle="collapse"
                        data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav white">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('front.about') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('front.services') }}">Services</a>
                        </li>

                        <li>
                            <a href="{{ route('front.blogs') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('front.contact') }}">contact</a>
                        </li>

                    </ul>
                </div>
                <div class="nav-right-content">
                    <a href="{{ route('front.contact') }}" class="menu-btn">
                        Become a Partner
                    </a>
                    @guest
                        <a href="{{ route('front.login') }}" class="menu-btn">
                            <i class="fa fa-user" aria-hidden="true"></i> Login/Register
                        </a>
                    @endguest
                    @auth
                        @if (auth()->user()->role == 'admin')
                            <a href="{{ route('admins.dashboard') }}" class="menu-btn">
                                <i class="fa fa-user" aria-hidden="true"></i>Admin Dashboard
                            </a>
                        @else
                            <a href="{{ route('front.dashboard') }}" class="menu-btn">
                                <i class="fa fa-user" aria-hidden="true"></i> Dashboard
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>

    </header>
    <div class="overlays"></div>
    <style>
        .banner-contents.style-02 .banner-bottom-content .banner-search-form .banner-address-select .nice-select .list .focus.disabled {
            display: none !important;
        }

        .banner-area.home-two-banner {
            background-image: url("{{ asset('images/79820_home-page-d-jpg.webp') }}");
        }

        @media screen and (max-width: 480px) {
            .banner-area.home-two-banner {
                background-image: url('admin/upload/thumb/14166_home-page-m-jpg.webp');
            }
        }
    </style>
    <style>
        .social-btn {
            display: table-cell;
            padding: 15px 10px 15px 0;
        }

        a.social-login {
            all: unset;
            cursor: pointer;
            padding: 0px;
            display: flex;
            width: 100px;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            background-color: transparent;
            border: 0;
            border-radius: 0px;
            color: #333333;
        }

        a.social-login:hover {
            background-color:
                #ffffff;
        }

        .social-btn img {
            width: 30px;
            margin-right: 5px;

        }
    </style>

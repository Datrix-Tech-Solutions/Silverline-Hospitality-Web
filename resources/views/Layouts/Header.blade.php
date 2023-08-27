    <!-- header -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2">
                    <div class="header-style">
                        <a href={{ route('home') }}>
                            <img src="{{ asset('/assets/img/logo.png') }}" alt="">

                        </a>
                        <div class="extras bag">
                            {{-- <a href="javascript:void(0)" class="menu-btn">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a> --}}
                            <div class="bar-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="navbar">
                        <ul class="navbar-links">
                            <li class='navbar-dropdown {{ Route::is('home') ? 'active' : '' }}'>
                                <a href={{ route('home') }}>Home</a>
                            </li>
                            <li class='navbar-dropdown {{ Route::is('about') || Route::is('team') ? 'active' : '' }}'>
                                <a href={{ route('about') }}>About Us</a>
                                <div class="dropdown">
                                    <a href="{{ route('about') }}">About</a>

                                    <a href={{ route('team') }}>Our Team</a>
                                </div>
                            </li>
                            <li class='navbar-dropdown {{ Route::is('services') ? 'active' : '' }}'>
                                <a href={{ route('services') }}>Services</a>

                            </li>

                            <li class='navbar-dropdown {{ Route::is('contact') ? 'active' : '' }}'>
                                <a href={{ route('contact') }}>Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="extras bag">
                        <a href="javascript:void(0)" id="desktop-menu" class="menu-btn">

                            {{-- <i class="fa-solid fa-bag-shopping"></i></a> --}}
                            <a href="{{ route('buy') }}" class="button button-2">Order Now</a>
                    </div>
                </div>
                <div class="menu-wrap">
                    <div class="menu-inner ps ps--active-x ps--active-y">
                        <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
                        <div class="checkout-order">
                            <div class="title-checkout">
                                <h2>My Orders</h2>
                            </div>


                        </div>
                    </div>
                </div>
                <div style='z-index:100;' class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">


                    <div class="res-log">
                        <a href={{ route('home') }}>
                            <img src="{{ asset('/assets/img/logo.png') }}" alt="">

                        </a>
                    </div>
                    <ul>

                        <li><a href={{ route('home') }}>Home</a>
                        </li>



                        <li class="menu-item-has-children"><a href="JavaScript:void(0)">About</a>

                            <ul class="sub-menu">

                                <li><a href={{ route('about') }}>About Us</a></li>
                                <li><a href={{ route('team') }}>Our Team</a></li>

                            </ul>

                        </li>
                        <li><a href={{ route('about') }}>Services</a></li>

                        <li><a href={{ route('contact') }}>Contact </a></li>

                    </ul>

                    <a href="JavaScript:void(0)" id="res-cross"></a>
                </div>
            </div>
        </div>
    </header>
    <!-- hero-section -->

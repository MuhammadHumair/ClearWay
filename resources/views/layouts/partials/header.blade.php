<div class="header-wrapper style03">
    <!-- .header.header-style02 start -->
    <header id="header" class="header-style03">
        <div class="logo-info-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('img/logo.png') }}"
                                    alt="Trucking Transportation and Logistics HTML Template" />
                            </a>
                        </div>
                        <!-- .logo end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <div class="col-md-8">
                        <div class="info-container">
                            <ul id="quick-links" class="clearfix">
                                <li>
                                    <i class="fa fa-whatsapp"></i>
                                    <strong>
                                        <a href="{{ url('https://wa.me/+9660538188293') }}">+966 053 818 8293</a>
                                    </strong>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <strong><a href="{{ url('tel:+9660538188293') }}">+966 053 818 8293</a></strong>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <strong>
                                        <a
                                            href="{{ url('mailto:sales@customclearance.com') }}">sales@customclearance.com</a>
                                    </strong>
                                </li>
                            </ul>
                            <!-- .quick links end -->

                            <div class="wpml-languages enabled">
                                <a class="active" href="#">
                                    <img src="{{ asset('img/en.png') }}" alt="English" />
                                    <i class="fa fa-chevron-down"></i>
                                </a>

                                <ul class="wpml-lang-dropdown">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('img/de.png') }}" alt="German" />
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('img/it.png') }}" alt="Italian" />
                                        </a>
                                    </li>
                                </ul>
                                <!-- .wpml-lang-dropdown end -->
                            </div>
                            <!-- .wpml-languages.enabled end -->

                            <!-- #search start -->
                            <div id="search">
                                <form action="#" method="get">
                                    <input class="search-submit" type="submit" />
                                    <input id="m_search" name="s" type="text"
                                        placeholder="Type and hit enter..." />
                                </form>
                            </div>
                            <!-- #search end -->
                        </div>
                        <!-- .info-container end -->
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .logo-info-container end -->

        <div class="header-inner">
            <!-- .container start -->
            <div class="container">
                <!-- .main-nav start -->
                <div class="main-nav">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default nav-left" role="navigation">
                                <!-- MAIN NAVIGATION -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown current-menu-item">
                                            <a href="{{ route('home') }}" class="dropdown-toggle">Home</a>
                                        </li>
                                        <!-- .dropdown end -->
                                        <li class="dropdown">
                                            <a href="{{ route('about') }}" class="dropdown-toggle">About</a>
                                        </li>
                                        <!-- .dropdown end -->
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown"
                                                class="dropdown-toggle">Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle"
                                                        data-toggle="dropdown">Logistics</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('overland-transportation') }}">Overland
                                                                transportation</a></li>
                                                        <li><a href="{{ route('air-freight') }}">Air freight</a></li>
                                                        <li><a href="{{ route('ocean-freight') }}">Ocean freight</a>
                                                        </li>
                                                        <li><a href="{{ route('rail-transportation') }}">Rail
                                                                international
                                                                shipping</a></li>
                                                        <li><a href="{{ route('contract-logistics') }}">Contract
                                                                logistics</a>
                                                        </li>
                                                    </ul>
                                                    <!-- .dropdown-menu end -->
                                                </li>
                                                <!-- .dropdown-submenu end -->
                                                <li><a href="{{ route('ware-housing') }}">Warehousing</a></li>
                                                <li><a href="{{ route('supply-chain-management') }}">Supply chain
                                                        management</a></li>
                                                <li><a href="{{ route('packaging-options') }}">Packaging options</a>
                                                </li>
                                                <li><a href="{{ route('consulting-services') }}">Consulting
                                                        services</a></li>
                                            </ul>
                                            <!-- .dropdown-menu end -->
                                        </li>
                                        <!-- .dropdown end -->
                                        <li class="dropdown">
                                            <a href="{{ route('become-a-driver') }}" class="dropdown-toggle">Become A
                                                Driver</a>
                                        </li>
                                        <!-- .dropdown end -->
                                        <li class="dropdown">
                                            <a href="{{ route('contact') }}" class="dropdown-toggle">Contact</a>
                                        </li>
                                        <!-- .dropdown end -->
                                    </ul>
                                    <!-- .nav.navbar-nav end -->

                                    <!-- RESPONSIVE MENU -->
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <button class="dl-trigger">Open Menu</button>

                                        <ul class="dl-menu">
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="#">Services</a>
                                                <ul class="dl-submenu">
                                                    <li>
                                                        <a href="#">Logistics</a>
                                                        <ul class="dl-submenu">
                                                            <li>
                                                                <a href="{{ route('overland-transportation') }}">Overland
                                                                    transportation</a>
                                                            </li>
                                                            <li><a href="{{ route('air-freight') }}">Air freight</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('ocean-freight') }}">Ocean
                                                                    freight</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('rail-transportation') }}">Rail
                                                                    international shipping</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('contract-logistics') }}">Contract
                                                                    logistics</a>
                                                            </li>
                                                        </ul>
                                                        <!-- .dl-submenu end -->
                                                    </li>
                                                    <li><a href="{{ route('ware-housing') }}">Warehousing</a></li>
                                                    <li>
                                                        <a href="{{ route('supply-chain-management') }}">Supply chain
                                                            management</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('packaging-options') }}">Packaging
                                                            options</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('consulting-services') }}">Consulting
                                                            services</a>
                                                    </li>
                                                </ul>
                                                <!-- dl-submenu end -->
                                            </li>
                                            <li>
                                                <a href="{{ route('become-a-driver') }}">Become A Driver</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                        <!-- .dl-menu end -->
                                    </div>
                                    <!-- #dl-menu end -->

                                    <a class="btn btn-medium" href="{{ route('contact') }}">
                                        <span> get a quote </span>
                                    </a>
                                </div>
                                <!-- MAIN NAVIGATION END -->
                            </nav>
                            <!-- .navbar.navbar-default end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .main-nav end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .header-inner end -->
    </header>
    <!-- .header.header-style02 -->
</div><!-- .header-wrapper end -->

<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance u-shadow-v19">
    <div class="u-header__section g-bg-white g-transition-0_3">

        <!-- NAVIGATION BAR -->
        <nav class="js-mega-menu navbar navbar-expand-lg g-pa-0" style="background-color: #268ac6">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand g-pl-15" href="{{ route('home') }}">
                    <img class="g-width-95" src="{{ asset('assets/img/logo/logo.png') }}" alt="{{ env('COMPANY_NAME') }}" title="{{ env('COMPANY_NAME') }}" style="width: 230px !important; height: 70px">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pos-abs g-top-10 g-right-0 g-pa-0 g-mt-2" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                <span class="hamburger hamburger--slider g-px-15">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row">
                    <ul class="navbar-nav ml-auto g-pb-30 g-pb-0--lg">
                        <!-- About - Submenu -->
                        <li class="nav-item hs-has-sub-menu g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a id="nav-link--page" class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--page">
                                About Us
                            </a>

                            <ul id="nav-submenu-aboutus" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-18"
                                aria-labelledby="nav-link--page">
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('overview') }}">Overview</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End About - Submenu -->

                        <!-- Gallery -->
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{ route('gallery') }}"
                               aria-haspopup="true"
                               aria-expanded="false"
                            >
                                Gallery
                            </a>
                        </li>
                        <!-- End -->

                        <!-- MRO Submenu -->
                        <li class="nav-item hs-has-sub-menu g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--page">
                                MRO Solutions
                            </a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-18"
                                aria-labelledby="nav-link--page">
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('fuel') }}">Fuel</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('electro_mechanical') }}">Electro Mechanical</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('hydraulic') }}">Hydraulic</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('capabilities') }}">Capabilities</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End -->

                        <!-- Quality - Submenu -->
                        <li class="nav-item hs-has-sub-menu g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--page">
                                Quality
                            </a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-18"
                                aria-labelledby="nav-link--page">
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-text g-font-weight-600" href="{{ route('certifications') }}">Certifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Quality - Submenu -->
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{ route('rfq') }}">
                                RFQ
                            </a>
                        </li>
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{ route('contact_us') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
        <!-- END -->
    </div>
</header>

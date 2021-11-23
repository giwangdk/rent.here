<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
                <!-- Logo -->


                <a class="navbar-brand" href="./index.html" aria-label="Front">
                     <img class="navbar-brand-logo w-100" src="{{asset('dashboard/assets/img/logo rent here (1).png')}}" alt="Logo">
                </a>

                <!-- End Logo -->

                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                    <i class="tio-clear tio-lg"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content">
                <ul class="navbar-nav navbar-nav-lg nav-tabs">
                    <!-- Dashboards -->
                    <li class="navbar-vertical-aside-has-menu show">
                        <a class="nav-link " href="{{url('/admin')}}" title="Dashboards">
                            <i class="tio-home-vs-1-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                        </a>
                    </li>
                    <!-- End Dashboards -->

                    <li class="nav-item">
                        <small class="nav-subtitle" title="Pages">Pages</small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route('user.index')}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Users</span>
                        </a>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route("category.index")}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Categories</span>
                        </a>
                    </li>
                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route("car.index")}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Cars</span>
                        </a>
                    </li>
                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route("gallery.index")}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Galleries</span>
                        </a>
                    </li>
                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route("detail.index")}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Detail</span>
                        </a>
                    </li>
                    <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-nav-tooltip-link nav-link" href="{{route("price.index")}}" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Price</span>
                        </a>
                    </li>

                    
            </div>
            <!-- End Content -->
        </div>
    </div>
</aside>
<header class="header header-peofile">
    <div class="container">
        <div class="row">
            <nav class="nav w-100 d-flex justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-4 col-7 position-relative">
                    <a href="{{ route('home') }}" class="d-flex align-items-center">
                        <img loading="lazy" src="{{ asset('assets/img/png/logo-new.png') }}" alt="logo.png"
                            class="logo__img me-2" />
                        <div class="text-white">
                            <p class="logo__title">InstaNavigation</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6">
                    <ul class="justify-content-between align-items-center d-none d-lg-flex">
                        <li class="nav-list">
                            <a href="{{ route('view-instagram-stories') }}" class="nav-list__link">View stories</a>
                        </li>
                        <!--                        <li class="nav-list"><a href="https://instanavigation.com/popular-users"
                                            class="nav-list__link">Popular users</a>
                    </li>-->
                        <li class="nav-list">
                            <a href="{{ route('blog') }}" class="nav-list__link">Blog</a>
                        </li>
                        <li class="lang">
                            <span class="lang-active">en</span>
                            <ul class="lang-menu">
                                <li>
                                    <a class="lang-item" href="de/view-instagram-stories.html">de</a>
                                </li>
                                <li>
                                    <a class="lang-item" href="view-instagram-stories.html">en</a>
                                </li>
                                <li>
                                    <a class="lang-item" href="fr/view-instagram-stories.html">fr</a>
                                </li>
                                <li>
                                    <a class="lang-item" href="it/view-instagram-stories.html">it</a>
                                </li>
                                <li>
                                    <a class="lang-item" href="ru/view-instagram-stories.html">ru</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu-burger justify-content-end d-flex d-lg-none me-2">
                        <div class="menu-burger-item flex justify-between flex-col">
                            <div class="menu-burger-list" id="burger_list1"></div>
                            <div class="menu-burger-list" id="burger_list2"></div>
                            <div class="menu-burger-list" id="burger_list3"></div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

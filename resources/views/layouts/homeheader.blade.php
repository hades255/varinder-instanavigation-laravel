<header class="header">
    <div class="container">
        <div class="row position-relative">
            <nav class="nav w-100 d-flex justify-content-between align-items-center top-0 start-0">
                <div class="col-lg-3 col-sm-4 col-7 position-relative">
                    <a href="" class="d-flex align-items-center">
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
                                <li><a class="lang-item" href="de.html">de</a></li>
                                <li><a class="lang-item" href="index.html">en</a></li>
                                <li><a class="lang-item" href="fr.html">fr</a></li>
                                <li><a class="lang-item" href="it.html">it</a></li>
                                <li><a class="lang-item" href="ru.html">ru</a></li>
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
    <div class="header-item d-flex justify-content-center align-items-center g-0 px-2 px-sm-0">
        <div class="container home-page-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <div class="text-center" id="search">
                        <h1 class="header__title mb-4">
                            View Instagram <br />
                            anonymously
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9">
                    <user-search search-btn-text="Search" input-placeholder="Instagram user name or link"
                        locale="en"></user-search>
                    <p class="header-search__text text-center d-none d-md-block d-lg-block"></p>
                </div>
                <div>
                    <div class="row justify-content-center mt-3 mb-4">
                        <div class="col-12" style="min-height: 250px">
                            <ins class="adsbygoogle" style="display: block" data-ad-client="ca-pub-8482438505165967"
                                data-ad-slot="6408458692" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

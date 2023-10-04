<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="yandex-verification" content="c3286cb4719c914f" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="canonical" href="https://instanavigation.com/view-instagram-stories" />
    <meta name="description"
        content="View Instagram stories anonymously without registration. View profiles, highlights, posts, comments in one place." />
    <link href="{{ asset('npm/bootstrap.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link rel="stylesheet" href="{{ asset('font-awesome/5.15.3/css/all.min.css') }}" referrerpolicy="no-referrer" />
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          />
    <link rel="stylesheet" href="https://instanavigation.com/css/socialstory.css?v1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="{{ asset('gtag/js?id=G-0JTJC26W3L') }}"></script>
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-0JTJC26W3L"></script> --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-0JTJC26W3L");
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] =
                m[i] ||
                function() {
                    (m[i].a = m[i].a || []).push(arguments);
                };
            var z = null;
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            (k = e.createElement(t)),
            (a = e.getElementsByTagName(t)[0]),
            (k.async = 1),
            (k.src = r),
            a.parentNode.insertBefore(k, a);
        })(window, document, "script", "{{ asset('assets/js/metrika/tag.js') }}", "ym");
        ym(74856667, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
        });
    </script>
    <noscript>
        <div>
            <img src="{{ asset('assets/img/watch/74856667.gif') }}" style="position: absolute; left: -9999px"
                alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Yandex.RTB -->
    <!--    <script>
        window.yaContextCb = window.yaContextCb || []
    </script>
        <script src="https://yandex.ru/ads/system/context.js" async></script>-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8482438505165967">
    </script>
    <script>
        window.yaContextCb = window.yaContextCb || [];
    </script>
    <script src="{{ asset('ads/system/context.js') }}" async></script>
    {{-- <title>@yield('title')</title> --}}
    <title>@yield('title')</title>

    @stack('style')
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <style>
            .mobile-ad {
                margin: 0 auto;
            }
        </style>
        @include('layouts.header')

        @include('layouts.mobilemenu')

        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="{{ asset('npm/jquery-3.6.1.min.js') }}"></script>


    @stack('scripts')


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(
                    entries,
                    observer
                ) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });
                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {}
        });
    </script>


    <!-- JavaScript Bundle with Popper -->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://instanavigation.com/js/socialstory.js?v53"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js" referrerpolicy="no-referrer">
    </script>-->
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script>
        $(".faq-list").click(function() {
            $(this).siblings().removeClass("activeFaq");
            $(this).toggleClass("activeFaq");
        });
    </script>

</body>

</html>

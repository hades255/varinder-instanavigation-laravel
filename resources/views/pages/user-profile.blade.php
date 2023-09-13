@extends('layouts.app')

@section('title',
    $user_info['username'] .
    ' | Watch Instagram stories anonymously | Posts | Comments | User profile
    statistics')

    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/socialstory.css?v1') }}">
        <link rel="stylesheet" href="{{ asset('releases/v5.2.0/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous">
    @endpush

@section('content')

    <div class="container">
        <div class="row justify-content-center text-center mb-2 mt-4">

            <!-- Yandex.RTB R-A-1261276-5 -->
            <div id="yandex_rtb_R-A-1261276-5"></div>
            <script>
                window.yaContextCb.push(() => {
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-1261276-5",
                        "renderTo": "yandex_rtb_R-A-1261276-5"
                    })
                })
            </script>
        </div>
    </div>
    <div class="container profile">
        <div class="row justify-content-center text-center"></div>

        <div id="storytime"></div>
        <profile-page v-bind:user-info-prop='{{ json_encode($user_info) }}'
            v-bind:highlights-prop="{{ json_encode($highlights) }}"
            v-bind:last-stories-prop='{{ json_encode($last_stories) }}' v-bind:posts-prop='{{ json_encode($posts) }}'
            v-bind:posts-statistics-prop='{{ json_encode($posts_statistics) }}' is-private-prop="" user-found-prop="1"
            need-to-parse-user-info-prop="" need-to-parse-user-last-stories-prop=""
            user-name-prop="{{ $user_info['username'] }}" need-to-parse-highlights-prop="" user-info-posts-lang="Posts"
            user-info-followers-lang="Followers" user-info-following-lang="Following"
            user-info-preloader-lang="Loading info about user"
            errors-user-was-not-found-lang="{{ $user_info['username'] }} was not found!"
            errors-account-is-private-lang="Account is private"
            errors-user-loading-lang="Profile was not found. Try refreshing the page!" tabs-stories-lang="Stories"
            tabs-posts-lang="Posts" tabs-highlights-lang="Highlights" tabs-statistics-lang="Statistics"
            need-to-show-statistics-tab-prop="1" stories-preloader-lang="Loading stories"
            stories-empty-last-stories-lang="There are no stories for 24 hours" popup-download-lang="Download"
            popup-close-lang="Close" popup-next-lang="Next" popup-prev-lang="Prev"
            highlights-preloader-lang="Loading stories" highlights-empty-lang="There are no highlights"
            show-post-comments-lang="Show comments" no-post-comments-lang="No comments" is-mobile-prop=""
            show-more-posts-lang="Show more" anon-user-view-lang="Anonymous view" is-user-from-ru-prop="1"
            locale-prop="en"></profile-page>

        <div class="row justify-content-center text-center"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center text-center mb-2 mt-1">
            <div class="col-11">
                <!-- Yandex.RTB R-A-1261276-6 -->
                <div id="yandex_rtb_R-A-1261276-6"></div>
            </div>
        </div>

        <div class="card mt-5 bg-dark text-white-50">
            <div class="card-body mb-3 p-5">
                <div class="row mt-2">
                    <h3>Profile overview for user {{ $user_info['username'] }}</h3>
                    <p class="mt-2">
                        {{ $profile }}
                    </p>
                </div>
                <hr />

                <div class="row mt-5">
                    <h3>Suggested hashtags for user {{ $user_info['username'] }}</h3>
                    <p class="mt-2">
                        {{ $hashtags }}
                    </p>
                </div>
                <hr />
            </div>
        </div>
    </div>

    <div class="container" id="statistics">
        <div class="row justify-content-center text-center mb-2 mt-1">
            <div class="card mt-4 bg-dark text-white-50">
                <div class="card-body mb-3 p-4">
                    <h3 class="mt-5 mb-4">
                        Dynamics of changing followers number for the last days
                    </h3>
                    <followers-statistics-chart :labels='{{ json_encode($followers_statistics_chart['labels']) }}'
                        :statistics='[{
                            "label": "Followers",
                            "data": {{ json_encode($followers_statistics_chart['data']) }},
                            "type": "line",
                            "backgroundColor": "rgba(60, 186, 159, 0.2)",
                            "borderColor": "#3cba9f"
                        }]'>
                    </followers-statistics-chart>

                    <h3 class="mt-5 mb-4">
                        Dynamics of changing followings number for the last days
                    </h3>
                    <following-statistics-chart :labels='{{ json_encode($following_statistics_chart['labels']) }}'
                        :statistics='[{
                            "label": "Following",
                            "data": {{ json_encode($following_statistics_chart['data']) }},
                            "type": "line",
                            "backgroundColor": "rgba(142, 94, 162, 0.2)",
                            "borderColor": "#8e5ea2"
                        }]'>
                    </following-statistics-chart>
                    <hr />

                    <h3 class="mt-5 mb-4">
                        Dynamics of changing posts number for the last days
                    </h3>
                    <posts-statistics-chart :labels='{{ json_encode($posts_statistics_chart['labels']) }}'
                        :statistics='[{
                            "label": "Medias",
                            "data": {{ json_encode($posts_statistics_chart['data']) }},
                            "type": "line",
                            "backgroundColor": "rgba(62, 149, 205, 0.2)",
                            "borderColor": "#3e95cd"
                        }]'>
                    </posts-statistics-chart>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lx-12 faq-wrapper mt-5">
                <div class="card bg-dark text-white-50">
                    <div class="card-body">
                        <div class="row justify-content-center mt-4">
                            <div class="col-xl-5 col-lg-8">
                                <div class="text-center">
                                    <h3>Frequently Asked Questions?</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4 mb-4">
                            <div class="col-9">
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified justify-content-center faq-tab-box"
                                    id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-genarel-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-genarel" type="button" role="tab"
                                            aria-controls="pills-genarel" aria-selected="true">
                                            <span class="font-size-16">General Questions</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-features-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-features" type="button" role="tab"
                                            aria-controls="pills-features" aria-selected="false">
                                            <span class="font-size-16">Features</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content pt-3" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-genarel" role="tabpanel"
                                        aria-labelledby="pills-genarel-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>
                                                    Is it necessary to have an Instagram account to
                                                    view other profiles?
                                                </h5>
                                                <p class="lg-base">
                                                    You do not need to have an account or create one
                                                    to view other profiles, simply enter the correct
                                                    username of the desired account. Keep in mind that
                                                    even a single incorrectly typed character could
                                                    lead you to the wrong profile.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    Which devices are compatible with your service?
                                                </h5>
                                                <p class="lg-base">
                                                    Our resource is accessible on any device with a
                                                    web browser and internet connection. Regardless of
                                                    whether you are using a personal computer, phone,
                                                    or tablet, you will be able to view the desired
                                                    profile.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>What is the cost of using your service?</h5>
                                                <p class="lg-base">
                                                    Our service is completely free and does not
                                                    require any form of verification, making it
                                                    convenient and easy to use. Simply visit the
                                                    website, enter the desired username and view the
                                                    information.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    What is the usage policy for materials downloaded
                                                    from Instagram?
                                                </h5>
                                                <p class="lg-base">
                                                    It is not recommended to use other people's
                                                    photos, videos, or stories as they are protected
                                                    by copyright. The materials can only be downloaded
                                                    for personal use and informational purposes. This
                                                    policy does not apply to materials that are
                                                    publicly available on the internet as they do not
                                                    have any intellectual property rights associated
                                                    with them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-features" role="tabpanel"
                                        aria-labelledby="pills-features-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>
                                                    What can I access or download using your online
                                                    resource?
                                                </h5>
                                                <p class="lg-base">
                                                    Users of our service have the ability to view or
                                                    save stories, highlights, and posts from public
                                                    Instagram accounts.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    Is it possible to download desired content
                                                    anonymously without leaving any trace?
                                                </h5>
                                                <p class="lg-base">
                                                    Users of InstaNavigation can easily download
                                                    stories, videos, photos, and more from public
                                                    Instagram profiles. It's important to confirm the
                                                    profile is public before downloading.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    What are the available download formats on
                                                    InstaNavigation?
                                                </h5>
                                                <p class="lg-base">
                                                    All videos, including stories, are available for
                                                    download in MP4 format. Photos and photo stories
                                                    can be downloaded in JPEG format. The quality of
                                                    the downloaded materials is identical to the
                                                    original, so you don't have to worry about any
                                                    loss of quality. Our service guarantees fast
                                                    downloads with no errors during file saving.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section mb-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading-section mb-5">Featured posts</h2>
                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/blogger/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}"
                                                target="_blank">Where you can find bloggers for account
                                                promotion</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/content-plan/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Interesting</span>
                                        <h3>
                                            <a href="{{ route('blog.interesting.id', ['id' => 'what-is-a-content-plan-of-stories-and-why-do-you-need-it']) }}"
                                                target="_blank">What is a content plan of stories and why do you
                                                need it</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/page-promotion/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'promotion-of-the-page-from-scratch']) }}"
                                                target="_blank">Promotion of the page from scratch</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/steps-to-start-blog/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}"
                                                target="_blank">How Do I Start Blogging on Instagram?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/processing-photo/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Interesting</span>
                                        <h3>
                                            <a href="{{ route('blog.interesting.id', ['id' => 'apps-and-services-for-processing-instagram-photos']) }}"
                                                target="_blank">Apps and Services for Processing Instagram
                                                Photos</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/how-to-make-pretty-profile-page/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'how-to-beautifully-design-your-instagram-page']) }}"
                                                target="_blank">How to Beautifully Design Your Instagram Page?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('npm/bootstrap.bundle.min.js') }}"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('OwlCarousel2/2.3.4/owl.carousel.min.js') }}"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/app.js?id=7e77ef9b8dd7a34695e0') }}"></script>
    <script src="{{ asset('assets/js/socialstory.js?v53') }}"></script>
    <script src="{{ asset('downloadjs/1.4.8/download.min.js') }}"
        integrity="sha512-WiGQZv8WpmQVRUFXZywo7pHIO0G/o3RyiAJZj8YXNN4AV7ReR1RYWVmZJ6y3H06blPcjJmG/sBpOVZjTSFFlzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const profileStories = document.querySelector(".profile-stories"),
            profilePublications = document.querySelector(".profile-publications"),
            profileHighlights = document.querySelector(".profile-highlights"),
            profileStoriesBtn = document.querySelector(".profile-stories__btn"),
            profileHighlightsBtn = document.querySelector(
                ".profile-highlights__btn"
            ),
            profilePublicationsBtn = document.querySelector(
                ".profile-publications__btn"
            );

        profileStoriesBtn.addEventListener("click", () => {
            profileStoriesBtn.classList.add("active_btn");
            profilePublicationsBtn.classList.remove("active_btn");
            profileHighlightsBtn.classList.remove("active_btn");
            profileStories.classList.remove("d-none");
            profilePublications.classList.add("d-none");
            profileHighlights.classList.add("d-none");
        });

        profilePublicationsBtn.addEventListener("click", () => {
            profileStoriesBtn.classList.remove("active_btn");
            profileHighlightsBtn.classList.remove("active_btn");
            profilePublicationsBtn.classList.add("active_btn");
            profileStories.classList.add("d-none");
            profileHighlights.classList.add("d-none");
            profilePublications.classList.remove("d-none");
        });

        profileHighlightsBtn.addEventListener("click", () => {
            profileHighlightsBtn.classList.add("active_btn");
            profileHighlights.classList.remove("d-none");

            profileStoriesBtn.classList.remove("active_btn");
            profileStories.classList.add("d-none");

            profilePublicationsBtn.classList.remove("active_btn");
            profilePublications.classList.add("d-none");
        });
    </script>

    <script>
        window.yaContextCb.push(() => {
            Ya.Context.AdvManager.render({
                blockId: "R-A-1261276-6",
                renderTo: "yandex_rtb_R-A-1261276-6",
            });
        });
    </script>

    <script>
        var carousel = function() {
            $(".featured-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 30,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                nav: true,
                dots: true,
                autoplayHoverPause: false,
                items: 1,
                navText: [
                    "<span class='ion-ios-arrow-back'></span>",
                    "<span class='ion-ios-arrow-forward'></span>",
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        };
        carousel();
    </script>
@endpush

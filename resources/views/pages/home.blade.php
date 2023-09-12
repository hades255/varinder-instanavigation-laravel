@extends('layouts.home')

@section('title', 'View Instagram stories anonymously - Instagram story viewer')

@section('content')

    <div>
        <div class="content-block-wrapper">
            <div class="advantages">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 m-auto text-center px-lg-4 position-relative advantages-title">
                            <h2 class="advantages__sub-title fw-semibold">
                                Anonymous story viewing on Instagram
                            </h2>
                            <p class="advantages__text">
                                Staying up to date on all events on Instagram while
                                maintaining anonymity has never been easier. InstaNavigation
                                offers a simple and free way to stay informed about events
                                on Instagram while keeping your identity private. The
                                service lets you follow a particular user without them being
                                aware of it, allowing you to stay updated on interesting
                                news and download relevant content as well.
                            </p>
                            <img loading="lazy" src="{{ asset('assets/img/png/cube.png') }}" alt="cube.png"
                                class="cube1 position-absolute" />
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 m-auto px-lg-4 position-relative advantages-title">
                            <h2 class="advantages__sub-title fw-semibold text-center">
                                Features of our resource
                            </h2>
                            <p class="advantages__text">
                                The main feature of our service is absolute and complete
                                anonymity. Want to watch Stories? Please do. Want to
                                download videos and photos? No problem. Want to see who left
                                likes and comments under posts? That information will also
                                be available.
                            </p>
                            <p class="advantages__text">
                                Another feature of InstaNavigation is that you don't need to
                                first log into your account, provide a password, and then
                                set up an anonymous mode to use the service. It's much
                                simpler, all you need to do is specify the user name of the
                                person you're interested in in a certain field. This is a
                                convenient and well-thought-out approach.
                            </p>
                            <p class="advantages__text">
                                On the one hand, it serves as an additional security
                                measure, as if you don't enter any data, you don't have to
                                worry about it being disclosed. On the other hand, it allows
                                users who are not registered on Instagram to also view
                                interesting pages on the social network.
                            </p>
                        </div>
                    </div>
                    <div class="row advantages-item text-center text-lg-start">
                        <div class="col-lg-5 col-12">
                            <p class="advantages__sub-title fw-semibold">
                                No account or registration required
                            </p>
                            <p class="advantages__text">
                                The service can be used by everyone. Not only do you not
                                need to have a profile on the social network, but you also
                                don't need to install any additional software. Everything
                                can be done through the browser page.
                            </p>
                        </div>
                        <div class="col-lg-7 ps-5 col-12 justify-content-center justify-content-lg-center mt-5 mt-lg-0">
                            <div class="ellipse">
                                <img loading="lazy" src="{{ asset('assets/img/png/e1.png') }}" alt=""
                                    class="e1" />
                                <img loading="lazy" src="{{ asset('assets/img/png/e2.png') }}" alt=""
                                    class="e2" />
                                <div class="ellipse-item">
                                    <img loading="lazy" src="{{ asset('assets/img/png/c1.png') }}" alt=""
                                        class="c1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row advantages-item d-flex flex-row-reverse justify-content-between text-center text-lg-start">
                        <div class="col-lg-6 col-12">
                            <p class="advantages__sub-title fw-semibold">
                                Nobody knows about your activity
                            </p>
                            <p class="advantages__text">
                                With InstaNavigation, you can do anything and keep an eye on
                                anyone. Our service makes your presence invisible to the
                                owners of other accounts.
                            </p>
                        </div>
                        <div
                            class="col-lg-6 ps-lg-5 col-12 d-flex justify-content-center justify-content-lg-center mt-5 mt-lg-0">
                            <div class="ellipse ellipse2">
                                <img loading="lazy" src="{{ asset('assets/img/png/e3.png') }}" alt=""
                                    class="e3" />
                                <img loading="lazy" src="{{ asset('assets/img/png/e4.png') }}" alt=""
                                    class="e4" />
                                <div class="ellipse-item">
                                    <img loading="lazy" src="{{ asset('assets/img/png/c2.png') }}" alt=""
                                        class="c1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row advantages-item text-center text-lg-start">
                        <div class="col-lg-5 col-12">
                            <p class="advantages__sub-title fw-semibold">
                                Ability to download content
                            </p>
                            <p class="advantages__text">
                                With InstaNavigation, not only can you view the content, but
                                you can also save it. It doesn't matter what device you are
                                using. You can save photos and videos in high quality,
                                whether on a smartphone or tablet or a laptop or computer.
                                Now you don't have to worry about not being able to save
                                something important.
                            </p>
                        </div>
                        <div class="col-lg-7 ps-lg-5 col-12 mt-5 mt-lg-0">
                            <div class="ellipse ellipse3">
                                <img loading="lazy" src="{{ asset('assets/img/png/e5.png') }}" alt=""
                                    class="e5" />
                                <img loading="lazy" src="{{ asset('assets/img/png/e6.png') }}" alt=""
                                    class="e6" />
                                <img loading="lazy" src="{{ asset('assets/img/png/e7.png') }}" alt=""
                                    class="e7" />
                                <div class="ellipse-item camera">
                                    <img loading="lazy" src="{{ asset('assets/img/png/c4.png') }}" alt=""
                                        class="c4" />
                                </div>
                                <div class="ellipse-item media">
                                    <img loading="lazy" src="{{ asset('assets/img/png/c3.png') }}" alt=""
                                        class="c3" />
                                </div>
                                <div class="ellipse-item save">
                                    <img loading="lazy" src="{{ asset('assets/img/png/c5.png') }}" alt=""
                                        class="c3" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End advantages -->
            <div class="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="faq__title">FAQ</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <ul class="faq-item">
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        Which specific content allows you to view and download
                                        on your service?
                                    </h4>
                                    <div class="faq-list-info">
                                        Any of the users of our service have access to
                                        publications, highlights, and stories. It is important
                                        to note that the profile you want to view must be
                                        public, as otherwise, our service will not have access
                                        to these pages.
                                    </div>
                                </li>
                                <li class="faq-list activeFaq">
                                    <h4 class="faq-list__title">
                                        Will you need to create a separate account to view
                                        profiles?
                                    </h4>
                                    <div class="faq-list-info">
                                        In order to view other accounts through the
                                        InstaNavigation service, it is not necessary to enter
                                        data about your real profile or register specifically.
                                        All that is required of the user is to indicate the
                                        nickname of the person of interest. It is very important
                                        to pay attention to that the data is entered correctly.
                                        Even the most insignificant error can cause you to end
                                        up on the wrong user's page or even encounter an error,
                                        since such a nickname does not exist.
                                    </div>
                                </li>
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        Which devices can use the service? Are there any
                                        limitations?
                                    </h4>
                                    <div class="faq-list-info">
                                        InstaNavigation can be used on any device without any
                                        restrictions. The only condition is the presence of any
                                        internet browser on the gadget, as well as access to the
                                        internet. We can guarantee that you will have access to
                                        view and download from both a laptop and a tablet and a
                                        phone. It doesn't matter what device you use.
                                    </div>
                                </li>
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        Do the anonymity conditions apply when photos or videos
                                        are not only viewed but also downloaded?
                                    </h4>
                                    <div class="faq-list-info">
                                        Yes, you can download anything that you like, and don't
                                        worry about the profile owner finding out that you are
                                        downloading their content. But before you do so, you
                                        should check if the necessary account is open for all
                                        users. Unfortunately, you won't be able to download
                                        anything from a private account.
                                    </div>
                                </li>
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        How much will using the service cost?
                                    </h4>
                                    <div class="faq-list-info">
                                        When using InstaNavigation, you don't have to worry
                                        about it being too expensive. Our project offers all
                                        services for free. Additionally, there is no need to go
                                        through verification on the website before starting to
                                        use it. All you need to do is correctly enter your
                                        username. This way, you can save time and avoid
                                        unnecessary registration.
                                    </div>
                                </li>
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        Can you use the downloaded photos and videos after
                                        downloading them?
                                    </h4>
                                    <div class="faq-list-info">
                                        The right of ownership for content belongs to its owner.
                                        Therefore, subsequent use of such stories, videos, and
                                        photos is highly undesirable. All of this information
                                        can be downloaded for one purpose only – for informative
                                        purposes. However, it should also be noted that there
                                        are exceptions. These rules do not apply to content that
                                        is already presented in open access on the internet.
                                    </div>
                                </li>
                                <li class="faq-list">
                                    <h4 class="faq-list__title">
                                        In what format can you download content?
                                    </h4>
                                    <div class="faq-list-info">
                                        InstaNavigation is compatible with two formats, JPEG for
                                        photos and MP4 for videos. All content is downloaded in
                                        the highest quality. The final quality of the downloaded
                                        content is directly dependent on the source. Therefore,
                                        if the original material is of high quality, the
                                        downloaded content will also be of high quality.
                                        However, the opposite is also true. Our service provides
                                        the fastest possible download, due to the fact that it
                                        is done at the highest speed, eliminating the
                                        possibility of errors during the saving process.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End FAQ -->
        </div>
        <div class="popular">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="popular__title text-white-50">Popular posts</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="popular-card">
                            <div class="popular-card-img">
                                <a href="{{ route('blog.instructions.id', ['id' => 'how-to-design-a-profile-header-on-instagram']) }}"
                                    class="popular-card-img-head">Instructions</a>
                                <img class="card-img-top lazy" alt="How to design a profile header on Instagram"
                                    data-src="images/blog/how-to-design-a-profile-header-on-instagram/main.jpg"
                                    src="{{ asset('images/lazy.jpg') }}" data-holder-rendered="true" />
                            </div>
                            <a href="{{ route('blog.instructions.id', ['id' => 'how-to-design-a-profile-header-on-instagram']) }}"
                                class="popular-card__title">How to design a profile header on Instagram</a>
                            <p class="popular-card__text">
                                If the profile header is incorrectly designed, you can lose
                                potential subscribers. Whether you use targeted advertising
                                or advertise with bloggers, fewer people will subscribe to
                                you if the header is incom
                            </p>
                            <p class="popular-card__time">06 February 2022 15:09</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="popular-card">
                            <div class="popular-card-img">
                                <a href="{{ route('blog.interesting.id', ['id' => 'new-instagram-rules']) }}"
                                    class="popular-card-img-head">Interesting</a>
                                <img class="card-img-top lazy" alt="New Instagram Rules"
                                    data-src="images/blog/new-instagram-rules/main.jpg"
                                    src="{{ asset('images/lazy.jpg') }}" data-holder-rendered="true" />
                            </div>
                            <a href="{{ route('blog.interesting.id', ['id' => 'new-instagram-rules']) }}"
                                class="popular-card__title">New Instagram
                                Rules</a>
                            <p class="popular-card__text">
                                In social networks, there is always a section that describes
                                the rules of conduct on the platform. On Instagram, the
                                developers also made requirements for users. Often users do
                                not even open this section, and then they...
                            </p>
                            <p class="popular-card__time">06 February 2022 15:06</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="popular-card">
                            <div class="popular-card-img">
                                <a href="{{ route('blog.instructions.id', ['id' => 'how-to-increase-followers-reach-and-interest']) }}"
                                    class="popular-card-img-head">Instructions</a>
                                <img class="card-img-top lazy" alt="How to Increase Followers&#039; Reach and Interest"
                                    data-src="images/blog/increase-subscribers/main.jpg"
                                    src="{{ asset('images/lazy.jpg') }}" data-holder-rendered="true" />
                            </div>
                            <a href="{{ route('blog.instructions.id', ['id' => 'how-to-increase-followers-reach-and-interest']) }}"
                                class="popular-card__title">How to Increase Followers' Reach and Interest</a>
                            <p class="popular-card__text">
                                Since Instagram introduced new features and rules, promoting
                                profiles has become a difficult action. Coverage has become
                                much lower, and followers have little engagement with
                                content. Almost every blogger
                            </p>
                            <p class="popular-card__time">27 January 2022 18:43</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

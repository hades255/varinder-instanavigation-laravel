@extends('layouts.app')

@section('title', 'View Instagram stories anonymously - Instagram story viewer')

@section('content')

    <div class="container blog-wrapper mb-4">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Useful articles
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mt-4 mb-3">
            <div class="col-12">
                <h1>Useful articles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="myTab" role="tablist" class="nav nav-tabs mb-3">
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog') }}" role="tab" aria-selected="true" class="nav-link active">Main</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.interesting') }}" role="tab" aria-selected="true"
                            class="nav-link">Interesting</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.instructions') }}" role="tab" aria-selected="true"
                            class="nav-link">Instructions</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.tips') }}" role="tab" aria-selected="true" class="nav-link">Tips</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'how-to-beautifully-design-your-instagram-page']) }}">
                        <img class="card-img-top" alt="How to Beautifully Design Your Instagram Page?"
                            src="{{ asset('images/blog/how-to-make-pretty-profile-page/main.jpg') }}"
                            data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">16 January 2022 18:29</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'how-to-beautifully-design-your-instagram-page']) }}">
                                How to
                                Beautifully
                                Design Your Instagram Page?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            If a blogger's page is designed ugly, unattractive, and
                            uninteresting, then this will not bring you success. The
                            potential target audience will not be interested in the p...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'why-instagram-can-delete-an-account']) }}">
                        <img class="card-img-top" alt="Why Instagram Can Delete an Account?"
                            src="{{ asset('images/blog/account-was-compromised/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">16 January 2022 08:04</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'why-instagram-can-delete-an-account']) }}">Why
                                Instagram Can Delete an
                                Account?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Negative points also take place in addition to positive
                            aspects in the development of an Instagram account. This
                            social network can permanently block a profile for violat...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.instructions.id', ['id' => 'where-can-i-get-ideas-for-content']) }}">
                        <img class="card-img-top" alt="Where Can I Get Ideas for Content?"
                            src="{{ asset('images/blog/ideas-for-content/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">16 January 2022 09:25</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'where-can-i-get-ideas-for-content']) }}">Where
                                Can I Get Ideas for
                                Content?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            All Instagram users are on the social network to look at
                            beautiful pictures and read interesting posts. Therefore, the
                            design of your content should be of high quality....
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a
                        href="{{ route('blog.interesting.id', ['id' => 'apps-and-services-for-processing-instagram-photos']) }}">
                        <img class="card-img-top" alt="Apps and Services for Processing Instagram Photos"
                            src="{{ asset('images/blog/processing-photo/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">17 January 2022 13:28</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'apps-and-services-for-processing-instagram-photos']) }}">Apps
                                and
                                Services for Processing Instagram Photos</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Currently, it's difficult for us to imagine an Instagram
                            account that does not have processed photos. Previously, we
                            needed to contact specialists or independently learn...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}">
                        <img class="card-img-top" alt="How Do I Start Blogging on Instagram?"
                            src="{{ asset('images/blog/steps-to-start-blog/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">17 January 2022 19:47</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}">How
                                Do
                                I Start Blogging on
                                Instagram?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Everyone knows that now Instagram takes the leading place
                            among all social networks in terms of popularity. The number
                            of users increases daily by several hundred thousan...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'analysis-of-competitors-accounts']) }}">
                        <img class="card-img-top" alt="Analysis of competitors’ accounts"
                            src="{{ asset('images/blog/competitor-analysis/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">18 January 2022 21:58</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'analysis-of-competitors-accounts']) }}">Analysis
                                of competitors’
                                accounts</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Analyzing your competitors' pages is an essential part of
                            promoting your account. It is the analysis that will allow you
                            to learn what subscribers are interested in, what...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'effective-audit-of-the-account']) }}">
                        <img class="card-img-top" alt="Effective audit of the account"
                            src="{{ asset('images/blog/page-audit/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">18 January 2022 13:07</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'effective-audit-of-the-account']) }}">Effective
                                audit of the
                                account</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Marketers recommend that businesses should be reviewed on a
                            regular basis. An Instagram account is no exception. It also
                            requires checking, analyzing, identifying errors...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'promotion-of-the-page-from-scratch']) }}">
                        <img class="card-img-top" alt="Promotion of the page from scratch"
                            src="{{ asset('images/blog/page-promotion/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">18 January 2022 15:26</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'promotion-of-the-page-from-scratch']) }}">Promotion
                                of the page from
                                scratch</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            With the idea of starting a blog appear different fears. One
                            creates an account, arranges everything beautifully, and the
                            user starts waiting anxiously for the followers...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a
                        href="{{ route('blog.interesting.id', ['id' => 'what-is-a-content-plan-of-stories-and-why-do-you-need-it']) }}">
                        <img class="card-img-top" alt="What is a content plan of stories and why do you need it"
                            src="{{ asset('images/blog/content-plan/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">20 January 2022 19:25</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'what-is-a-content-plan-of-stories-and-why-do-you-need-it']) }}">What
                                is a content plan of stories and why do you need it</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Account promotion on Instagram without a content plan is
                            almost impossible. A blog might be regularly filled with
                            posts, it might be arranged prettily, yet the statistics...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.instructions.id', ['id' => 'how-to-write-engaging-posts-in-the-right-way']) }}">
                        <img class="card-img-top" alt="How to write engaging posts in the right way"
                            src="{{ asset('images/blog/write-interesting-posts/main.jpg') }}"
                            data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">20 January 2022 23:50</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-write-engaging-posts-in-the-right-way']) }}">How
                                to write
                                engaging posts in the right way</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Posts in any blog and commercial account should be accompanied
                            by text. It contributes to the attraction and engagement of
                            followers. However, on Instagram users can only...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'why-do-we-need-instagram']) }}">
                        <img class="card-img-top" alt="Why do we need Instagram?"
                            src="{{ asset('images/blog/instagram-purpose/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">22 January 2022 14:13</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'why-do-we-need-instagram']) }}">Why do
                                we need Instagram?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            The history of the Instagram social network begins back in
                            2010. The founders were two men from America. For the first
                            time, the application appeared in its simplest form...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}">
                        <img class="card-img-top" alt="Where you can find bloggers for account promotion"
                            src="{{ asset('images/blog/blogger/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">22 January 2022 14:30</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}">Where
                                you can find
                                bloggers for account promotion</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Often, when the promoting an Instagram page is underway, many
                            problems are rising along the way. One of the pressing
                            problems is finding bloggers to buy advertising. Afte...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'should-you-use-reels-to-promote-your-blog']) }}">
                        <img class="card-img-top" alt="Should you use Reels to promote your blog?"
                            src="{{ asset('images/blog/instagram-reels/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">24 January 2022 13:02</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'should-you-use-reels-to-promote-your-blog']) }}">Should
                                you use Reels
                                to promote your blog?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Reels is a relatively recent feature of Instagram, which
                            allows people to post short videos to the network to be seen
                            not only by subscribers of the account, but also by...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a
                        href="{{ route('blog.instructions.id', ['id' => 'what-to-do-if-your-instagram-account-is-blocked']) }}">
                        <img class="card-img-top" alt="What to do if your Instagram account is blocked?"
                            src="{{ asset('images/blog/to-do-to-unlock-account/main.jpg') }}"
                            data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">24 January 2022 13:10</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'what-to-do-if-your-instagram-account-is-blocked']) }}">What
                                to do if
                                your Instagram account is blocked?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            The biggest fear of any blogger is to be blocked by the
                            administration of Instagram and lose their account forever. At
                            the moment this happens quite often. In this case,...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.instructions.id', ['id' => 'how-to-increase-followers-reach-and-interest']) }}">
                        <img class="card-img-top" alt="How to Increase Followers&#039; Reach and Interest"
                            src="{{ asset('images/blog/increase-subscribers/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">27 January 2022 18:43</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-increase-followers-reach-and-interest']) }}">How
                                to Increase
                                Followers' Reach and Interest</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Since Instagram introduced new features and rules, promoting
                            profiles has become a difficult action. Coverage has become
                            much lower, and followers have little engagement...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'new-instagram-rules']) }}">
                        <img class="card-img-top" alt="New Instagram Rules"
                            src="{{ asset('images/blog/new-instagram-rules/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">06 February 2022 15:06</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'new-instagram-rules']) }}">New
                                Instagram Rules</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            In social networks, there is always a section that describes
                            the rules of conduct on the platform. On Instagram, the
                            developers also made requirements for users. Often u...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.instructions.id', ['id' => 'how-to-design-a-profile-header-on-instagram']) }}">
                        <img class="card-img-top" alt="How to design a profile header on Instagram"
                            src="{{ asset('images/blog/how-to-design-') }}a-profile-header-on-instagram/main.jpg"
                            data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">06 February 2022 15:09</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-design-a-profile-header-on-instagram']) }}">How
                                to design a
                                profile header on Instagram</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            If the profile header is incorrectly designed, you can lose
                            potential subscribers. Whether you use targeted advertising or
                            advertise with bloggers, fewer people will subs...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

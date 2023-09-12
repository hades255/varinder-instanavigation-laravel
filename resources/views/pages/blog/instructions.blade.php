@extends('layouts.app')

@section('title', 'InstaNavigation blog - Useful instructions about Instagram')

@section('content')

    <div class="container blog-wrapper mb-4">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Main</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Instructions
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-12">
                <h1>Instructions</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul id="myTab" role="tablist" class="nav nav-tabs-custom mb-3">
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog') }}" role="tab" aria-selected="true" class="nav-link">Main</a>
                    </li>

                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.interesting') }}" role="tab" aria-selected="true"
                            class="nav-link">Interesting</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.instructions') }}" role="tab" aria-selected="true"
                            class="nav-link active">Instructions</a>
                    </li>
                    <li role="{{ route('blog.tips') }}" class="nav-item">
                        <a href="tips" role="tab" aria-selected="true" class="nav-link">Tips</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
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
                            beautiful pictures and read interesting posts.
                            Therefore, the design of your content should be of high
                            quality. You need t...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.instructions.id', ['id' => 'how-to-write-engaging-posts-in-the-right-way']) }}">
                        <img class="card-img-top" alt="How to write engaging posts in the right way"
                            src="{{ asset('images/blog/write-interesting-posts/main.jpg') }}" data-holder-rendered="true" />
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Instructions</strong>
                        <div class="mb-1 text-muted">20 January 2022 23:50</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-write-engaging-posts-in-the-right-way']) }}">How
                                to write engaging
                                posts in the right way</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Posts in any blog and commercial account should be
                            accompanied by text. It contributes to the attraction
                            and engagement of followers. However, on Instagram users
                            can only edit pict...
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
                                to do if your
                                Instagram account is blocked?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            The biggest fear of any blogger is to be blocked by the
                            administration of Instagram and lose their account
                            forever. At the moment this happens quite often. In this
                            case, the social...
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
                                Followers&#039; Reach and
                                Interest</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Since Instagram introduced new features and rules,
                            promoting profiles has become a difficult action.
                            Coverage has become much lower, and followers have
                            little engagement with conte...
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
                            If the profile header is incorrectly designed, you can
                            lose potential subscribers. Whether you use targeted
                            advertising or advertise with bloggers, fewer people
                            will subscribe to y...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

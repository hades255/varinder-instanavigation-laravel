@extends('layouts.app')

@section('title', 'InstaNavigation blog - Tips how to make Instagram features better')

@section('content')

    <div class="container blog-wrapper mb-4">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tips</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-12">
                <h1>Tips</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul id="myTab" role="tablist" class="nav nav-tabs mb-3">
                    <li role="presentation" class="nav-item"><a href="{{ route('blog') }}" role="tab"
                            aria-selected="true" class="nav-link">Main</a></li>

                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.interesting') }}" role="tab" aria-selected="true"
                            class="nav-link">Interesting</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.instructions') }}" role="tab" aria-selected="true"
                            class="nav-link">Instructions</a>
                    </li>
                    <li role="{{ route('blog.tips') }}" class="nav-item">
                        <a href="tips" role="tab" aria-selected="true" class="nav-link active">Tips</a>
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
                            data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">16 January 2022 18:29</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'how-to-beautifully-design-your-instagram-page']) }}">How
                                to Beautifully
                                Design Your Instagram Page?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            If a blogger&#039;s page is designed ugly, unattractive, and uninteresting, then this
                            will not bring you success. The potential target audience will not be interested in the
                            profile, an...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}">
                        <img class="card-img-top" alt="How Do I Start Blogging on Instagram?"
                            src="{{ asset('images/blog/steps-to-start-blog/main.jpg') }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">17 January 2022 19:47</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}">How Do I
                                Start Blogging on
                                Instagram?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Everyone knows that now Instagram takes the leading place among all social networks in
                            terms of popularity. The number of users increases daily by several hundred thousand.
                            You mig...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'promotion-of-the-page-from-scratch']) }}">
                        <img class="card-img-top" alt="Promotion of the page from scratch"
                            src="{{ asset('images/blog/page-promotion/main.jpg') }}" data-holder-rendered="true">
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
                            With the idea of starting a blog appear different fears. One creates an account,
                            arranges everything beautifully, and the user starts waiting anxiously for the followers
                            to appear,...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}">
                        <img class="card-img-top" alt="Where you can find bloggers for account promotion"
                            src="{{ asset('images/blog/blogger/main.jpg') }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Tips</strong>
                        <div class="mb-1 text-muted">22 January 2022 14:30</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}">Where
                                you can
                                find bloggers for account promotion</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Often, when the promoting an Instagram page is underway, many problems are rising along
                            the way. One of the pressing problems is finding bloggers to buy advertising. After all,
                            man...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

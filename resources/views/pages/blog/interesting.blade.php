@extends('layouts.app')

@section('title', 'InstaNavigation blog - Interesting articles about Instagram features')

@push('style')
    <style>
        .card {
            border: 0;
            border-radius: 5%;
            box-shadow: 1px 1px 5px #555;
        }

        .card-body {
            background-color: #0a0a0a;
        }

        .post-header {
            color: #666 !important;
        }
    </style>
@endpush
@section('content')

    <div class="container blog-wrapper mb-4">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Interesting</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            <div class="col-12">
                <h1>Interesting</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul id="myTab" role="tablist" class="nav nav-tabs-custom mb-3">
                    <li role="presentation" class="nav-item"><a href="{{ route('blog') }}" role="tab"
                            aria-selected="true" class="nav-link">Main</a></li>

                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.interesting') }}" role="tab" aria-selected="true"
                            class="nav-link active">Interesting</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="{{ route('blog.instructions') }}" role="tab" aria-selected="true"
                            class="nav-link">Instructions</a>
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
                    <a href="{{ route('blog.interesting.id', ['id' => 'why-instagram-can-delete-an-account']) }}">
                        <img class="card-img-top" alt="Why Instagram Can Delete an Account?"
                            src="{{ asset('images/blog/account-was-compromised/main.jpg') }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">16 January 2022 08:04</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'why-instagram-can-delete-an-account']) }}">Why
                                Instagram Can
                                Delete an Account?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Negative points also take place in addition to positive aspects in the development of an
                            Instagram account. This social network can permanently block a profile for violations of
                            th...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a
                        href="{{ route('blog.interesting.id', ['id' => 'apps-and-services-for-processing-instagram-photos']) }}">
                        <img class="card-img-top" alt="Apps and Services for Processing Instagram Photos"
                            src="{{ asset('images/blog/processing-photo/main.jpg') }}" data-holder-rendered="true">
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
                            Currently, it&#039;s difficult for us to imagine an Instagram account that does not have
                            processed photos. Previously, we needed to contact specialists or independently learn
                            how to pro...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'analysis-of-competitors-accounts']) }}">
                        <img class="card-img-top" alt="Analysis of competitors’ accounts"
                            src="{{ asset('images/blog/competitor-analysis/main.jpg') }}" data-holder-rendered="true">
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
                            Analyzing your competitors&#039; pages is an essential part of promoting your account.
                            It is the analysis that will allow you to learn what subscribers are interested in, what
                            new trend...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'effective-audit-of-the-account']) }}">
                        <img class="card-img-top" alt="Effective audit of the account"
                            src="{{ asset('images/blog/page-audit/main.jpg') }}" data-holder-rendered="true">
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
                            Marketers recommend that businesses should be reviewed on a regular basis. An Instagram
                            account is no exception. It also requires checking, analyzing, identifying errors in
                            content...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a
                        href="{{ route('blog.interesting.id', ['id' => 'what-is-a-content-plan-of-stories-and-why-do-you-need-it']) }}">
                        <img class="card-img-top" alt="What is a content plan of stories and why do you need it"
                            src="{{ asset('images/blog/content-plan/main.jpg') }}" data-holder-rendered="true">
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
                            Account promotion on Instagram without a content plan is almost impossible. A blog might
                            be regularly filled with posts, it might be arranged prettily, yet the statistics of its
                            de...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'why-do-we-need-instagram']) }}">
                        <img class="card-img-top" alt="Why do we need Instagram?"
                            src="{{ asset('images/blog/instagram-purpose/main.jpg') }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">22 January 2022 14:13</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'why-do-we-need-instagram']) }}">Why
                                do we need Instagram?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            The history of the Instagram social network begins back in 2010. The founders were two
                            men from America. For the first time, the application appeared in its simplest form only
                            for...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'should-you-use-reels-to-promote-your-blog']) }}">
                        <img class="card-img-top" alt="Should you use Reels to promote your blog?"
                            src="{{ asset('images/blog/instagram-reels/main.jpg') }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Interesting</strong>
                        <div class="mb-1 text-muted">24 January 2022 13:02</div>
                        <h4 class="mt-2 post-title">
                            <a class="text-dark post-header"
                                href="{{ route('blog.interesting.id', ['id' => 'should-you-use-reels-to-promote-your-blog']) }}">Should
                                you use
                                Reels to promote your blog?</a>
                        </h4>
                        <p class="card-text short-description mb-auto">
                            Reels is a relatively recent feature of Instagram, which allows people to post short
                            videos to the network to be seen not only by subscribers of the account, but also by
                            other netw...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('blog.interesting.id', ['id' => 'new-instagram-rules']) }}">
                        <img class="card-img-top" alt="New Instagram Rules"
                            src="{{ asset('images/blog/new-instagram-rules/main.jpg') }}" data-holder-rendered="true">
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
                            In social networks, there is always a section that describes the rules of conduct on the
                            platform. On Instagram, the developers also made requirements for users. Often users do
                            no...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

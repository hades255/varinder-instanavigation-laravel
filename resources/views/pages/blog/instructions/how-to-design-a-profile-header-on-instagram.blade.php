@extends('layouts.app')

@section('title', 'How to design a profile header on Instagram')

@section('content')

    <div class="container post-wrapper mb-5">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Main</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a
                                href="{{ route('blog.instructions') }}">Instructions</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">How to design a profile header on
                            Instagram</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="mb-2">06 February 2022 15:09</div>

                <h1 class="pb-3 mb-4 border-bottom">
                    How to design a profile header on Instagram
                </h1>
                <img src="{{ asset('images/blog/how-to-design-a-profile-header-on-instagram/main.jpg') }}"
                    alt="How to design a profile header on Instagram" class="post-main-picture">
            </div>
        </div>

        <div class="row content mt-3">
            <div class="col-md-8 blog-main">
                <div class="blog-post">

                    <p>
                        If the profile header is incorrectly designed, you can lose potential subscribers. Whether
                        you
                        use targeted advertising or advertise with bloggers, fewer people will subscribe to you if
                        the
                        header is incomprehensible or empty. Therefore, in the article, we will analyze how to
                        design a
                        header on Instagram and what it is for.
                    </p>

                    <h2>
                        How to style your profile header on Instagram
                    </h2>

                    <p>When a user visits your page and reads your profile, the first thing they look at is the
                        header.
                        Through it, he will learn what your blog is about, what value you can give, and why to
                        subscribe
                        to
                        you. If nothing is clear, then the person will close the profile and will not go to the
                        posts.</p>
                    <p>If you filled out the header but did it wrong, then the interest of a potential subscriber
                        will
                        be
                        weak. And it is unlikely that he will scroll through the profile further.</p>
                    <p>Let's first look at how to edit the description in the account.</p>
                    <p>Go to Instagram and open your profile, in it click on the "Edit profile" button</p>

                    <h3>How to make an Instagram profile header</h3>
                    <p>Go to the Bio line and click on the box next to it. When the input field appears, enter basic
                        information about yourself and the brand - do not exceed the limit of 150 characters.</p>
                    <h3>How to write an Instagram profile header</h3>
                    <p>When completed, click on the checkmark in the corner and save the text. Click the checkmark
                        again
                        to
                        save your settings.
                    </p>


                    <h2 class="mt-4">How to use the "Website" string</h2>

                    <div class="row">
                        <div class="col-12 mb-3 mt-2">
                            <img src="{{ asset('images/blog/how-to-design-a-profile-header-on-instagram/profile-header.jpg') }}"
                                class="post-image-on-full-width" alt="">
                        </div>
                    </div>

                    <p>
                        In the Website line, you specify your website or messenger. Usually, it is located directly
                        under the header block. If you don’t see it in the section settings, then you need to make a
                        business page on Instagram. For this:
                    </p>

                    <ul>
                        <li>Log in to your account and tap on the three boxes in the right corner of the page;</li>
                        <li>Go to settings;</li>
                        <li>Click on "Account", then on "Switch to a professional account";</li>
                        <li>Tap on "Business";</li>
                        <li>If everything is in order, then you can switch to a business profile. To complete the
                            procedure, click on "continue" several times;
                        <li>Then indicate which category your business is in and click on "Next".</li>
                    </ul>

                    <p>If you linked your Facebook account to Instagram, you can finish and add the site under the
                        header.
                        If not, then you will first have to link the profile.</p>
                    <p>
                        So, now you need to add a website or another link to the required messenger or resource. To
                        do
                        this,
                        again go to the "Edit profile" menu and go down. In the required window from sites, specify
                        the
                        link
                        and save the settings.
                    </p>
                </div>

            </div>

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3">
                    <p><strong>Similar posts</strong></p>
                    <ol class="list-unstyled mb-0">
                        <li>
                            <a href="{{ route('blog.instructions.id', ['id' => 'where-can-i-get-ideas-for-content']) }}">Where
                                Can I Get Ideas for Content?</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-write-engaging-posts-in-the-right-way']) }}">How
                                to write engaging posts
                                in the right way</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('blog.instructions.id', ['id' => 'what-to-do-if-your-instagram-account-is-blocked']) }}">What
                                to do if your
                                Instagram account is blocked?</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('blog.instructions.id', ['id' => 'how-to-increase-followers-reach-and-interest']) }}">How
                                to Increase
                                Followers&#039; Reach and Interest</a>
                        </li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div>
    </div>
@endsection

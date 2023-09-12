@extends('layouts.app')

@section('title', 'How Do I Start Blogging on Instagram')

@section('content')

    <div class="container post-wrapper mb-5">
        <div class="row">
            <div class="col-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Main</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('blog.tips') }}">Tips</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">How Do I Start Blogging on
                            Instagram?</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="mb-2">17 January 2022 19:47</div>

                <h1 class="pb-3 mb-4 border-bottom">
                    How Do I Start Blogging on Instagram?
                </h1>
                <img src="{{ asset('images/blog/steps-to-start-blog/main.jpg') }}"
                    alt="How Do I Start Blogging on Instagram?" class="post-main-picture">
            </div>
        </div>

        <div class="row content mt-3">
            <div class="col-md-8 blog-main">
                <div class="blog-post">

                    <p>Everyone knows that now Instagram takes the leading place among all social networks in terms
                        of
                        popularity. The number of users increases daily by several hundred thousand.
                    </p>
                    <p>
                        You might think it's too late to register your Instagram account, promote it, gain followers
                        and
                        make money. But this is a misconception. In this article, we will familiarize ourselves with
                        the
                        basics of blogging on Instagram in order to start successfully developing on this social
                        network.
                    </p>

                    <h2 class="mt-4">Filling in the profile header</h2>

                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <p>After completing the simplest registration, Instagram will offer you to fill out a
                                profile.
                                In this social network, it's called Header. It's located just below the main page
                                photo
                                and
                                acts as a «summary» of the blog.</p>
                            <p>
                                The profile header is the business card of the page. First of all, subscribers pay
                                attention
                                to it, and only then to the page. Therefore, you need to know how to properly design
                                it.
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-12 text-center">
                            <img src="{{ asset('images/blog/steps-to-start-blog/profile-header.jpg') }}"
                                class="in-post-image" alt="">
                        </div>
                    </div>

                    <ol>
                        <li>Nickname of your page. The name of your blog, brand and store on your Instagram account
                            should be light, memorable and simple. Subscribers will find a page on a social network
                            by
                            nickname.
                            We recommend using the following tips:
                            <ul>
                                <li>don't use numbers if they are not included in the name of your store or brand;
                                </li>
                                <li>don't include a nickname with a large number of characters (points or
                                    underscores);
                                </li>
                                <li>don't alternate capital letters with other letters (for example, InStAgRaM),
                                    since
                                    this doesn't attract attention, but on the contrary repels;
                                </li>
                                <li>if the page was created for an online store, then indicate the purpose in the
                                    nickname
                                    (that is, write the word «Shop»).
                                </li>
                            </ul>
                        </li>

                        <li>
                            The main photo of the page is an avatar. If the blog is personal, then the blogger's
                            face
                            should be clearly visible in the photo. If the page was created for a store, then a logo
                            or
                            a picture associated with this store is placed on the avatar. Some users set a photo of
                            the
                            product being sold. Thus, you can interest subscribers, and they will definitely look at
                            the
                            page.
                            You need to consider some nuances before choosing a photo for your avatar:
                            <ul>
                                <li>the best photo size is 150x150;</li>
                                <li>if the photo contains inscriptions, then use large fonts;</li>
                                <li>choose contrasting shades in relation to the white background;</li>
                                <li>the main photo of the page must be framed in the same style as the account
                                    visual.
                                </li>
                            </ul>
                        </li>

                        <li>
                            Description is the transfer of the essence of the page's existence in 2-3 sentences.
                            Keep
                            your description short but clear and interesting.
                            <ul>
                                <li>In the «Profile name» block, write the basis for the target audience. A few
                                    words,
                                    after which subscribers will immediately understand whether this account suits
                                    them
                                    according to their interests.
                                </li>
                                <li>In the «About Me» section, write some engaging facts about an individual (if
                                    it's a
                                    personal blog) or about a brand/store (if it's a commercial account). The
                                    sentences
                                    should be short, but very interesting to the target audience.
                                </li>
                            </ul>
                        </li>
                    </ol>

                    <h2>Writing posts</h2>

                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <p>You need to publish literate, readable, and interesting texts in order to get success
                                from
                                your published post, and so that people pay attention to it.
                            </p>
                            <p>
                                Here are some of the main points for writing posts:
                            </p>
                            <ul>
                                <li>The text should be useful for subscribers;</li>
                                <li>The topic of the post should be combined with the main purpose of blogging (if
                                    you
                                    have
                                    a culinary blog, then the posts should be about cuisine, food, and so on);
                                </li>
                                <li>Subscribers must trust the account, so back up the texts with knowledge from
                                    various
                                    sources (personal experience, information from books, etc.);
                                </li>
                                <li>The events described in the post must be up-to-date;</li>
                                <li>Make your texts emotional, and you have a better chance of getting your
                                    followers
                                    interested or encouraging them to buy.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12 text-center">
                            <img src="{{ asset('images/blog/steps-to-start-blog/instagram-post.jpg') }}"
                                class="in-post-image" alt="">
                        </div>
                    </div>

                    <h2>The feed and its visual</h2>

                    <div class="row">
                        <div class="col-md-4 col-sm-12 text-center">
                            <img src="{{ asset('images/blog/steps-to-start-blog/instagram-lenta.jpg') }}"
                                class="in-post-image" alt="">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p>When people visit Instagram profiles, they pay attention not only to individual
                                posts,
                                but
                                also to the overall design of the account. Therefore, a beautifully and
                                aesthetically
                                designed feed visual plays an important role in the development of the page.</p>
                            <p>First, you need to choose one shade, which will become the main one for your account.
                                Posts,
                                videos, main photo and relevant stories should be combined and have a common shade.
                            </p>
                            <p>The initial goal of creating Instagram is to create a social network for posting
                                photos.
                                At
                                the moment, people are posting both videos and photos. Therefore, the picture
                                quality
                                must
                                be high. Sometimes the beauty of the photo matters more than the text in the post
                                itself.</p>
                        </div>

                    </div>

                    <p>
                        In general, Instagram can be mistaken for a glossy magazine. This is probably why many
                        bloggers
                        pay so much attention to the visual part of blogging. A profile or post photo is the face of
                        an
                        account, personality, brand, store.
                    </p>

                    <ol>
                        <li>Only add high quality photos/videos to your feed.</li>
                        <li>Subscribers initially pay attention to the picture, and only then to the text, so the
                            photo
                            should be attractive from the first minute.
                        </li>
                        <li>You can apply your own filters to make the page stand out from other bloggers.</li>
                        <li>You need to add different types of photos to the feed. Alternate detailed pictures with
                            full-size ones.
                        </li>
                        <li>Take photos in good lighting so that the picture quality is much higher.</li>
                    </ol>

                    <h2>
                        Stories
                    </h2>

                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <p>Subscribers of any blogger are divided into 2 types: some only watch stories, while
                                others
                                read only posts. Therefore, keeping stories daily is the responsibility of any
                                blogger.
                            </p>
                            <p>
                                You need to post at least 10 stories per day. The audience will know that the page
                                is
                                live.
                                In addition, they themselves will take part in this activity: answer in Direct, ask
                                questions, be interested in the product. All of this increases engagement.
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-12 text-center">
                            <img src="{{ asset('images/blog/steps-to-start-blog/insta-stories.jpg') }}"
                                class="in-post-image" alt="">
                        </div>
                    </div>

                    <p>Stories should also match the color scheme of the entire page. When the entire account is
                        completely
                        designed in the same style, subscribers will be pleased to visit the profile every time.
                    </p>
                    <p>We also recommend alternating the formats of stories: blogger's face, side view, shooting
                        details,
                        street, room, and so on. The content should be interesting and varied for the target
                        audience.
                    </p>
                    <p>
                        Blogging on Instagram is a profession that needs to be learned in order to develop a profile
                        quickly
                        and correctly. A beautifully designed account is half the success in development.
                    </p>
                </div>

            </div>

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3">
                    <p><strong>Similar posts</strong></p>
                    <ol class="list-unstyled mb-0">
                        <li>
                            <a href="how-to-beautifully-design-your-instagram-page.html">How to Beautifully Design
                                Your Instagram Page?</a>
                        </li>
                        <li>
                            <a href="promotion-of-the-page-from-scratch.html">Promotion of the page from
                                scratch</a>
                        </li>
                        <li>
                            <a href="where-you-can-find-bloggers-for-account-promotion.html">Where you can find
                                bloggers for account promotion</a>
                        </li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div>
    </div>
@endsection

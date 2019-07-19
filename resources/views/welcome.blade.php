<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MT7GJR3');</script>
    <!-- End Google Tag Manager -->

    <meta name="google-site-verification" content="8hXPsBeIeEwKfMyoLpMuzjy9GvWlYxD8hMqDtWyIXXM"/>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="LaraHack - A Laravel Hackathon">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Laravel Hackathon LaravelUK Every 3 months">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>LaraHack - The Laravel Hackathon</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT7GJR3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="main-wrapper-first" id="app">
    <header>
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="{{ url('') }}"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav>
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('register') }}">Join</a>
                            <a href="{{ url('login') }}">Login</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-cross"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner-area">
        <div class="container">
            <div class="row justify-content-center height align-items-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <span class="text-white top text-uppercase">LaraHack - The Online Laravel Hackathon</span>


                        @if ($stage === 1)
                            <h1 class="text-white text-uppercase">Event has Started <br/>Theme: {{ $event->theme }} </h1>
                            <h3>Event Ends / Voting Starts:</h3>


                            <countdown-component
                                    deadline="{{ $event->event_voting_start->toRfc3339String() }}"></countdown-component>

                            <h3>Join {{ $count }} other LaraHackers now!</h3> <br/>
                            <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                        class="mr-10">Join The Hackathon</span><span class="lnr lnr-arrow-right"></span></a>

                        @elseif ($stage === 2)
                            <h1>Voting has Begun</h1>
                            <h3>Thankyou to everyone who took part, please log in and vote!</h3>
                            <h3>Voting Ends:</h3>
                            <countdown-component
                                    deadline="{{ $event->event_voting_end->toRfc3339String() }}"></countdown-component>
                        @elseif ($stage === 3)

                            <h1>Voting has ended!</h1>
                            <h3>The winners will be announced in the LaravelUK Slack Channel</h3>

                        @elseif ($event)
                            <h1 class="text-white text-uppercase">{{ $event->name }}</h1>
                            <h2>{{$event->event_start->formatLocalized('%A %d %B %Y')}}</h2>
                            <countdown-component
                                    deadline="{{ $event->event_start->toRfc3339String() }}"></countdown-component>

                            <h3>Join {{ $count }} other LaraHackers now!</h3> <br/>
                            <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                        class="mr-10">Join The Hackathon</span><span class="lnr lnr-arrow-right"></span></a>

                        @else
                            <h1 class="text-white text-uppercase">Next Event is being planned!</h1>
                            <h3>Join {{ $count }} other LaraHackers now!</h3> <br/>
                            <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                        class="mr-10">Join Us!</span><span class="lnr lnr-arrow-right"></span></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Feature Area -->
    <section class="featured-area">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-sun"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Theme Based</h6>
                            <p>A theme will be announced at the starting time.</p>
                            <p><i>Don't feel the theme?</i> Make something else.</p>
                            <p>All submissions will be accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-code"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Solo or Team</h6>
                            <p>Work together in a <i>Team</i> or go <i>Solo</i>.</p>
                            <p>All the work you produce is <i>yours to keep</i>. We just ask that you are available for
                                press / questions if needed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-clock"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Help where you can</h6>
                            <p>Not a developer / designer? Join our <a href="{{ url('chat') }}">chat</a> and see how you
                                can help. There is always <i>something</i> you can do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Area -->
    <!-- Start Service Area -->
    <section class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h3 class="text-white">Streams</h3>
                        <span class="text-white text-uppercase">
                            <h3 class="text-white">Crosdale</h3>
                             <div id="twitch-embed-crosdale"></div>
                        </span>
                        <span class="text-white text-uppercase">
                            <h3 class="text-white">OllieCodes</h3>
                             <div id="twitch-embed-ollie-codes"></div>
                        </span>
                        <span class="text-white text-uppercase">
                            <h3 class="text-white">MadMikeyB</h3>
                             <div id="twitch-embed-madmikeyb"></div>
                        </span>
                        <!-- <span class="text-white text-uppercase">
                            <h3 class="text-white">Thomegemcity</h3>
                             <div id="twitch-embed-thomegemcity"></div>
                        </span> -->
                    </div>
                </div>
            </div>
            <div class="row" style="display:none;">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s1.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Creative Design</h6>
                            <p class="text-white">WordPress, the premier free open-source blogging utility, has gone
                                through several upgrades in</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s2.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Driving Lesson</h6>
                            <p class="text-white">The buying of large-screen TVs has absolutely skyrocketed lately. It
                                seems that everyone wants one – </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s3.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Climbing Stairs</h6>
                            <p class="text-white">Having used discount toner cartridges for twenty years, there have
                                been a lot of changes in the </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s4.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Bike Accident</h6>
                            <p class="text-white">Every avid independent filmmaker has dre amed about making that
                                special interest documentary, or </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s5.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Car Driving</h6>
                            <p class="text-white">Looking to buy a new computer Overwhelmed by all of the options
                                available to you? Stressed by the </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s6.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Beach HoTel</h6>
                            <p class="text-white">Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution,
                                since it lets you use the headphones </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s7.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Under Passway</h6>
                            <p class="text-white">Over 92% of computers are infected with Adware and spyware. Such
                                software is rarely accompanied by</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s8.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span
                                            class="mr-10">Get Started</span><span
                                            class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Dawn to dusk</h6>
                            <p class="text-white">Computers have become ubiquitous in almost every facet of our lives.
                                At work, desk jockeys spend hours in </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Amazing Works Area -->
</div>
<div class="main-wrapper">
    <section class="amazing-works-area">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h3>Sponsors</h3>
                </div>
            </div>
        </div>

        <div class="active-works-carousel mt-40">

            {{--<div class="item">--}}
            {{--<a href="https://www.digitalocean.com"><div class="thumb" style="background: url(img/sponsor/digitalocean.png);"></div></a>--}}
            {{--<div class="caption text-center">--}}
            {{--<h6 class="text-uppercase"><a href="https://www.digitalocean.com/">DigitalOcean</a></h6>--}}
            {{--<p>DigitalOcean gets out of your way so teams can build, deploy, and scale cloud applications faster and more efficiently. </p>--}}
            {{--</div>--}}
            {{--</div>--}}
            
            <!-- <div class="item">
                <a href="https://www.gamefront.com/">
                    <div class="thumb" style="background: url(img/sponsor/gf.svg);"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://www.gamefront.com/">GameFront</a></h6>
                    <p>The best serving of video game culture, since 1998</p>
                </div>
            </div> -->

            <div class="item">
                <a href="https://laravelphp.uk/">
                    <div class="thumb" style="background: url(img/sponsor/laraveluk.png);"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://laravelphp.uk/">LaravelUK</a></h6>
                    <p>The most exciting coding group in the UK</p>
                </div>
            </div>

            <!-- <div class="item">
                <a href="https://codecourse.com">
                    <div class="thumb" style="background: url(img/sponsor/codecourse.png);"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://codecourse.com">CodeCourse</a></h6>
                    <p>Practical screencasts for awesome developers</p>
                </div>
            </div> -->

            <div class="item">
                <a href="https://makepad.live">
                    <div class="thumb" style="background: url('img/makepad.png');"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://makepad.live">Makepad</a></h6>
                    <p>Makepad is designed and created for individuals looking to organise projects with a productivity tool that doesn't cost the earth to use.</p>
                </div>
            </div>

            <!-- <div class="item">
                <a href="https://linode.com">
                    <div class="thumb" style="background: url(img/sponsor/linode.png);"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://linode.com">Linode</a></h6>
                    <p>High performance SSD Linux servers for all of your infrastructure needs.</p>
                </div>
            </div> -->

            <!-- <div class="item">
                <a href="https://larastream.com">
                    <div class="thumb" style="background: url(img/sponsor/larastream.png);"></div>
                </a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://larastream.com">Larastream.com</a></h6>
                    <p>A live streaming platform like Twitch, but for Laravel</p>
                </div>
            </div> -->

            {{--<div class="item">--}}
            {{--<a href="https://snapshooter.io"><div class="thumb" style="background: url(img/sponsor/snapshooter.png);"></div></a>--}}
            {{--<div class="caption text-center">--}}
            {{--<h6 class="text-uppercase"><a href="https://snapshooter.io">Snapshooter.io</a></h6>--}}
            {{--<p>Don't lose your data. Schedule frequent customizable DigitalOcean backups of your droplets and volumes.</p>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </section>
</div>
<div class="main-wrapper">
    <!-- End Amazing Works Area -->
    <!-- Start Story Area -->
    <section class="story-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="story-title">
                        <h3 class="text-white">The Laravel Framework</h3>
                        <span class="text-uppercase text-white"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-box">
                        <h6 class="text-uppercase">Change the world with Laravel</h6>
                        <p>Laravel is a powerful framework, and perfect for all sorts of websites and services.</p>
                        <a href="https://laravel.com" target="_blank"
                           class="primary-btn hover d-inline-flex align-items-center"><span
                                    class="mr-10">Find Out More</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Story Area -->
    <!-- Start Subscription Area -->
    <section class="subscription-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h3>Contact Us</h3>
                        <span class="text-uppercase">Have a question? Contact us here.</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-lg-offset-2">
                    <div id="mc_embed_signup">
                        <i> Email: <a href="mailto:lee@larahack.com">lee@larahack.com</a> | <a
                                    href="https://leecrosdale.com" target="_blank">leecrosdale.com</a></i>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Subscription Area -->
    <!-- Start footer Area -->
    <footer>
        <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="footer-social">
                    <a href="https://twitter.com/leecrosdale"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="js/moment.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
<script type="text/javascript">
    new Twitch.Embed("twitch-embed-crosdale", {
        width: 854,
        height: 480,
        channel: "crosdale",
        layout: "video",
        autoplay: false,
        muted: true
    });
    new Twitch.Embed("twitch-embed-ollie-codes", {
        width: 854,
        height: 480,
        channel: "olliecodes",
        layout: "video",
        autoplay: false
    });
    new Twitch.Embed("twitch-embed-madmikeyb", {
        width: 854,
        height: 480,
        channel: "madmikeyb",
        layout: "video",
        autoplay: false
    });

    // new Twitch.Embed("twitch-embed-thomegemcity", {
    //     width: 854,
    //     height: 480,
    //     channel: "thomegemcity",
    //     layout: "video",
    //     autoplay: false
    // });

</script>
</body>

</body>
</html>

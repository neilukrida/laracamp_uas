@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            Accomplish Your Journey
                        </p>
                        <h1 class="header">
                            Start Your <span class="text-purple">Dream <br> Journey</span> Today
                        </h1>
                        <p class="support">
                            Our travel is helping people to find their dream <br> journey that match and suitable with
                            their dream.
                        </p>
                        <p class="cta">
                            <a href="#" class="btn btn-master btn-primary">
                                Get Started
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{asset('images/brands.png')}}" alt="">
                <!--Jadi kurung kurawal ke-1, ia akan keluar dari folder resources dan pergi ke folder public yang ada di assetnya dan pergi ke folder images lalu ke logo brand.png-->
            </div>
        </div>
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Endless Possibilities and Adventures
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Diversity
                    </h3>
                    <p class="support">
                        Travel Across the world and get a <br> new adventures & discoveries
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                    <h3 class="title">
                        A.I Guideline
                    </h3>
                    <p class="support">
                        MJN Bot will help you to choose <br> which travel that suitable for you
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                    <h3 class="title">
                        1-1 Mentoring
                    </h3>
                    <p class="support">
                        We will ensure that you will get <br> what your dream travel really is
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Future Job
                    </h3>
                    <p class="support">
                        Get your dream travel with <br> MJN Tour & Travel Agency
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/step1.png')}}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    BETTER Journey
                </p>
                <h2 class="primary-header">
                    Prepare The Journey
                </h2>
                <p class="support">
                    We do really care to our customers dream travel <br> so it would be good if you are taking a best
                    healing ever
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    Travel Harder
                </p>
                <h2 class="primary-header">
                    Accomplish Your Dream
                </h2>
                <p class="support">
                    We provide you the best dream travel you could have <br> never underestimate us to find your dream
                    travel
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Explore More
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/step2.png')}}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/step3.png')}}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Implementation Day
                </h2>
                <p class="support">
                    Travel your dream travel with us, we serve the best for <br> our customers and lead them to endless
                    happiness
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        See More
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    Great Travel
                </p>
                <h2 class="primary-header text-white">
                    Start Your Journey
                </h2>
                <p class="support">
                    We do have a couple of plans that might fit for you <br> Kindly download our full plan below.
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-thirdty me-3">
                        View Package
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                7 Days Bali & Nusa Penida
                            </p>
                            <h1 class="price text-center">
                                280K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    5 Days Bali
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    2 Days Nusa Penida
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Popular Local F&B
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Popular Bali Destination
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Popular Nusa Penida Trip
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    5 Star Hotels & Service
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Michelin Star Dining
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Health Assurance Guarantee
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{route ('checkout.create', 'gila-belajar')}}"
                                    class="btn btn-master btn-primary w-100 mt-3">
                                    Take This Package
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                3 Days Bali
                            </p>
                            <h1 class="price text-center">
                                140K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    3 Days Bali Destination
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Popular Local F&B
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Popular Bali Destination
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    5 Star Hotels & Service
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{route ('checkout.create', 'baru-mulai')}}"
                                    class="btn btn-master btn-secondary w-100 mt-3">
                                    Start With This Package
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{asset('images/brands.png')}}" height="30" alt="">
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    Our Lovely Customer
                </p>
                <h2 class="primary-header">
                    We Really Serve The Best Journey
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                I was not really into travel but, after I tried MJN Travel how to travel across nation &
                                world I start to fall in love with travel big thanks to MJN.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Fanny
                                    </h4>
                                    <p class="role">
                                        Daily Traveler
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                Travel is really important if we want to build a higher self esteem and heal our self. I
                                really recommend MJN Travel for my travel.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Angga
                                    </h4>
                                    <p class="role">
                                        Loyal Customer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                I'm really confused to decide which travel should I travel next. Luckily, MJN Travel
                                really
                                helped me a lot
                                to find my satisfy requirement.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Beatrice
                                    </h4>
                                    <p class="role">
                                        Travel Hotel
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright MJN Travel 2023.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<x-front.main-layout>

    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"> About Us ... </li>
                        </ul>
                        <h1 class="banner-inner-title"> About Us ... </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="About-area padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 margin-top-30">
                    <div class="about-thumb-content">
                        <div class="about-shape">
                            <img src="{{ asset('images/about-shape.jpg') }}" alt="About Us ..." width="208"
                                height="208">
                        </div>
                        <div class="about-thumb">
                            <img src="{{ asset('images/65552_About us.webp') }}" alt="About Us ..." width="490"
                                height="433">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin-top-30">
                    <div class="single-about">
                        <h2 class="about-title">Know About Us</h2>
                        <div class="about-contents">
                            <p data-start="94" data-end="325">At <strong data-start="112"
                                    data-end="123">Myfitness.ae</strong>, we make wellness simple, accessible, and
                                affordable. Whether you're aiming to get stronger, reduce stress, or improve your
                                overall health, our certified professionals are here to support your goals.</p>
                            <p data-start="327" data-end="568">We offer <strong data-start="336" data-end="385">personal
                                    training, yoga, massage services, and more</strong>&mdash;delivered right to your
                                home in Dubai and Abu Dhabi. With a focus on personalized care and convenience,
                                we&rsquo;re committed to guiding you through a wellness journey that fits your
                                lifestyle.</p>
                            <p data-start="570" data-end="672">Start your transformation with Myfitness.ae and experience
                                expert support, on your terms, at your doorstep.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-front.why-choose-us />

    <x-front.services-categories-view :categories="$categories" />

    <x-front.start-as-partner />

</x-front.main-layout>

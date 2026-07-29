<x-front.main-layout>
    <x-front.service-and-area-selection-component />
    <section class="services-area padding-top-40 padding-bottom-40">
        <div class="container">
            <div class="row justify-content-center" style="position:relative;">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> Fitness Services </h2>
                        <span class="section-para">
                            <p>
                                Find the flexibility training you have been looking for.
                                Practice better balance and find
                                the calm of your inner self.
                            </p>
                        </span>
                    </div>
                </div>
                <div class="btn-wrapper service-all">
                    <a class="cmn-btn btn-bg-2" href="{{ route('front.services') }}">
                        View all services
                    </a>&nbsp;
                </div>
            </div>


            <div class="row margin-top-20">
                <div class="col-lg-12">
                    <x-front.services :services="$services" />
                    <div class="btn-wrapper service-bottom">
                        <a class="cmn-btn btn-bg-2" href="{{ route('front.services') }}"> 
                            View all services
                        </a>
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-front.why-choose-us />

    <x-front.start-as-partner />

    <x-front.blog-slider :blogs="$blogs"/>

    <x-front.home-faqs />

    <x-front.testmonials />

    <x-front.modal />

</x-front.main-layout>

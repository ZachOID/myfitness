<x-front.main-layout>
    <div class="overlays"></div>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"> Frequently Asked Questions </li>
                        </ul>
                        <h1 class="banner-inner-title"> Frequently Asked Questions </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq-area padding-top-70 padding-bottom-100">
        <div class="container">
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="faq-contents">
                        @forelse($faqs as $faq)
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".2s">
                            <div class="faq-title">
                                {{ $faq->question }}
                            </div>
                            <div class="faq-panel">
                                <div class="faq-para">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No FAQs available at the moment.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-front.main-layout>

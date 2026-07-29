<div class="services-slider dot-style-one dot-color-02">
    @foreach ($services as $service)
        <div class="single-services-item wow fadeInUp" data-wow-delay=".2s">
            <div class="single-service style-02">
                <a href="{{ route('front.serviceDetails',$service->slug) }}" class="service-thumb">
                    <img src="{{ asset('storage/'.$service->image) }}" alt="Online Fertility Yoga " width="450"
                        height="auto" loading="lazy">
                    <div class="award-icons">
                        @if($service->is_featured)
                            <span>Featured</span>
                        @endif
                    </div>
                </a>
                <div class="services-contents">
                    <h4 class="common-title-two hover-color-two"> 
                        <a href="{{ route('front.serviceDetails',$service->slug) }}">
                            {{ $service->name }}
                        </a> 
                    </h4>
                    <div class="service-price mt-2">
                        <span class="starting"> Starting at </span>
                        <span class="prices color-3"> AED&nbsp;{{ $service->price_after }}</span>
                    </div>
                    <div class="btn-wrapper mt-3">
                        <a href="{{ route('front.serviceDetails',$service->slug) }}" class="cmn-btn btn-appoinment btn-outline-2"> Book
                            Appoinment </a>
                    </div>
                </div>
            </div>
        </div>  
    @endforeach
    
</div>

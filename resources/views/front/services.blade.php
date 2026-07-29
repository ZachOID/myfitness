<x-front.main-layout>

    <div class="overlays"></div>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list">Service List</li>
                        </ul>
                        <h1 class="banner-inner-title">Services List </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="category-services-area padding-top-40 padding-bottom-40">
        <div class="container">
            <form action="{{ route('front.services') }}" method="get" class="">
                <div class="row">
                    <input type="hidden" name="location" id="location" value="1">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-category-service">
                            <div class="single-select" id="subl">
                                <select name="area_id" required>
                                    <option selected disabled value="">Select Area</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-category-service">
                            <div class="single-select">
                                <select name="category_id" required>
                                    <option selected disabled value="">Find Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="btn-wrapper">
                            <button type="submit" class="cmn-btn btn-bg-2"> Search </a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                @forelse ($services as $service)
                    <div class="col-xl-4 col-md-6 margin-top-30">
                        <div class="single-service service-two style-02 wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{ route('front.serviceDetails', $service->slug) }}" class="service-thumb">
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
                                    width="450" height="auto">
                                <div class="award-icons">
                                    <!--<i class="las la-award"></i>-->
                                    @if ($service->is_featured)
                                        <span>Featured</span>
                                    @endif
                                </div>
                            </a>
                            <div class="services-contents">
                                <h4 class="common-title-two hover-color-two"> <a
                                        href="{{ route('front.serviceDetails', $service->slug) }}"> {{ $service->name }}
                                    </a> </h4>
                                <div class="service-price-wrapper mt-0">
                                    <div class="btn-wrapper">
                                        <a href="{{ route('front.serviceDetails', $service->slug) }}"
                                            class="cmn-btn btn-bg-2 btn-medium"> Book Now </a>

                                    </div>
                                    <div class="service-price style-02" style="text-align:right;">
                                        <span class="starting"> Starting at </span>
                                        <span class="prices color-3">AED&nbsp;{{ $service->price_after }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="btn-wrapper">
                        <a href="{{ route('front.services') }}"
                            class="cmn-btn btn-bg-2 btn-medium">Clear Filters 
                        </a>
                    </div>
                @endforelse

                <div class="col-lg-12">
                    <div class="service-pagination">
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.main-layout>

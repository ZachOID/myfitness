<x-front.main-layout>

    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"><a href="{{ route('front.blogs') }}"> Blog </a></li>
                            <li class="list"> Blog Details </li>
                        </ul>
                        <h1 class="banner-inner-title"> {{ $blog->title }} </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-details-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="single-blog-details">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }} "
                                    width="1110" height="">
                            </div>
                            <ul class="tags">
                                <li class="">
                                    <a href="javascript:void(0)"> <i class="las la-clock"></i>
                                        {{ $blog->created_at->format('d M Y') }} </a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)"> <i class="las la-tag"></i>
                                        {{ $blog->category?->name }} </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-blog-details">
                            {!! $blog->content !!}
                        </div>

                        <div class="related-blog-area padding-top-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title-two">
                                            <h3 class="title"> Related Blog </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="row padding-top-20">
                                    @foreach ($blogs as $blogi)
                                        <div class="col-lg-4 col-md-6 margin-top-30">
                                            <div class="single-blog no-margin wow fadeInUp" data-wow-delay=".2s">
                                                <a href="{{ route('front.blogDetails',$blogi->slug) }}"
                                                    class="blog-thumb">
                                                    <img src="{{ asset('storage/'.$blogi->image) }}"
                                                        alt="{{ $blogi->title }}">
                                                </a>
                                                <div class="blog-contents">
                                                    <ul class="tags">
                                                        <li>
                                                            <a href="javascript:void(0)"> <i class="las la-clock"></i>
                                                                {{ $blogi->created_at->format('d M Y') }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"> <i class="las la-tag"></i>
                                                                {{ $blog->category?->name }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h4 class="common-title-two"> <a
                                                            href="{{ route('front.blogDetails',$blogi->slug) }}">
                                                            {{ $blogi->title }} </a> </h4>
                                                    <p class="common-para">
                                                    <p>{{ $blogi->excerpt }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.main-layout>

<x-front.main-layout>
    <div class="overlays"></div>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"> Blog </li>
                        </ul>
                        <h1 class="banner-inner-title"> Fitness Blogs </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-area padding-top-70 padding-bottom-100">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 margin-top-30">
                        <div class="single-blog no-margin wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{ route('front.blogDetails',$blog->slug) }}" class="blog-thumb">
                                <img src="{{ asset('storage/'.$blog->image) }}"
                                    alt=" {{ $blog->title }} " width="350"
                                    height="233">
                            </a>
                            <div class="blog-contents">
                                <ul class="tags">
                                    <li>
                                        <a href="javascript:void(0)"> <i class="las la-clock"></i> {{ $blog->created_at->format('d M Y') }} </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> <i class="las la-tag"></i> {{ $blog->category?->name }} </a>
                                    </li>
                                </ul>
                                <h4 class="common-title-two"> <a
                                        href="{{ route('front.blogDetails',$blog->slug) }}"> {{ $blog->title }} </a> </h4>
                                <p class="common-para">
                                <p>{{ $blog->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $blogs->links() }}
            </div>
        </div>
    </section>
</x-front.main-layout>

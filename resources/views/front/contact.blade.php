<x-front.main-layout>

    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"> Contact Us ... </li>
                        </ul>
                        <h1 class="banner-inner-title"> Contact Us ... </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-promo-area padding-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 margin-top-30">
                    <div class="single-contacts wow fadeInUp" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="contacts-contents">
                            <h4 class="title"> Contact Us </h4>
                            <div class="item-contents">
                                <span class="item">Phone: <a href="tel:+971585858348">+971 5858 58348</a>
                                </span>
                                <span class="item">Email: <a href="mailto:info@myfitness.ae"> info@myfitness.ae </a> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 margin-top-30">
                    <div class="single-contacts wow fadeInDown" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <i class="las la-map-marker"></i>
                        </div>
                        <div class="contacts-contents">
                            <h4 class="title"> Office Address </h4>
                            <div class="item-contents">
                                <span class="item">
                                    Dubai, UAE
                                </span>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-two">
                        <h3 class="title"> Get In Touch </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 padding-top-20">
                    @if (session('success'))
                        <div class="alert alert-success" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 15px 20px; border-radius: 5px; margin-bottom: 30px; display: flex; align-items: center;">
                            <i class="las la-check-circle" style="font-size: 24px; margin-right: 15px; color: #28a745;"></i>
                            <div>
                                <strong style="display: block; margin-bottom: 5px;">Message Sent Successfully!</strong>
                                <span>{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 15px 20px; border-radius: 5px; margin-bottom: 30px;">
                            <strong>Please fix the following errors:</strong>
                            <ul style="margin-top: 10px; margin-bottom: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('form.store') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="details-comment-content">
                            <div class="comments-flex-item">
                                <div class="single-commetns">
                                    <label class="comment-label"> Your Name* </label>
                                    <input type="text" class="form--control" required name="name"
                                        placeholder="Type Name">
                                </div>
                                <div class="single-commetns">
                                    <label class="comment-label"> Email* </label>
                                    <input type="email" class="form--control" required name="email"
                                        placeholder="Type Email">
                                </div>
                            </div>
                            <div class="comments-flex-item">
                                <div class="single-commetns">
                                    <label class="comment-label"> Phone Number* </label>
                                    <input type="tel" class="form--control" required name="phone"
                                        placeholder="Type Number">
                                </div>
                                <div class="single-commetns">
                                    <label class="comment-label"> Purpose* </label>
                                    <input type="text" class="form--control" required name="purpose"
                                        placeholder="Type Address">
                                </div>
                            </div>
                            <div class="single-commetns">
                                <label class="comment-label"> Comments* </label>
                                <textarea name="comment" required class="form--control form--message" placeholder="Post Comments"></textarea>
                            </div>
                            <button type="submit"> Send Message </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-front.main-layout>

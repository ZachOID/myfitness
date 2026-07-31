<x-dashboard.main-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-sliders-h text-warning mr-2"></i>Site Settings & Cult.fit Design Controls</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('admins.settings.update') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Left Column: Brand & Design Controls -->
            <div class="col-lg-6">
                <!-- Theme Colors -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-dark text-white">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-palette mr-2"></i>Cult.fit Brand & Color Theme</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Primary Accent Color (Neon Lime/Yellow)</label>
                            <input type="color" name="primary_color" class="form-control" value="{{ $settings['primary_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Secondary Accent Color (Electric Cyan)</label>
                            <input type="color" name="secondary_color" class="form-control" value="{{ $settings['secondary_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Background Color (Dark Theme)</label>
                            <input type="color" name="bg_color" class="form-control" value="{{ $settings['bg_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Main Text Color</label>
                            <input type="color" name="text_color" class="form-control" value="{{ $settings['text_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Button Text Color</label>
                            <input type="color" name="button_text_color" class="form-control" value="{{ $settings['button_text_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Preloader Icon Color</label>
                            <input type="color" name="preloader_color" class="form-control" value="{{ $settings['preloader_color'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Preloader Loading Text</label>
                            <input type="text" name="preloader_text" class="form-control" value="{{ $settings['preloader_text'] }}">
                        </div>
                    </div>
                </div>

                <!-- Hero Carousel Background -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-images mr-2"></i>Dynamic Hero Carousel</h6>
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-switch mr-3">
                                <input type="checkbox" class="custom-control-input" id="switchFade" name="hero_fade_effect" value="1" {{ $settings['hero_fade_effect'] == '1' ? 'checked' : '' }}>
                                <label class="custom-control-label text-white" for="switchFade">Fade Effect</label>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" onclick="addHeroSlide()"><i class="fas fa-plus mr-1"></i>Add Slide</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="hero-slides-container">
                            @foreach($settings['hero_slides'] ?? [] as $index => $slide)
                                <div class="form-row align-items-center mb-3 slide-item">
                                    <div class="col-md-3">
                                        <select name="hero_slides[{{ $index }}][type]" class="form-control" required>
                                            <option value="image" {{ ($slide['type'] ?? '') == 'image' ? 'selected' : '' }}>Image</option>
                                            <option value="video" {{ ($slide['type'] ?? '') == 'video' ? 'selected' : '' }}>Video</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="hero_slides[{{ $index }}][url]" class="form-control" value="{{ $slide['url'] ?? '' }}" placeholder="Enter Image or Video URL" required>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.slide-item').remove()"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <small class="text-muted d-block mb-3">If you only add one slide, it will be a static background. Add multiple slides to enable the fading carousel.</small>
                        <div class="form-group">
                            <label class="font-weight-bold">Hero Headline Title</label>
                            <input type="text" name="hero_title" class="form-control" value="{{ $settings['hero_title'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Hero Subtitle</label>
                            <textarea name="hero_subtitle" class="form-control" rows="2">{{ $settings['hero_subtitle'] }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Moving Announcement Ticker Banner -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-bullhorn mr-2"></i>Moving Announcement Banner</h6>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switchTicker" name="show_ticker" value="1" {{ $settings['show_ticker'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label text-white" for="switchTicker">Active</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Ticker Marquee Text</label>
                            <input type="text" name="ticker_text" class="form-control" value="{{ $settings['ticker_text'] }}">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Popups & Section Switches -->
            <div class="col-lg-6">
                <!-- 10% Off Discount Pop-Up Modal -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-dark text-white d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-gift mr-2"></i>10% Off First Booking Pop-Up Modal</h6>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switchPopup" name="show_popup" value="1" {{ $settings['show_popup'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label text-white" for="switchPopup">Active</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Popup Headline</label>
                            <input type="text" name="popup_headline" class="form-control" value="{{ $settings['popup_headline'] }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Popup Subheadline</label>
                            <textarea name="popup_subheadline" class="form-control" rows="2">{{ $settings['popup_subheadline'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Promo Discount Code</label>
                            <input type="text" name="popup_discount_code" class="form-control" value="{{ $settings['popup_discount_code'] }}">
                        </div>
                    </div>
                </div>

                <!-- Homepage Section Toggles (Enable/Disable Sections) -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-dark text-white">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-toggle-on mr-2"></i>Enable / Disable Website Sections</h6>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swHero" name="show_hero_video" value="1" {{ $settings['show_hero_video'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swHero">Hero Workout Video Section</label>
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swServices" name="show_services" value="1" {{ $settings['show_services'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swServices">Fitness Services Grid Section</label>
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swWhyUs" name="show_why_us" value="1" {{ $settings['show_why_us'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swWhyUs">Why Choose Us Feature Section</label>
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swTestimonials" name="show_testimonials" value="1" {{ $settings['show_testimonials'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swTestimonials">Testimonials Section</label>
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swBlogs" name="show_blogs" value="1" {{ $settings['show_blogs'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swBlogs">Blogs Slider Section</label>
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input" id="swFaqs" name="show_faqs" value="1" {{ $settings['show_faqs'] == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-bold" for="swFaqs">Compact FAQs Section</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning btn-block btn-lg font-weight-bold text-dark shadow">
                    <i class="fas fa-save mr-2"></i>SAVE ALL SITE SETTINGS
                </button>
            </div>
        </div>
    </form>

    <script>
        let slideIndex = {{ count($settings['hero_slides'] ?? []) }};
        function addHeroSlide() {
            const container = document.getElementById('hero-slides-container');
            const html = `
                <div class="form-row align-items-center mb-3 slide-item">
                    <div class="col-md-3">
                        <select name="hero_slides[${slideIndex}][type]" class="form-control" required>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="hero_slides[${slideIndex}][url]" class="form-control" placeholder="Enter Image or Video URL" required>
                    </div>
                    <div class="col-md-2 text-right">
                        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.slide-item').remove()"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
            slideIndex++;
        }
    </script>
</x-dashboard.main-layout>

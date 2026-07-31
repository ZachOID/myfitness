@if($showHero == '1')
<section class="premium-hero hero-section">
    <!-- Carousel Background -->
    <div class="hero-carousel premium-hero-bg hero-carousel-wrapper" data-fade="{{ $heroFadeEffect == '1' ? 'true' : 'false' }}">
        @foreach($heroSlides as $slide)
            <div class="hero-slide-item">
                @if(($slide['type'] ?? 'image') == 'video')
                    <video autoplay muted loop playsinline class="hero-media-item">
                        <source src="{{ $slide['url'] }}" type="video/mp4">
                    </video>
                @else
                    <img src="{{ $slide['url'] }}" alt="Hero Background" class="hero-media-item animate__animated animate__fadeIn">
                @endif
            </div>
        @endforeach
    </div>

    <!-- Overlay Gradient -->
    <div class="premium-hero-overlay"></div>

    <!-- Hero Content -->
    <div class="premium-hero-content">
        <span class="hero-badge">
            <i class="fas fa-bolt me-2"></i>#1 PERSONAL TRAINING IN DUBAI & UAE
        </span>

        <h1 class="hero-title">
            {!! str_replace(['PERSONAL TRAINERS', 'FITNESS JOURNEY'], ['<span class="text-gradient">PERSONAL TRAINERS</span>', '<span class="text-gradient">FITNESS JOURNEY</span>'], $heroTitle) !!}
        </h1>

        <p class="hero-subtitle">
            {{ $heroSubtitle }}
        </p>

        <!-- Area & Category Selection Widget -->
        <div class="premium-search-card">
            <form action="{{ route('front.services') }}" method="GET" class="row g-3 align-items-center">
                <div class="col-md-5">
                    <select name="category_id" class="form-select">
                        <option value="">Choose Fitness Goal / Service...</option>
                        @foreach(\App\Models\Category::all() as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="area_id" class="form-select">
                        <option value="">Select Your Area in UAE...</option>
                        @foreach(\App\Models\Area::all() as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn-premium btn-accent w-100" style="height: 56px; border-radius: 12px;">
                        FIND TRAINER <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endif

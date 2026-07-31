@php
    $showHero = \App\Models\SiteSetting::get('show_hero_video', '1');
    $videoUrl = \App\Models\SiteSetting::get('hero_video_url', 'https://assets.mixkit.co/videos/preview/mixkit-man-runs-on-a-treadmill-in-a-gym-41315-large.mp4');
    $heroTitle = \App\Models\SiteSetting::get('hero_title', 'ELEVATE YOUR FITNESS JOURNEY WITH EXPERT PERSONAL TRAINERS');
    $heroSubtitle = \App\Models\SiteSetting::get('hero_subtitle', 'Certified trainers at your home, gym, or pool across Dubai & UAE. Flexible scheduling & guaranteed transformation.');
@endphp

@if($showHero == '1')
<section class="premium-hero">
    <!-- Workout Video Background -->
    <video class="premium-hero-bg" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?w=1200">
        <source src="{{ $videoUrl }}" type="video/mp4">
    </video>

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

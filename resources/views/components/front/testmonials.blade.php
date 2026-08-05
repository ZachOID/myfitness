@props(['testimonials' => null])

@php
    $items = $testimonials ?? \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();
@endphp

<section class="testimonial-section py-5">
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <span style="color: var(--brand-primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem;">REAL CLIENT STORIES</span>
            <h2 style="font-size: 2.5rem; font-weight: 900; color: var(--brand-text); margin-top: 8px;">TRANSFORMATIONS & REVIEWS</h2>
        </div>

        <div class="testimonial-carousel mt-4">
            @foreach($items as $test)
                <div class="px-3 pb-4 pt-2">
                    <div class="market-testimonial-card h-100 position-relative">
                        <!-- Large Quote Icon Background -->
                        <div class="quote-icon position-absolute top-0 end-0 mt-3 me-3 opacity-10">
                            <i class="fas fa-quote-right" style="font-size: 4rem; color: var(--brand-text-muted); opacity: 0.2;"></i>
                        </div>

                        <!-- 1. Image of Client & Name -->
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ $test->avatar_url ?: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150' }}" 
                                 alt="{{ $test->name }}" 
                                 class="market-author-img rounded-circle shadow-sm"
                                 onError="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150'">
                            <div style="margin-left: 24px;">
                                <h5 class="mb-0 fw-bold text-light" style="color: var(--brand-text) !important;">{{ $test->name }}</h5>
                                <small style="color: var(--brand-text-muted) !important;">{{ $test->role_location ?: 'Verified Client' }}</small>
                            </div>
                        </div>

                        <!-- 2. Text -->
                        <p class="market-testimonial-text mb-4 flex-grow-1">
                            "{{ $test->content }}"
                        </p>

                        <!-- 3. Stars Review -->
                        <div class="market-stars mt-auto">
                            @for($i=1; $i<=5; $i++)
                                @if($i <= $test->rating)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-muted"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .testimonial-section {
        background-color: var(--brand-bg);
    }
    .market-testimonial-card {
        background: var(--brand-card-bg);
        border-radius: 16px;
        padding: 35px 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        border: 1px solid var(--brand-card-border);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        z-index: 1;
    }
    .market-testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        border-color: var(--brand-primary);
    }
    .market-author-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border: 2px solid var(--brand-card-border);
    }
    .market-testimonial-text {
        font-size: 1.05rem;
        line-height: 1.6;
        font-style: italic;
        color: var(--brand-text-muted) !important;
        position: relative;
        z-index: 2;
    }
    .market-stars i {
        font-size: 1rem;
        margin-right: 2px;
    }
    .text-warning {
        color: #ffc107 !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof $ !== 'undefined' && $.fn.slick) {
            $('.testimonial-carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 8000,
                cssEase: 'linear',
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
    });
</script>

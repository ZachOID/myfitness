@props(['testimonials' => null])

@php
    $items = $testimonials ?? \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();
@endphp

<section class="testimonial-section py-5" style="background-color: #f8f9fa;">
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <span style="color: #ff3366; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem;">REAL CLIENT STORIES</span>
            <h2 style="font-size: 2.5rem; font-weight: 900; color: #111; margin-top: 8px;">TRANSFORMATIONS & REVIEWS</h2>
        </div>

        <div class="row g-4 mt-3">
            @foreach($items as $test)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="market-testimonial-card h-100 position-relative">
                        <!-- Large Quote Icon Background -->
                        <div class="quote-icon position-absolute top-0 end-0 mt-3 me-3 opacity-10">
                            <i class="fas fa-quote-right" style="font-size: 4rem; color: #ccc;"></i>
                        </div>

                        <!-- 1. Image of Client & Name -->
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ $test->avatar_url ?: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150' }}" 
                                 alt="{{ $test->name }}" 
                                 class="market-author-img rounded-circle shadow-sm"
                                 onError="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150'">
                            <div class="ms-3">
                                <h5 class="mb-0 fw-bold text-dark">{{ $test->name }}</h5>
                                <small class="text-muted">{{ $test->role_location ?: 'Verified Client' }}</small>
                            </div>
                        </div>

                        <!-- 2. Text -->
                        <p class="market-testimonial-text text-secondary mb-4 flex-grow-1">
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
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
    }
    .market-testimonial-card {
        background: #fff;
        border-radius: 16px;
        padding: 35px 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        border: 1px solid rgba(0,0,0,0.03);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        z-index: 1;
    }
    .market-testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        border-color: rgba(255, 51, 102, 0.1);
    }
    .market-author-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border: 2px solid #fff;
    }
    .market-testimonial-text {
        font-size: 1.05rem;
        line-height: 1.6;
        font-style: italic;
        color: #4a4a4a !important;
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

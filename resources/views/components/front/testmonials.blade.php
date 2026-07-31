@props(['testimonials' => null])

@php
    $items = $testimonials ?? \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();
@endphp

<section class="padding-top-60 padding-bottom-60" style="background: var(--brand-bg);">
    <div class="container">
        <div class="text-center mb-5">
            <span style="color: var(--brand-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">REAL CLIENT STORIES</span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: var(--brand-text); margin-top: 6px;">TRANSFORMATIONS & REVIEWS</h2>
        </div>

        <div class="row g-4">
            @foreach($items as $test)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cult-testimonial-card">
                        <div class="cult-stars">
                            @for($i=1; $i<=5; $i++)
                                @if($i <= $test->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>

                        <p class="cult-testimonial-text">
                            "{{ $test->content }}"
                        </p>

                        <div class="cult-testimonial-author">
                            <img src="{{ $test->avatar_url ?: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150' }}" alt="{{ $test->name }}" class="cult-author-img" onError="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150'">
                            <div>
                                <div class="cult-author-name">{{ $test->name }}</div>
                                <div class="cult-author-role">{{ $test->role_location ?: 'Verified Client • Dubai' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

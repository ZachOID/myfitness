<section class="padding-top-60 padding-bottom-60" style="background: var(--brand-bg);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.2rem; font-weight: 800; color: var(--brand-text); margin-bottom: 16px;">FREQUENTLY ASKED QUESTIONS</h2>
            <p style="color: var(--brand-text-muted); max-width: 600px; margin: 0 auto;">
                Find quick answers to common questions about our doorstep personal training and wellness services.
            </p>
        </div>

        @if(isset($faqs) && $faqs->count() > 0)
            <div class="row g-4 faq-container">
                @php
                    $faqColumns = $faqs->split(2);
                @endphp
                
                @foreach($faqColumns as $column)
                    <div class="col-lg-6">
                        @foreach($column as $faq)
                            <div class="cult-faq-card">
                                <div class="cult-faq-header" onclick="toggleFaq(this)">
                                    <span>{{ $faq->question }}</span>
                                    <i class="fas fa-chevron-down cult-faq-icon"></i>
                                </div>
                                <div class="cult-faq-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-muted">No FAQs available at the moment.</p>
        @endif
    </div>
</section>

<script>
    function toggleFaq(element) {
        // Find all cards
        let allCards = document.querySelectorAll('.cult-faq-card');
        let currentCard = element.parentElement;
        
        // If clicking the one that's already open, just close it
        if (currentCard.classList.contains('active')) {
            currentCard.classList.remove('active');
            return;
        }

        // Close all others
        allCards.forEach(card => {
            card.classList.remove('active');
        });

        // Open the clicked one
        currentCard.classList.add('active');
    }
</script>

<x-front.main-layout title="Frequently Asked Questions | MyFitness">
    <section class="padding-top-120 padding-bottom-100" style="background: var(--color-bg); min-height: 100vh;">
        <div class="container">
            <div class="text-center mb-5 mt-5">
                <h1 style="font-size: 3rem; font-weight: 800; color: var(--color-text); letter-spacing: -1px;">
                    Frequently Asked <span class="text-gradient">Questions</span>
                </h1>
                <p style="color: var(--color-text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto; margin-top: 15px;">
                    Everything you need to know about our premium fitness services, bookings, and more.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion custom-premium-accordion" id="faqAccordion">
                        @forelse($faqs as $index => $faq)
                        <div class="accordion-item" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}" style="background: transparent; color: var(--color-text); font-weight: 600; font-size: 1.1rem; box-shadow: none; padding: 24px;">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--color-text-muted); padding: 0 24px 24px 24px; font-size: 1.05rem; line-height: 1.8;">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="text-center" style="color: var(--color-text-muted);">
                            <p>No FAQs available at the moment.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .custom-premium-accordion .accordion-item {
            transition: all 0.3s ease;
        }
        .custom-premium-accordion .accordion-item:hover {
            border-color: var(--color-primary);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .custom-premium-accordion .accordion-button::after {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        .custom-premium-accordion .accordion-button:not(.collapsed)::after {
            filter: invert(70%) sepia(80%) saturate(1000%) hue-rotate(350deg) brightness(100%);
        }
        .custom-premium-accordion .accordion-button:not(.collapsed) {
            color: var(--color-primary) !important;
        }
        .custom-premium-accordion .accordion-button:focus {
            box-shadow: none;
            outline: none;
        }
    </style>
</x-front.main-layout>

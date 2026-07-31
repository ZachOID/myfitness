<footer class="premium-footer">
    <div class="container">
        <div class="row g-5 mb-5">
            <!-- Brand Info -->
            <div class="col-lg-4 col-md-6">
                <a href="/" class="d-inline-block text-decoration-none">
                    <div class="footer-brand">
                        <span style="color: var(--color-text);">MY</span><span class="text-gradient">FITNESS</span>
                    </div>
                </a>
                <p style="font-size: 1rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 30px; max-width: 320px;">
                    Dubai's ultra-premium fitness platform. World-class personal trainers, yoga coaches, and therapists delivered to your doorstep.
                </p>

                <div class="d-flex gap-3">
                    <a href="#" class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.05); color: var(--color-text); transition: 0.3s; text-decoration: none;" onmouseover="this.style.background='var(--color-primary)'; this.style.color='#000';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.color='var(--color-text)';"><i class="fab fa-instagram fs-5"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.05); color: var(--color-text); transition: 0.3s; text-decoration: none;" onmouseover="this.style.background='var(--color-primary)'; this.style.color='#000';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.color='var(--color-text)';"><i class="fab fa-twitter fs-5"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.05); color: var(--color-text); transition: 0.3s; text-decoration: none;" onmouseover="this.style.background='var(--color-primary)'; this.style.color='#000';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.color='var(--color-text)';"><i class="fab fa-linkedin-in fs-5"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h4 class="footer-heading">Explore</h4>
                <div class="d-flex flex-column">
                    <a href="/" class="footer-link">Home</a>
                    <a href="{{ route('front.services') }}" class="footer-link">Services</a>
                    <a href="{{ route('front.about') }}" class="footer-link">Our Story</a>
                    <a href="{{ route('front.blogs') }}" class="footer-link">Journal</a>
                    <a href="{{ route('front.contact') }}" class="footer-link">Contact</a>
                </div>
            </div>

            <!-- Legal & Support -->
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-heading">Support</h4>
                <div class="d-flex flex-column">
                    <a href="{{ route('front.faq') }}" class="footer-link">Help Center</a>
                    <a href="{{ route('front.privacyPolicy') }}" class="footer-link">Privacy Policy</a>
                    <a href="{{ route('front.termsConditions') }}" class="footer-link">Terms of Service</a>
                    <a href="{{ route('front.cookiePolicy') }}" class="footer-link">Cookies</a>
                    <a href="{{ route('front.serviceDelivery') }}" class="footer-link">Service Delivery</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-heading">Reach Us</h4>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="fas fa-map-marker-alt text-gradient mt-1 fs-5"></i>
                        <span style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.5;">Compass Building, Al Shohada Road,<br>Ras Al Khaimah, UAE</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="fas fa-phone-alt text-gradient fs-5"></i>
                        <a href="tel:+971585858348" style="color: var(--color-text-muted); text-decoration: none; font-size: 0.95rem;">+971 5858 58348</a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="fas fa-envelope text-gradient fs-5"></i>
                        <a href="mailto:hello@myfitness.ae" style="color: var(--color-text-muted); text-decoration: none; font-size: 0.95rem;">hello@myfitness.ae</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 border-top d-flex flex-column flex-md-row align-items-center justify-content-between" style="border-color: var(--color-border) !important;">
            <p class="mb-0" style="color: var(--color-text-muted); font-size: 0.85rem;">© {{ date('Y') }} MyFitness. All rights reserved.</p>
            <p class="mb-0 mt-2 mt-md-0" style="color: var(--color-text-muted); font-size: 0.85rem;">Designed with <i class="fas fa-heart text-gradient mx-1"></i> for Elite Performance.</p>
        </div>
    </div>
</footer>

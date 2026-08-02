<footer class="premium-footer position-relative" style="background: var(--color-bg); padding-top: 100px;">
    <div class="container">
        <!-- Top Footer (Newsletter / CTA) -->
        <div class="row mb-5 pb-5 border-bottom" style="border-color: rgba(255,255,255,0.05) !important;">
            <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                <h3 class="text-white fw-bold mb-3" style="font-size: 2.2rem; letter-spacing: -0.03em;">Join the <span class="text-gradient">Elite</span> Inner Circle.</h3>
                <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.6;">Subscribe for exclusive training tips, nutrition guides, and VIP offers delivered straight to your inbox.</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form class="w-100 d-flex gap-3 flex-column flex-sm-row">
                    <input type="email" class="form-control bg-dark text-white w-100" placeholder="Enter your email address" style="height: 60px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.1); padding: 0 24px; font-size: 1.05rem;">
                    <button type="button" class="btn-premium btn-accent px-5" style="height: 60px; border-radius: 16px; white-space: nowrap; font-size: 1.05rem;">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="row g-5 mb-5">
            <!-- Brand Info -->
            <div class="col-lg-4 col-md-6 pe-lg-5">
                <a href="/" class="d-inline-block text-decoration-none mb-4">
                    <div class="footer-brand m-0" style="font-size: 2.5rem;">
                        <span style="color: var(--color-text);">MY</span><span class="text-gradient">FITNESS</span>
                    </div>
                </a>
                <p style="font-size: 1.05rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 40px;">
                    Dubai's ultra-premium fitness platform. World-class personal trainers, yoga coaches, and therapists delivered directly to your doorstep.
                </p>

                @php
                    $settings = app(\App\Services\SiteSettingService::class)->getAllSettings();
                @endphp
                <div class="d-flex gap-3">
                    @if($settings['show_instagram'] == '1')
                        <a href="{{ $settings['social_instagram'] }}" class="social-icon-modern"><i class="fab fa-instagram fs-5"></i></a>
                    @endif
                    @if($settings['show_twitter'] == '1')
                        <a href="{{ $settings['social_twitter'] }}" class="social-icon-modern"><i class="fab fa-twitter fs-5"></i></a>
                    @endif
                    @if($settings['show_linkedin'] == '1')
                        <a href="{{ $settings['social_linkedin'] }}" class="social-icon-modern"><i class="fab fa-linkedin-in fs-5"></i></a>
                    @endif
                    @if($settings['show_whatsapp'] == '1')
                        <a href="{{ $settings['social_whatsapp'] }}" class="social-icon-modern"><i class="fab fa-whatsapp fs-5"></i></a>
                    @endif
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-heading text-uppercase tracking-wider" style="color: #fff; font-size: 0.95rem;">Explore</h5>
                <div class="d-flex flex-column gap-3 mt-4">
                    <a href="/" class="footer-link m-0" style="font-size: 1.05rem;">Home</a>
                    <a href="{{ route('front.services') }}" class="footer-link m-0" style="font-size: 1.05rem;">Services</a>
                    <a href="{{ route('front.about') }}" class="footer-link m-0" style="font-size: 1.05rem;">Our Story</a>
                    <a href="{{ route('front.blogs') }}" class="footer-link m-0" style="font-size: 1.05rem;">Journal</a>
                    <a href="{{ route('front.contact') }}" class="footer-link m-0" style="font-size: 1.05rem;">Contact</a>
                </div>
            </div>

            <!-- Legal & Support -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading text-uppercase tracking-wider" style="color: #fff; font-size: 0.95rem;">Support</h5>
                <div class="d-flex flex-column gap-3 mt-4">
                    <a href="{{ route('front.faq') }}" class="footer-link m-0" style="font-size: 1.05rem;">Help Center</a>
                    <a href="{{ route('front.privacyPolicy') }}" class="footer-link m-0" style="font-size: 1.05rem;">Privacy Policy</a>
                    <a href="{{ route('front.termsConditions') }}" class="footer-link m-0" style="font-size: 1.05rem;">Terms of Service</a>
                    <a href="{{ route('front.cookiePolicy') }}" class="footer-link m-0" style="font-size: 1.05rem;">Cookies</a>
                    <a href="{{ route('front.serviceDelivery') }}" class="footer-link m-0" style="font-size: 1.05rem;">Service Delivery</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading text-uppercase tracking-wider" style="color: #fff; font-size: 0.95rem;">Reach Us</h5>
                <div class="d-flex flex-column gap-4 mt-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box-modern">
                            <i class="fas fa-map-marker-alt text-gradient fs-5"></i>
                        </div>
                        <span style="color: var(--color-text-muted); font-size: 1.05rem; line-height: 1.4;">Compass Building,<br>Ras Al Khaimah, UAE</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box-modern">
                            <i class="fas fa-phone-alt text-gradient fs-5"></i>
                        </div>
                        <a href="tel:+971585858348" style="color: var(--color-text-muted); text-decoration: none; font-size: 1.05rem; transition: color 0.3s;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-muted)'">+971 5858 58348</a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box-modern">
                            <i class="fas fa-envelope text-gradient fs-5"></i>
                        </div>
                        <a href="mailto:hello@myfitness.ae" style="color: var(--color-text-muted); text-decoration: none; font-size: 1.05rem; transition: color 0.3s;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-muted)'">hello@myfitness.ae</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 pb-2 border-top d-flex flex-column flex-md-row align-items-center justify-content-between" style="border-color: rgba(255,255,255,0.05) !important;">
            <p class="mb-0" style="color: var(--color-text-muted); font-size: 0.95rem;">© {{ date('Y') }} MyFitness. All rights reserved.</p>
            <div class="d-flex gap-4 mt-3 mt-md-0">
                <a href="{{ route('front.privacyPolicy') }}" style="color: var(--color-text-muted); font-size: 0.95rem; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-muted)'">Privacy</a>
                <a href="{{ route('front.termsConditions') }}" style="color: var(--color-text-muted); font-size: 0.95rem; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='var(--color-primary)'" onmouseout="this.style.color='var(--color-text-muted)'">Terms</a>
            </div>
        </div>
    </div>
</footer>

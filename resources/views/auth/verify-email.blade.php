<x-front.main-layout>
    <div class="overlays"></div>
    
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list">Verify Email</li>
                        </ul>
                        <h2 class="banner-inner-title"> Verify Your Email </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup-area padding-top-40 padding-bottom-40">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="las la-envelope" style="font-size: 64px; color: #2c9fe0;"></i>
                        </div>
                        
                        <h3 class="mb-3">Thanks for signing up!</h3>
                        
                        <p class="mb-4" style="color: #666; font-size: 16px; line-height: 1.6;">
                            Before getting started, could you verify your email address by clicking on the link we just emailed to you? 
                            If you didn't receive the email, we will gladly send you another.
                        </p>

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success mb-4" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 12px 20px; border-radius: 4px;">
                                <i class="las la-check-circle"></i> A new verification link has been sent to the email address you provided during registration.
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success mb-4" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 12px 20px; border-radius: 4px;">
                                <i class="las la-check-circle"></i> {{ session('success') }}
                            </div>
                        @endif

                        <div class="mt-4">
                            <form method="POST" action="{{ route('verification.send') }}" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-primary" style="background-color: #2c9fe0; border-color: #2c9fe0; padding: 12px 30px; font-size: 16px;">
                                    <i class="las la-paper-plane"></i> Resend Verification Email
                                </button>
                            </form>
                        </div>

                        <div class="mt-4">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-link" style="color: #666; text-decoration: underline; padding: 0;">
                                    <i class="las la-sign-out-alt"></i> Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front.main-layout>

<x-front.main-layout>
    <div class="overlays"></div>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="{{ url('/') }}"> Home </a></li>
                            <li class="list">Forgot Password</li>
                        </ul>
                        <h1 class="banner-inner-title"> Forgot Password </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <h3 class="signup-title"> Forgot Password </h3>
                    <p class="text-sm text-gray-600 mb-4">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.') }}
                    </p>

                    {{-- ✅ Session Status --}}
                    @if (session('status'))
                        <div class="single-signup margin-top-20">
                            <span class="text-green-600 font-medium">
                                {{ session('status') }}
                            </span>
                        </div>
                    @endif

                    <form class="signup-forms" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Your Email* </label>
                            <input class="form--control"
                                   type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autofocus
                                   placeholder="Enter Your Email">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"> Send Reset Link </button>
                        <span class="bottom-register"> Don’t have Account? 
                            <a class="resgister-link" href="{{ route('register') }}"> Register </a> 
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-front.main-layout>

<x-front.main-layout>
    <div class="overlays"></div>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="{{ url('/') }}"> Home </a></li>
                            <li class="list">Reset Password</li>
                        </ul>
                        <h1 class="banner-inner-title"> Reset Password </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <h3 class="signup-title"> Reset Password </h3>

                    {{-- ✅ Session Status --}}
                    @if (session('status'))
                        <div class="single-signup margin-top-20">
                            <span class="text-green-600 font-medium">
                                {{ session('status') }}
                            </span>
                        </div>
                    @endif

                    <form class="signup-forms" method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Hidden Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email -->
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Email* </label>
                            <input class="form--control"
                                   type="email"
                                   name="email"
                                   value="{{ old('email', $request->email) }}"
                                   required
                                   autofocus
                                   autocomplete="username"
                                   placeholder="Enter Your Email">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> New Password* </label>
                            <input class="form--control"
                                   type="password"
                                   name="password"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Enter New Password">
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Confirm Password* </label>
                            <input class="form--control"
                                   type="password"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Confirm New Password">
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"> Reset Password </button>
                        <span class="bottom-register"> Don’t have Account? 
                            <a class="resgister-link" href="{{ route('register') }}"> Register </a> 
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-front.main-layout>  
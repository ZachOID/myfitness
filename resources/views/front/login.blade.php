<x-front.main-layout>
    <div class="overlays"></div>
    <style>
        .social-btn {
            display: table-cell;
            padding: 15px 10px 0 0;
        }

        a.social-login {
            all: unset;
            cursor: pointer;
            padding: 10px;
            display: flex;
            width: 240px;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background-color:
                #f9f9f9;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 3px;
        }

        a.social-login:hover {
            background-color:
                #ffffff;
        }

        .social-btn img {
            width: 50px;
            margin-right: 5px;

        }

        .box-password {
            position: relative;
        }

        .box-password .show-pass,
        .box-password .show-pass2 {
            position: absolute;
            right: 16px;
            top: 16px;
            cursor: pointer;
            font-size: 20px;
        }

        .box-password .show-pass .la-eye,
        .box-password .show-pass2 .la-eye {
            display: none;
        }

        .box-password .show-pass.active .la-eye,
        .box-password .show-pass2.active .la-eye {
            display: inline-block;
        }

        .box-password .show-pass.active .la-eye-slash,
        .box-password .show-pass2.active .la-eye-slash {
            display: none;
        }
    </style>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list">Login</li>
                        </ul>
                        <h1 class="banner-inner-title"> Login </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="signup-area padding-top-40 padding-bottom-40">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <form class="signup-forms" action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Display session error (e.g., invalid credentials) -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Email* </label>
                            <input class="form--control @error('email') is-invalid @enderror" type="email"
                                name="email" onkeyup="return forceLower(this);" value="{{ old('email') }}" required
                                placeholder="Enter Your Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Password* </label>
                            <div class="box-password">
                                <input class="form--control password-field @error('password') is-invalid @enderror"
                                    type="password" name="password" required placeholder="Type Password">
                                <span class="show-pass">
                                    <i class="la la-eye"></i>
                                    <i class="la la-eye-slash"></i>
                                </span>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="hidden" name="type" value="login">

                        <div class="signup-checkbox">
                            <div class="checkbox-inlines">
                                <input class="check-input" type="checkbox" id="check8" name="remember">
                                <label class="checkbox-label" for="check8"> Remember me </label>
                            </div>
                            <div class="forgot-btn">
                                <a href="{{ route('front.forgot') }}" class="forgot-pass"> Forgot Password? </a>
                            </div>
                        </div>

                        <button type="submit"> Login Now </button>

                        <span class="bottom-register"> Don't have Account?
                            <a class="resgister-link" href="{{ route('front.register') }}"> Register </a>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-front.main-layout>

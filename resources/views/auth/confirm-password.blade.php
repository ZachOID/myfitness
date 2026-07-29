<div class="signup-contents">
    <h3 class="signup-title"> Confirm Password </h3>
    <p class="text-sm text-gray-600 mb-4">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </p>

    @if (session('status'))
        <div class="single-signup margin-top-20">
            <span class="text-green-600 font-medium">
                {{ session('status') }}
            </span>
        </div>
    @endif

    <form class="signup-forms" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="single-signup margin-top-30">
            <label class="signup-label"> Password* </label>
            <input class="form--control"
                   type="password"
                   name="password"
                   required
                   autocomplete="current-password"
                   placeholder="Enter Your Password">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"> Confirm </button>
        <span class="bottom-register"> Don’t have Account? 
            <a class="resgister-link" href="{{ route('register') }}"> Register </a> 
        </span>
    </form>
</div>

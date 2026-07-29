<x-front.main-layout>
    <div class="overlays"></div>
    <style>
        .glyphicon-remove {
            color: #000000;
        }

        .glyphicon-ok {
            color: #1dbf73;
        }

        .glyphicon-remove:before {
            content: "\f057";
            font-family: 'Line Awesome Free';
            margin-right: 5px;
            font-size: 16px;
        }

        .glyphicon-ok:before {
            content: "\f058";
            font-family: 'Line Awesome Free';
            margin-right: 5px;
            font-size: 16px;
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
                            <li class="list">Register</li>
                        </ul>
                        <h2 class="banner-inner-title"> Register </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="signup-area padding-top-40 padding-bottom-40">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <form class="signup-forms" action="{{ route('register') }}" method="POST" id="register"
                        onsubmit="if (typeof CheckPassword !== 'undefined') { return CheckPassword(this); } return true;">
                        @csrf
                        <fieldset class="fieldset-info">
                            <div class="information-all">
                                <div class="info-forms">
                                    <div class="single-forms margin-top-30">

                                        <div class="single-content">
                                            <label class="forms-label"> First Name* </label>
                                            <input class="form--control @error('first_name') is-invalid @enderror" type="text" pattern="[A-Za-z]{2,}"
                                                title="Letters only" name="first_name" required placeholder="First Name"
                                                value="{{ old('first_name') }}">
                                            @error('first_name')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="single-content">
                                            <label class="forms-label"> Last Name* </label>
                                            <input class="form--control @error('last_name') is-invalid @enderror" type="text" name="last_name"
                                                pattern="[A-Z a-z]{2,}" title="Letters only" required
                                                placeholder="Last Name" value="{{ old('last_name') }}">
                                            @error('last_name')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="single-forms margin-top-30">
                                        <div class="single-content">
                                            <label class="forms-label"> Email Address* </label>
                                            <input class="form--control @error('email') is-invalid @enderror" type="email" name="email" required
                                                placeholder="Type Email" onkeyup="return forceLower(this);"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="single-content">
                                            <label class="forms-label"> Mobile Number* </label>
                                            <input class="form--control"
                                                style="width: 52px; padding-left: 10px; padding-right: 10px;"
                                                type="text" value="+971" disabled><input class="form--control @error('phone') is-invalid @enderror"
                                                style="width: calc(100% - 52px);" type="tel" name="phone"
                                                pattern="5[0-9]{8}" maxlength="9" required
                                                placeholder="Enter Mobile Number"
                                                title="Please enter 9 digit number start with 5" value="{{ old('phone') }}">
                                            @error('phone')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="single-forms margin-top-30">
                                        <div class="single-content">
                                            <label class="forms-label"> Password* </label>
                                            <div class="box-password">
                                                <input class="form--control password-field @error('password') is-invalid @enderror" type="password"
                                                    id="pass" required name="password" placeholder="Type Password">
                                                <span class="show-pass">
                                                    <i class="la la-eye"></i>
                                                    <i class="la la-eye-slash"></i>
                                                </span>
                                            </div>
                                            @error('password')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="single-content">
                                            <label class="forms-label"> Confirm Password* </label>
                                            <div class="box-password">
                                                <input class="form--control password-field2 @error('cnf_password') is-invalid @enderror" type="password"
                                                    id="cnfpass" required name="cnf_password"
                                                    placeholder="Retype Password">
                                                <span class="show-pass2">
                                                    <i class="la la-eye"></i>
                                                    <i class="la la-eye-slash"></i>
                                                </span>
                                            </div>
                                            @error('cnf_password')
                                                <span class="form-error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="single-forms margin-top-30">
                                        <div class="single-content">
                                            <div id="Length" class="glyphicon glyphicon-remove">Must be at least 8
                                                charcters</div>
                                            <div id="UpperCase" class="glyphicon glyphicon-remove">Must have atleast 1
                                                alphabet case character
                                            </div>
                                            <div id="Numbers" class="glyphicon glyphicon-remove">Must have atleast 1
                                                numeric character</div>
                                        </div>
                                    </div>

                                                            <button type="submit"> Register Now </button>

                                    <div class="btn-wrapper margin-top-10" id="wpass"
                                        style="color:#ff0000;display:none;">
                                        Password should be minimum 8 characters which contain at least one alphabet and
                                        one numeric digit
                                    </div>

                                    <span class="bottom-register"> Already have an Account?
                                        <a class="resgister-link"
                                            href="{{ route('front.login') }}">
                                            Login
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Password validation function
        function CheckPassword(form) {
            var decimal = /^(?=.*\d)(?=.*[a-z A-Z]).{8,50}$/;
            var password = document.getElementById("pass").value;
            var cnf_password = document.getElementById("cnfpass").value;

            if (password.match(decimal)) {
                if (password == cnf_password) {
                    return true;
                } else {
                    var wpass = document.getElementById("wpass");
                    if (wpass) {
                        wpass.innerHTML = "Password and confirm password does not match";
                        wpass.style.display = "block";
                        setTimeout(function() { wpass.style.display = "none"; }, 8000);
                    }
                    return false;
                }
            } else {
                var wpass = document.getElementById("wpass");
                if (wpass) {
                    wpass.innerHTML = "Password should be minimum 8 characters which contain at least one alphabet and one numeric digit";
                    wpass.style.display = "block";
                    setTimeout(function() { wpass.style.display = "none"; }, 8000);
                }
                return false;
            }
        }

        // Password validation on keyup
        function ValidatePassword() {
            var rules = [{
                Pattern: "[A-Z a-z]",
                Target: "UpperCase"
            }, {
                Pattern: "[0-9]",
                Target: "Numbers"
            }];

            var password = $("#pass").val();

            // Length Check
            $("#Length").removeClass(password.length > 7 ? "glyphicon-remove" : "glyphicon-ok");
            $("#Length").addClass(password.length > 7 ? "glyphicon-ok" : "glyphicon-remove");

            // Iterate remaining rules
            for (var i = 0; i < rules.length; i++) {
                $("#" + rules[i].Target).removeClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-remove" : "glyphicon-ok");
                $("#" + rules[i].Target).addClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-ok" : "glyphicon-remove");
            }
        }

        // Password visibility toggle
        $(document).ready(function() {
            // Bind password validation on keyup
            $("#pass").on('keyup', ValidatePassword);

            // Password visibility toggle for password field
            $(".show-pass").on("click", function() {
                $(this).toggleClass("active");
                var passwordField = $(this).siblings(".password-field");
                if (passwordField.attr("type") == "password") {
                    passwordField.attr("type", "text");
                } else {
                    passwordField.attr("type", "password");
                }
            });

            // Password visibility toggle for confirm password field
            $(".show-pass2").on("click", function() {
                $(this).toggleClass("active");
                var passwordField = $(this).siblings(".password-field2");
                if (passwordField.attr("type") == "password") {
                    passwordField.attr("type", "text");
                } else {
                    passwordField.attr("type", "password");
                }
            });

            // Ensure password fields are not modified before submission
            $("#register").on("submit", function(e) {
                // Get the actual password values directly from the input elements
                var passwordInput = document.getElementById("pass");
                var cnfPasswordInput = document.getElementById("cnfpass");

                // Get the actual values
                var password = passwordInput.value;
                var cnfPassword = cnfPasswordInput.value;

                // Debug: Log the password length (not the actual password for security)
                console.log("Password length:", password.length);

                // Ensure password is not empty and not just asterisks
                if (!password || password.length === 0) {
                    e.preventDefault();
                    alert("Please enter a password.");
                    return false;
                }

                // Check if password contains only asterisks (which would indicate a problem)
                if (password.match(/^\*+$/)) {
                    e.preventDefault();
                    alert("Password field error detected. Please refresh the page and try again.");
                    return false;
                }

                // Ensure the password field type is correct before submission
                // If it's been changed to text for visibility, change it back to password
                // to ensure the value is preserved correctly
                if (passwordInput.type === "text") {
                    // Temporarily change to password to ensure value is preserved
                    passwordInput.type = "password";
                    // The value should remain the same
                }

                if (cnfPasswordInput.type === "text") {
                    cnfPasswordInput.type = "password";
                }

                // Validate password format
                var decimal = /^(?=.*\d)(?=.*[a-z A-Z]).{8,50}$/;
                if (!password.match(decimal)) {
                    e.preventDefault();
                    var wpass = document.getElementById("wpass");
                    if (wpass) {
                        wpass.innerHTML = "Password should be minimum 8 characters which contain at least one alphabet and one numeric digit";
                        wpass.style.display = "block";
                    }
                    return false;
                }

                if (password !== cnfPassword) {
                    e.preventDefault();
                    var wpass = document.getElementById("wpass");
                    if (wpass) {
                        wpass.innerHTML = "Password and confirm password does not match";
                        wpass.style.display = "block";
                    }
                    return false;
                }

                // All checks passed, allow form submission
                return true;
            });
        });
    </script>
</x-front.main-layout>

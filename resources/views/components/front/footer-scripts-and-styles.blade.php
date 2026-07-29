<style>
    .wa-widget-send-button {
        border: 2px solid #4dc247 !important;
    }
    .whatsapp-chat-button {
        position: fixed;
        right: 30px;
        bottom: 90px;
        background-color: #4dc247;
        border-radius: 25px;
        padding: 10px 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        z-index: 1000;
        color: #fff;
        font-weight: bold;
        font-family: sans-serif;
    }
    .whatsapp-chat-button svg {
        width: 30px;
        height: 30px;
        margin-right: 10px;
        fill: #fff;
    }
</style>

<div class="whatsapp-chat-button">
    <!-- WhatsApp SVG icon -->
    <svg viewBox="0 0 32 32">
        <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.828.739 5.468 2.017 7.75l-2.148 7.25 7.438-2.125c2.247 1.202 4.782 1.875 7.693 1.875 8.837 0 16-7.163 16-16s-7.163-16-16-16zm8.268 23.572c-.373 1.049-2.195 2.001-3.044 2.136-.809.127-1.739.181-5.18-1.276-4.066-1.747-6.676-6.19-6.869-6.468-.19-.276-1.53-2.066-1.53-3.942 0-1.877.973-2.799 1.316-3.177.337-.373.74-.466 1.01-.466.262 0 .521 0 .748.002.247.003.58-.093.907.698.332.805 1.13 2.786 1.234 2.995.1.211.168.468.033.754-.133.285-.199.459-.401.72-.199.26-.42.575-.597.77-.193.214-.394.449-.126.875.267.424 1.18 1.93 2.537 3.13 1.745 1.493 3.13 1.93 3.467 2.144.337.214.533.178.726-.106.193-.285.827-1.042 1.047-1.4.219-.354.439-.295.745-.176.306.118 1.92.905 2.257 1.069.336.164.562.25.644.39.082.142.082.816-.29 1.865z"/>
    </svg>
    <span>Start Chat</span>
</div>

<script>
    document.querySelector('.whatsapp-chat-button').addEventListener('click', function() {
        var phone = '+971585858348';
        var message = encodeURIComponent("Hi there! I am interested in your service");
        var url = `https://wa.me/${phone}?text=${message}`;
        window.open(url, '_blank');
    });
</script>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/slick.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- CSRF Token Setup -->
    <script>
        // Setup CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Ensure CheckPassword function exists or allow form submission
        if (typeof CheckPassword === 'undefined') {
            window.CheckPassword = function(form) {
                // If function doesn't exist, allow form submission
                return true;
            };
        }

        function onSubmit(token) {
            var chk = CheckPassword(token);
            if (chk === true) {
                document.getElementById("register").submit();
            }
        }
    </script>

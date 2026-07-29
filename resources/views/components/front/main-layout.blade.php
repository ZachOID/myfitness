@props([
    'title' => 'Personal Trainer at Home in Dubai | Private Fitness & Yoga Instructors|MyFitness',
    'description' =>
        'Looking for a personal trainer in Dubai? Get customized fitness sessions at home with certified personal trainers, yoga instructors, and private fitness coaches near you.',
    'keywords' => 'Fitness, Personal Trainer, Yoga, Sports Massage, Online Booking',
])

<x-front.header-styles-and-scripts :title="$title" :description="$description" :keywords="$keywords" />

<x-front.preloader />

<body>
    <x-front.header />
    {{ $slot }}
    <x-front.footer />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success') || session('error'))
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: '{{ session('success') ? 'success' : 'error' }}',
                title: {!! json_encode(session('success') ?? session('error')) !!},
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    // Prevent nice-select from initializing on any elements inside SweetAlert
                }
            });
        @endif
    </script>

</body>

</html>

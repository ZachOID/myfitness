<x-front.main-layout>

    <div class="overlays"></div>
    <style>
        button:disabled,
        button[disabled] {
            border: 1px solid #999999;
            background-color: #cccccc;
            color: #666666;
        }

        .xdsoft_datetimepicker .xdsoft_timepicker {
            width: 250px;
            float: left;
            text-align: center;
            margin-left: 8px;
            margin-top: 0;
        }
    </style>

    <section class="service-details-area padding-top-20 padding-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 margin-bottom-20">
                    <div class="banner-inner-contents margin-bottom-20">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"> <a href="{{ route('front.services') }}"> Service Listing </a> </li>
                            <li class="list"> {{ $service->name }} </li>
                        </ul>
                        <h1 class="banner-inner-title"> {{ $service->name }} </h1>
                    </div>
                    <div class="service-details-wrapper">
                        <div class="service-details-inner">
                            <div class="details-thumb">
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }} "
                                    width="730" height="auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="z-index:9;">
                    <form action="{{ route('front.order.create', $service->slug) }}" method="post">
                        @csrf
                        <div class="service-details-package margin-top-30">
                            <div class="single-packages">
                                <li id="mprice">
                                    <span class="offer">AED {{ $service->price_before }}</span>
                                </li>
                                <ul class="package-price" id="packg">
                                    <li id="sprice">AED&nbsp;{{ $service->price_after }}</li>
                                </ul>
                                <div class="Info-overview margin-top-20" style="display: table; width: 100%;"
                                    id="pack">
                                    <select name="sessions_number" id="package" required>
                                        <option value="" disabled >Select Package</option>
                                        <option value="1">1 Session</option>
                                        <option value="5">5 sessions</option>
                                        <option value="10">10 sessions</option>
                                        <option value="20">20 Sessions</option>
                                    </select>
                                </div>

                                <div class="Info-overview margin-top-20" style="display: table; width: 100%;"
                                    id="pack">
                                    <select name="is_online" id="type" required>
                                        <option value="" disabled selected>Select Type</option>
                                        <option value="1">Online</option>
                                        <option value="0">Offline</option>
                                    </select>
                                </div>

                                <div class="Info-overview margin-top-20" style="display: none; width: 100%;"
                                    id="area">
                                    <select name="area_id" id="sublocation">
                                        <option value="" disabled>Select Area</option>
                                        @foreach ($service->areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="Info-overview margin-top-10" style="display: table; width: 100%;"
                                    id="calendar">
                                    <div class="single-info-input">
                                        <label class="info-title"> Select your prefered date </label>
                                        <input type="text" required autocomplete="off" name="dtime"
                                            class="datetimepicker form-control" id="dtime" value="">
                                    </div>
                                </div>
                                <button type="submit" id="book" class="margin-top-20"> Book Appoinment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 margin-bottom-20">
                    <div class="service-details-wrapper">
                        <div class="service-details-inner">
                            <div class="details-tabs tabs margin-top-20">
                                <h5 data-tab="tab1" class="list active">
                                    Overview
                                </h5>
                            </div>
                            <div class="tab-content-item active" id="tab1">
                                <div class="details-content-tab padding-top-10">
                                    {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="another-details-wrapper padding-top-40">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.js"></script>
    <script>
        flatpickr("#dtime", {
            enableTime: true,
            minDate: "today",
            dateFormat: "Y-m-d H:i",
            minTime: "08:00",
            maxTime: "21:00"
        });

        $(document).ready(function() {
            // Handle package price updates
            $('#package').on('change', function() {
                let sessions = $(this).val() || 1;
                let priceAfter = sessions * {{ $service->price_after }};
                let priceBefore = sessions * {{ $service->price_before }};

                $('#sprice').text("AED " + priceAfter);
                $('#mprice').text("AED " + priceBefore);
            });

            // Handle online/offline type selection
            $('#type').on('change', function() {
                if ($(this).val() == '1') { // Online
                    $('#area').hide();
                } else if ($(this).val() == '0') { // Offline
                    $('#area').show();
                }
            });
        });
    </script>



</x-front.main-layout>

<x-front.main-layout>
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="/"> Home </a></li>
                            <li class="list"><a href="{{ route('front.dashboard') }}">Dashboard</a></li>
                            <li class="list active">Address Book</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <x-front.user-dashboard.side-bar />
                <div class="dashboard-right">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard-settings dashboard-flex-shwing">
                                <h2 class="dashboards-title"> Address Book</h2>
                                <div class="btn-wrapper">
                                    <a href="{{ route('front.address-create') }}" class="cmn-btn btn-bg-1"> Add New Address
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="edit-profile">
                                <div class="profile-info-dashboard">
                                    <div class="row">
                                        @if ($addresses->count() > 0)
                                            @foreach ($addresses as $address)
                                                <div class="col-xl-4 col-md-6 margin-top-30">
                                                    <div class="single-service service-two style-02 wow fadeInUp"
                                                        data-wow-delay=".2s"
                                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                        <div class="services-contents">
                                                            <h4 class="common-title-two hover-color-two"> Address 1
                                                            </h4>
                                                            <p class="">Kaitlin Weissnat </p>
                                                            <p class="">521 Pacocha-Koch Mills </p>
                                                            <p class="">Al Ain, Apopka, 00694 </p>
                                                            <p class="">522232753 </p>
                                                            <div class="service-price-wrapper mt-4">
                                                                <div class="btn-wrapper">
                                                                    <a href="{{ route('front.address-edit', $address->id) }}"
                                                                        class="cmn-btn btn-bg-2 btn-medium"> Edit Now
                                                                    </a>
                                                                </div>
                                                                <div class="btn-wrapper">
                                                                    <form action="{{ route('front.address-delete',$address->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="cmn-btn btn-bg-3 btn-medium"
                                                                            onclick="return confirm('Are you sure to delete this address?');">
                                                                            Delete </a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-xl-12 col-md-12 margin-top-30">
                                                <p>No additional address found in your address book. Please add shipping
                                                    addresses</p>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-front.main-layout>

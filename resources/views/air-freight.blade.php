<!-- resources/views/layouts/app.blade.php -->
@extends('layouts.app')

@section('Title', 'Air Freight - Clear Way Custom Clearance')

@section('MainContent')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg05">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services - Air freight</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">Air freight</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('img/pics/img28.jpg') }}" alt="" />

                    <br />

                    <div class="custom-heading">
                        <h2>air freight</h2>
                    </div>

                    <p>
                        On the other hand, we denounce with righteous
                        indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment,
                        so blinded by desire, that they cannot foresee the
                        pain and trouble that are bound to ensue; and equal
                        blame belongs to those who fail in their duty
                        through weakness of will, which is the same as
                        saying through shrinking from toil and pain. These
                        cases are perfectly simple and easy to distinguish.
                        In a free hour, when our power of choice is
                        untrammelled and when nothing prevents our being
                        able to do what we like best, every pleasure is to
                        be welcomed and every pain avoided. But in certain
                        circumstances and owing to the claims of duty or
                        the obligations of business it will frequently occur
                        that pleasures have to be repudiated and annoyances
                        accepted. The wise man therefore always holds in
                        these matters to this principle of selection: he
                        rejects pleasures to secure other greater pleasures,
                        or else he endures pains to avoid worse pains.
                    </p>

                    <br /><br />


                    <div class="row">
                        <div class="col-md-6 clearfix">
                            <h3>Our locations</h3>

                            <img src="{{ asset('img/pics/locations.jpg') }}" alt="locations illustration" />

                            <br />

                            <p>
                                Trucking Co. covers over 150 locations all
                                over the globe plus numerous logistic
                                partner companies from different areas of
                                supply chain.
                            </p>

                            <a href="{{ route('contact') }}" class="read-more">
                                <span>
                                    View all locations
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <h3>Your benefits</h3>

                            <p>
                                A wonderful serenity has taken possession
                                of my entire soul, like these sweet mornings
                                of spring which I enjoy with my whole heart.
                            </p>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Providing high quality transportation services to all of our clients
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Invest in our employees to provide better service and company growth
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Worry about enviroment according to latest industry standards
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Safety as top priority in assuring safe work procedures
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Investing in technology to provide fast, acurate and cost-effective service
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Living up to highest industry standards
                                </li>
                            </ul><!-- .fa-ul end -->
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->

                    <div class="custom-heading">
                        <h3>industries covered</h3>
                    </div><!-- .custom-heading end -->

                    <ul class="service-list-big-icons clearfix">
                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('img/svg/pi-cargo-retail.svg') }}" alt="retail svg icon" />
                            </div>

                            <h4>Textile Logistics</h4>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('img/svg/pi-food-beverage.svg') }}" alt="food and beverage svg icon" />
                            </div>

                            <h4>Retail Logistics</h4>
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="{{ asset('img/svg/pi-mark-energy.svg') }}" alt="retail svg icon" />
                            </div>

                            <h4>Oil & Gas Logistics</h4>
                        </li>
                    </ul><!-- .service-list-big-icons end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection

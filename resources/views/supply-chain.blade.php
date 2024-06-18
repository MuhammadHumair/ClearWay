<!-- resources/views/layouts/app.blade.php -->
@extends('layouts.app')

@section('Title', 'Supply Chain Managment - Clear Way Custom Clearance')

@section('MainContent')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services - Supply Chain Management</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>

                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">Supply chain management</a>
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
                <div class="col-md-8">
                    <div class="custom-heading">
                        <h2>the complete solution</h2>
                    </div>

                    <img class="float-right animated triggerAnimation" data-animate="zoomIn"
                        src="{{ asset('img/pics/img36.jpg') }}" alt="" />

                    <p class="text-big">
                        We provide complete supply chain management
                        solutions tailored to fit your needs. From planning
                        and analysis to quality control.
                    </p>

                    <p>
                        This is one more option for a homepage. As you can
                        see there are different styles for each company
                        size and requirement. You can choose from eight
                        homepage styles or create your own, the choices are
                        unlimited. We have investigated this industry and
                        tried to provide you everything you need in a
                        website design for a logistics company.
                    </p>
                </div><!-- .col-md-8 end -->

                <div class="col-md-4 custom-bkg bkg-light-blue">
                    <h3>Supply chain management objectives:</h3>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Creating value for a customer
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Building a strong infrastructure
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Synchronized demand and supply
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Quality measurement and monitoring
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-4.custom-bkg end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-6 clearfix">
                    <div class="custom-heading">
                        <h2>taking it step by step</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="service-list-big-icons-details">
                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn"
                                    src="{{ asset('img/svg/pi-checklist-2.svg') }}" alt="checklist icon" />
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>Business Analysis</h4>

                                <p>
                                    We examine your business to understand
                                    how it works so we could make a detailed
                                    supply chain management design.
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn"
                                    src="{{ asset('img/svg/pi-forklift-truck-5.svg') }}}" alt="forklift truck icon" />
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>Detailed Planning</h4>

                                <p>
                                    We desine facilities, means of
                                    transport, best transport routes and
                                    then optimize it.
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn"
                                    src="{{ asset('img/svg/pi-globe-5.svg') }}" alt="globe icon" />
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>Implementation</h4>

                                <p>
                                    Implementation of designed custom supply
                                    chain, including intelligent software
                                    for managing it.
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn"
                                    src="{{ asset('img/svg/pi-touch-desktop.svg') }}" alt="touch icon" />
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>Quality control and monitoring</h4>

                                <p>
                                    With intelligent software solutions you
                                    can know your supplies and demand status
                                    and what is happening in all chain of
                                    transportation.
                                </p>
                            </div><!-- .service-details end -->
                        </li>
                    </ul><!-- .service-list-big-icons-details end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 custom-bkg bkg-light-blue">
                    <div class="custom-heading">
                        <h2>your benefits</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        But in certain circumstances and owing to the
                        claims of duty or the obligations of business it
                        will frequently occur that pleasures have to be
                        repudiated and annoyances accepted. The wise man
                        therefore always holds in these matters to this
                        principle of selection: he rejects pleasures to
                        secure other greater pleasures, or else he endures
                        pains to avoid worse pains.
                    </p>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Higher quality service by optimizing transport
                            routes, means of transportation and reducing costs
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Strong optimized supply chain infrastructure
                            that will make a competitive advantage to your business
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Synchronized demand and supply which will enable
                            easier and more accurate predictions of your
                            clients needs
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Effective quality measurement and monitoring
                            will enable you to reduce costs and optimize your business.
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content parallax parallax01 dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action clearfix">
                        <div class="text">
                            <h2>Providing first class logistics services worldwide.</h2>
                            <p>
                                This is Trucking, powerful niche template
                                dedicated to logistics and trucking
                                companies. This is layout with Layered
                                slider. As you can see there are a lot of
                                design options. Simply choose the one that
                                suits your needs.
                            </p>
                        </div><!-- .text end -->

                        <a href="{{ route('contact') }}" class="btn btn-big">
                            <span>get a quote</span>
                        </a>
                    </div><!-- .call-to-action end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.parallax end -->
@endsection

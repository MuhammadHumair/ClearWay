<!-- resources/views/layouts/app.blade.php -->
@extends('layouts.app')

@section('Title', 'Become A Driver - Clear Way Custom Clearance')

@section('MainContent')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Become a part of our team</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">Online Driver Application</a>
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
                    <div class="custom-heading">
                        <h2>want to become our driver?</h2>
                    </div>

                    <img class="float-right" src="{{ asset('img/pics/img25.jpg') }}" width="360" alt="" />

                    <p>
                        I throw myself down among the tall grass by the
                        trickling stream; and, as I lie close to the earth,
                        a thousand unknown plants are noticed by me: when I
                        hear the buzz of the little world among the stalks,
                        and grow familiar with the countless indescribable
                        forms of the insects and flies, then I feel the
                        presence of the Almighty, who formed us in his own
                        image, and the breath.
                        On the other hand, we denounce with righteous
                        indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment,
                        so blinded by desire, that they cannot foresee the
                        pain and trouble that are bound to ensue; and equal
                        blame belongs to those who fail in their duty.
                    </p>

                    <br />

                    <div class="custom-heading">
                        <h2>Online Driver Application</h2>
                    </div><!-- .custom-heading end -->

                    <form class="wpcf7 driver-app-form clearfix">
                        <fieldset>
                            <label for="Driver First Name"><span class="required">*</span> Driver first name:</label>

                            <input type="text" class="wpcf7-text" id="driver-name">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Last Name"><span class="required">*</span> Driver last name:</label>

                            <input type="text" class="wpcf7-text" id="driver-last-name">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Last Name"><span class="required">*</span> Driver last name:</label>

                            <input type="text" class="wpcf7-text" id="driver-date-birth" placeholder="mm/dd/yy">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Type"><span class="required">*</span> You are:</label>

                            <select class="wpcf7-select" id="driver-type">
                                <option value="Owner">Owner</option>
                                <option value="Company driver">Company driver</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <label for="Driver License Issued"><span class="required">*</span> Driver's license date
                                issued:</label>

                            <input class="wpcf7-text" id="driver-licence-period">
                        </fieldset>

                        <fieldset>
                            <label for="Type of Driver License"><span class="required">*</span> Type of driver's
                                licence:</label>

                            <input class="wpcf7-text" id="driver-licence-type">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Phone Number"><span class="required">*</span> Your phone number:</label>

                            <input class="wpcf7-text" id="driver-phone">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Cell Number"><span class="required">*</span> Your cell number:</label>

                            <input class="wpcf7-text" id="driver-cell">
                        </fieldset>

                        <fieldset>
                            <label for="Driver Years Of Experience"><span class="required">*</span> Years of
                                experience:</label>

                            <input class="wpcf7-text" id="driver-experience" placeholder="Minimum 3...">
                        </fieldset>

                        <input type="submit" class="wpcf7-submit" value="apply now">
                    </form><!-- .wpcf7 end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02 simple">
                        <h2>Clients & Awards</h2>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="{{ asset('img/pics/client01.png') }}" alt="" /></div>
                            <div class="owl-item"><img src="{{ asset('img/pics/client02.png') }}" alt="" /></div>
                            <div class="owl-item"><img src="{{ asset('img/pics/client03.png') }}" alt="" /></div>
                            <div class="owl-item"><img src="{{ asset('img/pics/client04.png') }}" alt="" /></div>
                            <div class="owl-item"><img src="{{ asset('img/pics/client05.png') }}" alt="" /></div>
                            <div class="owl-item"><img src="{{ asset('img/pics/client06.png') }}" alt="" /></div>
                        </div><!-- .owl-carousel.owl-carousel-navigation end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection

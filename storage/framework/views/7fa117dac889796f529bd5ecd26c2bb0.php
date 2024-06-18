<!-- resources/views/layouts/app.blade.php -->


<?php $__env->startSection('Title', 'Home - Clear Way Custom Clearance'); ?>

<?php $__env->startSection('MainContent'); ?>
    <div class="master-wrapper">
        <!-- .master-slider start -->
        <div id="masterslider" class="master-slider ms-skin-default mb-0">
            <!-- slide start -->
            <div class="ms-slide" data-delay="5">
                <img src="<?php echo e(asset('masterslider/blank.gif')); ?>" data-src="<?php echo e(asset('img/slider/slide05-05.jpg')); ?>"
                    alt="" />

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0; top: 125px;" data-type="text"
                    data-delay="500">
                    air freight
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0; top: 185px;" data-type="text"
                    data-delay="800">
                    overland
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0px; top: 245px;" data-type="text"
                    data-delay="1100">
                    or sea
                </h2>

                <img class="ms-layer" src="<?php echo e(asset('masterslider/blank.gif')); ?>"
                    data-src="<?php echo e(asset('img/slider/slide05-04.png')); ?>" alt="" style="left: 350px; top: 160px;"
                    data-type="image" data-delay="1300" data-effect="right(short)" />

                <img class="ms-layer" src="<?php echo e(asset('masterslider/blank.gif')); ?>"
                    data-src="<?php echo e(asset('img/slider/slide05-03.png')); ?>" alt="" style="left: 770px; top: 85px;"
                    data-type="image" data-delay="1500" data-effect="scalefrom(0.7,0.7,380,450,br,false)" />

                <p class="ms-layer pi-text" style="left: 0px; top: 320px;" data-type="text" data-delay="1600">
                    First class freight services!
                </p>
            </div><!-- slide end -->

            <!-- slide start -->
            <div class="ms-slide" data-delay="5">
                <img src="<?php echo e(asset('masterslider/blank.gif')); ?>" data-src="<?php echo e(asset('img/slider/slide05-01.jpg')); ?>"
                    alt="" />

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0; top: 125px;" data-type="text"
                    data-delay="500">
                    worldwide
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0; top: 185px;" data-type="text"
                    data-delay="800">
                    freight
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark" style="left: 0px; top: 245px;" data-type="text"
                    data-delay="1100">
                    services
                </h2>

                <img class="ms-layer" src="<?php echo e(asset('masterslider/blank.gif')); ?>"
                    data-src="<?php echo e(asset('img/slider/slide05-02.png')); ?>" alt="" style="left: 0px; top: 10px;"
                    data-type="image" data-delay="1900" data-effect="right(short,false)" data-duration="500"
                    data-hide-effect="fade" />

                <p class="ms-layer pi-text" style="left: 0px; top: 305px;" data-type="text" data-delay="1300">
                    Road, air train or overseas
                </p>

                <p class="ms-layer pi-text" style="left: 0px; top: 340px;" data-type="text" data-delay="1600">
                    We got it covered
                </p>
            </div><!-- slide end -->
        </div><!-- .master-slider end -->
    </div><!-- .master-wrapper end -->

    <div class="page-content custom-bkg bkg-grey mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>Our services</h2>
                        <p>TAILORED LOGISTIC SERVICES</p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img01.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('overland-transportation')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>GROUND SHIPPING</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We have a wide experience in overland
                                industry specific logistic solutions like
                                pharmaceutical logistics, retail and
                                automotive logistics by train, ocean or road.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img02.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('ocean-freight')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>OCEAN FREIGHT</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We bring your goods safely to worldwide
                                destinations with our great sea fright
                                services. We offer LLC and FLC shipments
                                that are fast and effective with no delays.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img03.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('air-freight')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>INTERNATIONAL AIR FREIGHT</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                We provide full supply chain management
                                package including cost effective and fast
                                air freight. You can also combine this
                                package with other means of transportation.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img13.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('contract-logistics')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>contract logistics</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                Need custom logistic service? We got it
                                covered. From overland, air, rail and sea
                                transportation. Fast, safe and accurate
                                shipment provided all over the globe.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img14.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('ware-housing')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>WAREHOUSING</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                Trucking offers intelligent warehouse
                                solution. Lower your storage and good
                                maintenance by using our modern and
                                intelligent warehouses. You can see all
                                locations on location page.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="<?php echo e(asset('img/pics/img15.jpg')); ?>" alt="Trucking" />

                            <a href="<?php echo e(route('consulting-services')); ?>" class="read-more02">
                                <span>
                                    Read more
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div><!-- .service-media end -->

                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>CONSULTING</h4>
                            </div><!-- .custom-heading end -->

                            <p>
                                Don't know what mean of transportation
                                would be right for you, or you need someone
                                for full supply chain management? Please
                                contact us. Our team of professionals will
                                be happy to help.
                            </p>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 clearfix">
                    <div class="custom-heading">
                        <h2>about us</h2>
                    </div><!-- .custom-heading end -->

                    <p class="text-big">
                        Welcome, we are Trucking, experienced logistics company
                        operating in over 150 countries across the world.
                    </p>

                    <p>
                        This is one more option for a homepage. As you can
                        see there are different styles for each company size
                        and requirement. You can choose from eight homepage
                        styles or create your own, the choices are unlimited.
                        We have investigated this industry and tried to
                        provide you everything you need in a website design
                        for a logistics company.
                    </p>

                    <a href="<?php echo e(route('about')); ?>" class="read-more">
                        <span>
                            Read more
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>our partners</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="clients-li clearfix">
                        <li><img src="<?php echo e(asset('img/pics/client01.png')); ?>" alt="" /></li>
                        <li><img src="<?php echo e(asset('img/pics/client02.png')); ?>" alt="" /></li>
                        <li><img src="<?php echo e(asset('img/pics/client03.png')); ?>" alt="" /></li>
                        <li><img src="<?php echo e(asset('img/pics/client04.png')); ?>" alt="" /></li>
                        <li><img src="<?php echo e(asset('img/pics/client05.png')); ?>" alt="" /></li>
                        <li><img src="<?php echo e(asset('img/pics/client06.png')); ?>" alt="" /></li>
                    </ul><!-- .clients-li end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content parallax parallax02 mb-70 dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02 simple">
                        <h2>The company promise</h2>
                    </div><!-- .custom-heading02 end -->

                    <div class="statement">
                        <p>
                            As a contractor we promise to take care of all
                            supply chain management, to make your shipments
                            travel safe, fast and on time.
                        </p>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-heading">
                        <h3>why choose us</h3>
                    </div><!-- .custom-heading end -->

                    <div class="accordion clearfix">

                        <!-- ACCODRION 1 -->
                        <div class="title active">
                            <a href="#" class="clearfix">
                                Exceptional design with wide range of layouts.
                            </a>
                        </div><!-- .title.active end -->

                        <div class="content clearfix">
                            <p>
                                Trucking is website template dedicated to
                                trucking and logistics companies. It offers
                                a wide range of different layouts and
                                elements to provide endless options of
                                arranging and displaying your content.
                            </p>
                        </div><!-- .content end -->

                        <!-- ACCODRION 2 -->
                        <div class="title">
                            <a href="#" class="clearfix">
                                Unlimited color options plus 10 predefined color combinations
                            </a>
                        </div><!-- .title.active end -->

                        <div class="content clearfix">
                            <p>
                                Trucking comes with 10 predefined color combinations
                                which you can use. There are two color layouts and
                                single color layouts. Icons you see on the services
                                are svg images and you can change it's color by
                                editing a single line in css file. All colors are
                                placed in separate css file to make your customization
                                quick and easy.
                            </p>
                        </div><!-- .content end -->

                        <!-- ACCODRION 3 -->
                        <div class="title">
                            <a href='#' class='clearfix'>
                                Appropriate for small and large trucking and logistics companies
                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">
                            <p>
                                Trucking includes several hompeage options
                                plus a great number of other pages so it can be used
                                for both small and large logistics and trucking
                                companies. There is a vehicle fleet gallery which is
                                specific for trucking companies and for example,
                                locations layout which is specific for large
                                logistics companies.
                            </p>
                        </div><!-- .content end -->

                        <!-- ACCODRION 4 -->
                        <div class="title">
                            <a href='#' class='clearfix'>
                                Regular updates with new features and options
                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">
                            <p>
                                We take care of our items and update them
                                on a regular basis. Weather there is a new
                                feature or a quick fix, the updates are quick.
                            </p>
                        </div><!-- .content end -->

                        <!-- ACCODRION 5 -->
                        <div class="title">
                            <a href='#' class='clearfix'>
                                Compatible with most popular and appropriate plugins
                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">
                            <p>
                                Trucking has working contact and email subscription
                                form included. We used classes from WordPress plugin
                                Contact form 7, so if you decide to purchase WordPress
                                version, you'll have your forms working. Locations
                                page includes google map with multiple locations, using
                                newest Google API. You can change your locations quick,
                                by replacing latitude and longitude in js code.
                            </p>
                        </div><!-- .content end -->

                        <!-- ACCODRION 6 -->
                        <div class="title">
                            <a href='#' class='clearfix'>
                                Interactive map solution for showing your locations
                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">
                            <p>
                                There are two possibilities of showcasing your
                                locations. With amazing master slider jQuery plugin,
                                where you can use image and interactive highlights or
                                with google maps, which you can see on locations.html
                                page.
                            </p>
                        </div><!-- .content end -->
                    </div><!-- .accordion end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="numbers-counter">
                                <div class="counter-container">
                                    <span class="timer number" data-to="158" data-speed="1500">158</span>

                                    <p>
                                        Countries worlwide
                                    </p>
                                </div><!-- .counter-container end -->
                            </div><!-- .numbers-counter end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4">
                            <div class="numbers-counter">
                                <div class="counter-container">
                                    <span class="timer number" data-to="227" data-speed="1500">227</span>

                                    <p>
                                        Packages a day
                                    </p>
                                </div><!-- .counter-container end -->
                            </div><!-- .numbers-counter end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4">
                            <div class="numbers-counter">
                                <div class="counter-container">
                                    <span class="timer number" data-to="3500" data-speed="1500">3500</span>

                                    <p>
                                        Satisfied customers
                                    </p>
                                </div><!-- .counter-container end -->
                            </div><!-- .numbers-counter end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-heading">
                                <h3>what our clients say</h3>
                            </div><!-- .custom-heading end -->

                            <div class="carousel-container">
                                <div id="testimonial-carousel" class="owl-carousel owl-carousel-navigation">
                                    <div class="owl-item">
                                        <div class="testimonial">
                                            <p>
                                                Best customer support and
                                                response time I have ever seen...
                                                not to mention a kick ass theme!
                                                Great feeling from this purchase.
                                                Thank you Pixel Industry!
                                            </p>

                                            <div class="testimonial-author">
                                                <p>
                                                    TRAVIS COPLAND, <br />
                                                    Transport & Logistics Solutions
                                                </p>
                                            </div><!-- .testimonial-author end -->
                                        </div><!-- .testimonial end -->
                                    </div><!-- .owl-item end -->

                                    <div class="owl-item">
                                        <div class="testimonial">
                                            <p>
                                                Thanks for developing
                                                products to help many people
                                                to work as I do. Thank you!
                                                Success for all! I did not
                                                need to use the support,
                                                this never happened to me.
                                                Pocket Theme bought today
                                                for another client, very
                                                good too! Hug!
                                            </p>

                                            <div class="testimonial-author">
                                                <p>
                                                    ADRIANOSP, <br />
                                                    Themeforest member
                                                </p>
                                            </div><!-- .testimonial-author end -->
                                        </div><!-- .testimonial end -->
                                    </div><!-- .owl-item end -->

                                    <div class="owl-item">
                                        <div class="testimonial">
                                            <p>
                                                We have several sites now
                                                built in Elvyre across
                                                several servers and have had
                                                almost zero issues. The
                                                documentation is great and
                                                the featureset is phenomenal.
                                                It is the best looking
                                                pro-level and fairly easy-to-implement
                                                advanced theme we are currently
                                                regularly using. The end product
                                                is great and easy to use and
                                                configure. Highly recommended...
                                            </p>

                                            <div class="testimonial-author">
                                                <p>
                                                    DIGITALMARKETINGASSOCIATES, <br />
                                                    Themeforest member
                                                </p>
                                            </div><!-- .testimonial-author end -->
                                        </div><!-- .testimonial end -->
                                    </div><!-- .owl-item end -->
                                </div><!-- #testimonial-carousel end -->
                            </div><!-- .carousel-container end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-6 end -->
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
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client01.png')); ?>" alt="" />
                            </div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client02.png')); ?>" alt="" />
                            </div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client03.png')); ?>" alt="" />
                            </div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client04.png')); ?>" alt="" />
                            </div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client05.png')); ?>" alt="" />
                            </div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client06.png')); ?>" alt="" />
                            </div>
                        </div><!-- .owl-carousel.owl-carousel-navigation end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\CustomClearance\resources\views/index.blade.php ENDPATH**/ ?>
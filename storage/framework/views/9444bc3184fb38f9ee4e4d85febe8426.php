<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" xml:lang="en">

<!-- Mirrored from html.pixel-industry.com/trucking/index07.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 11:22:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>
        <?php echo $__env->yieldContent('Title'); ?>
    </title>
    <meta name="description" content="Trucking is transportation and Logistics website template">
    <meta name="author" content="pixel-industry">
    <meta name="keywords"
        content="transportation, logistics, transportation template, logistics template, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" /><!-- bootstrap grid -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" /><!-- used for animations -->
    <link rel="stylesheet" href="<?php echo e(asset('masterslider/style/masterslider.css')); ?>" /><!-- Master slider css -->
    <link rel="stylesheet" href="<?php echo e(asset('masterslider/skins/default/style.css')); ?>" />
    <!-- Master slider default skin -->
    <link rel='stylesheet' href='<?php echo e(asset('owl-carousel/owl.carousel.css')); ?>' /><!-- Client carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" /><!-- lightbox plugin -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" /><!-- template styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/color-default.css')); ?>" /><!-- template main color -->
    <link rel="stylesheet" href="<?php echo e(asset('css/retina.css')); ?>" /><!-- retina ready styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" /><!-- responsive styles -->

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600"
        rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="<?php echo e(asset('icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css')); ?>" />
</head>

<body>
    <!-- Header Content -> Navigation bar, logo, etc. -->
    <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
    <?php echo $__env->yieldContent('MainContent'); ?>

    <!-- Footer Content -->
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script><!-- jQuery library -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script><!-- .bootstrap script -->
    <script src="<?php echo e(asset('js/jquery.srcipts.min.js')); ?>"></script><!-- modernizr, retina, stellar for parallax -->
    <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script><!-- used for image lightbox -->
    <script src="<?php echo e(asset('js/portfolio.js')); ?>"></script><!-- for portfolio -->
    <script src="<?php echo e(asset('owl-carousel/owl.carousel.min.js')); ?>"></script><!-- Carousels script -->
    <script src="<?php echo e(asset('masterslider/masterslider.min.js')); ?>"></script><!-- Master slider main js -->
    <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script><!-- Number counter animations -->
    <script src="<?php echo e(asset('js/jquery.dlmenu.min.js')); ?>"></script><!-- for responsive menu -->
    <script src="<?php echo e(asset('js/include.js')); ?>"></script><!-- custom js functions -->
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function($) {
            'use strict';

            // MASTER SLIDER START
            var slider = new MasterSlider();
            slider.setup('masterslider', {
                width: 1140, // slider standard width
                height: 854, // slider standard height
                space: 0,
                layout: "fullwidth",
                centerControls: false,
                speed: 90,
                loop: true,
                autoplay: true
                // more slider options goes here...
                // check slider options section in documentation for more options.
            });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');

            // ANIMATED NUMBERS SCRIPT START
            $('.numbers-counter').waypoint(function() {
                // NUMBERS COUNTER START
                $('.numbers').data('countToOptions', {
                    formatter: function(value, options) {
                        return value.toFixed(options.decimals).replace(
                            /\B(?=(?:\d{3})+(?!\d))/g, ',');
                    }
                });
                // start timer
                $('.timer').each(count);

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                } // NUMBERS COUNTER END
            }, {
                offset: '70%',
                triggerOnce: true
            });

            // TESTIMONIAL CAROUSEL START
            $('#testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                autoheight: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    600: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true,
                        autoHeight: true
                    }
                }
            });

            // CLIENT CAROUSEL SCRIPT START
            $('#client-carousel').owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    600: {
                        items: 3,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true
                    }
                }
            });
        });
        /* ]]> */
    </script>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\CustomClearance\resources\views/layouts/app.blade.php ENDPATH**/ ?>
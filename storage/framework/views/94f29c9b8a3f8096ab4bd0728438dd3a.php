<!-- resources/views/layouts/home.blade.php -->


<?php $__env->startSection('Title', 'Contact Us - Clear Way Custom Clearance'); ?>

<?php $__env->startSection('MainContent'); ?>
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg08">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact us</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="page-content">
        <div class="container">
            <?php if(session('success')): ?>
                <div class="alert alert-success"
                    style="text-align: center; margin-top: -60px; margin-bottom: 10px; padding: 15px; background-color: rgb(49, 123, 49); border-radius: 5px; color: white; font-weight: bolder;">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger"
                    style="text-align: center; margin-top: -60px; margin-bottom: 10px; padding: 15px; background-color: rgb(213, 9, 9); border-radius: 5px; color: white; font-weight: bolder;">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>Your Inquiry</h3>
                    </div><!-- .custom-heading.left end -->
                    <p>
                        Cozy sphinx waves quart jug of bad milk. A very bad
                        quack might jinx zippy fowls. Few quips galvanized
                        the mock jury box. Quick brown dogs jump over the
                        lazy fox. The jay, pig, fox, zebra, and my wolves
                        quack! Blowzy red vixens fight for a quick jump.
                        Joaquin Phoenix was gazed by MTV for luck. A
                        wizard's job is to vex chumps quickly in fog. Watch
                        "Jeopardy!", Alex Trebek's fun TV quiz game.
                        Woven silk pyjamas exchanged for blue quartz.
                        Brawny gods just.
                    </p>

                    <br />

                    <!-- .contact form start -->
                    <form action="<?php echo e(route('contact.form.submit')); ?>" method="POST" class="wpcf7 clearfix">
                        <?php echo csrf_field(); ?>
                        <fieldset>
                            <label for="Request Type">
                                <span class="required">*</span> Your request:
                            </label>

                            <select class="wpcf7-form-control-wrap wpcf7-select" id="inquiry" name="inquiry">
                                <option value="I need an offer for contract logistics">I need an offer for contract
                                    logistics</option>
                                <option value="I need an offer for air freight">I need an offer for air freight</option>
                                <option value="I need an offer for custom clearance">I need an offer for custom clearance
                                </option>
                                <option value="I want to become your partner">I want to become your partner</option>
                                <option value="I have some other request">I have some other request</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <label for="Full Name">
                                <span class="required">*</span> Full Name:
                            </label>

                            <input type="text" class="wpcf7-text" id="name" name="name"
                                value="<?php echo e(old('name')); ?>" required>
                        </fieldset>

                        <fieldset>
                            <label for="Contact Number">
                                <span class="required">*</span> Contact Number:
                            </label>

                            <input type="text" class="wpcf7-text" id="number" name="number"
                                value="<?php echo e(old('number')); ?>" required>
                        </fieldset>

                        <fieldset>
                            <label for="Email">
                                <span class="required">*</span> Email:
                            </label>

                            <input type="email" class="wpcf7-text" id="email" name="email"
                                value="<?php echo e(old('email')); ?>" required>
                        </fieldset>

                        <fieldset>
                            <label for="Message">
                                <span class="required">*</span> Message:
                            </label>

                            <textarea rows="8" class="wpcf7-textarea" name="message" id="message"><?php echo e(old('message')); ?></textarea>
                        </fieldset>

                        <button type="submit" class="wpcf7-submit">SEND</button>
                    </form><!-- .wpcf7 end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>Trucking Headquarters</h3>
                    </div><!-- .custom-heading end -->

                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.796341468177!2d73.12170297503495!3d30.6678628887659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7508afb651d%3A0x2e6e54570295710!2sMehr%20Humair%20Lounge!5e0!3m2!1sen!2s!4v1718218723866!5m2!1sen!2s"
                            width="555" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Company's Location"></iframe>
                    </div>

                    <div class="custom-heading">
                        <h4>Company Information</h4>
                    </div><!-- .custom-heading end -->

                    <address>
                        Al-Dharan Street, Al-Theem Area, <br />
                        Riyadh - Kingdom of Saudi Arabia
                    </address>
                    <br />

                    <span class="text-big colored">
                        <i class="fa fa-phone"></i>
                        <strong><a href="<?php echo e(url('tel:+9660538188293')); ?>">+966 053 818 8293</a></strong>
                    </span>
                    <br /><br />

                    <i class="fa fa-envelope" style="color: #006db7"></i>
                    <strong>
                        <a href="<?php echo e(url('mailto:sales@clearwaysa.com')); ?>">sales@clearwaysa.com</a>
                    </strong>
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
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client01.png')); ?>" alt="" /></div>
                            <div class="owl-item"><img src="<?php echo e(asset('img/pics/client02.png')); ?>" alt="" /></div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\CustomClearance\resources\views/contact.blade.php ENDPATH**/ ?>
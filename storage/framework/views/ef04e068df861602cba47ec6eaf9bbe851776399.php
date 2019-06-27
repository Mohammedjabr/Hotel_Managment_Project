<header class="site-header js-site-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="<?php echo e(route('hotel.index')); ?>">Hello Hotel</a>
            </div>
            <div class="col-6 col-lg-8">
                <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->
                <div class="site-navbar js-site-navbar">
                    <nav role="navigation">
                        <div class="container">
                            <div class="row full-height align-items-center">
                                <div class="col-md-6 mx-auto">
                                    <ul class="list-unstyled menu">
                                        <li class="active"><a href="<?php echo e(route('hotel.index')); ?>">Home</a></li>
                                        <li><a href="<?php echo e(route('rooms.index')); ?>">Rooms</a></li>
                                        <li><a href="<?php echo e(route('hotel.reservation')); ?>">Reservation</a></li>
                                        <li><a href="<?php echo e(route('contact.index')); ?>">Contact</a></li>
                                        <li><a href="<?php echo e(route('login.index')); ?>">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END head -->
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
           <?php echo $ele1; ?>

           <?php echo $ele2; ?>

          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->
<?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/base_layout2/header/header.blade.php ENDPATH**/ ?>
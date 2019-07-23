<?php
echo $this->Cdn->css('/css/rb-booking.css');
?>

<div class="color-studio landing">
    <div class="wrapper">
        <section class="hero-bg" role="img" aria-label="<?php echo __d('booking', 'Best hair stylist applying color in a top hair salon'); ?>">
            <div class="container">
                <div class="content-box">
                    <h1 class="title highlight-text">
                        <?php echo __d('booking', 'Color Studio'); ?>
                    </h1>

                    <p class="sub-copy">
                        <?php echo __d('booking', 'Experience home hair color like never before.'); ?>
                    </p>

                    <p>
                        <?php echo __d('booking', 'Join us in person for a step-by-step lesson on how to color at home like a pro.  Have an expert colorist apply a custom shade, highlights, or both - we\'ll craft and dispense your made-to-order home hair color blend!'); ?>
                    </p>

                    <button class="cta-btn btn-primary2-esalon" onclick="window.location.href='/color-studio/2'">
                        <?php echo __d('booking', 'BOOK AN APPOINTMENT'); ?>
                    </button>
                </div>
            </div>

            <div class="hero-img visible-xs"></div>
        </section>

        <section class="intro sub">
            <div class="container sm">
                <div class="section-title">
                    <h2 class="title">
                        <?php echo __d('booking', 'How It Works'); ?>
                    </h2>
                </div>
                <ul class="column-3">
                    <li>
                        <div class="content">
                            <span class="line"></span>
                            <h3 class="sub-copy"><span>01</span><?php echo __d('booking', 'Consult.'); ?></h3>
                            <p>
                                <?php echo __d('booking', 'You and your colorist will discuss your hair history and color goals to create your Color Profile.'); ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <span class="line"></span>
                            <h3 class="sub-copy"><span>02</span><?php echo __d('booking', 'Customize.'); ?></h3>
                            <p>
                                <?php echo __d('booking', 'Your colorist will craft and dispense your made-to-order blend from scratch or whip up your highlights.'); ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <span class="line"></span>
                            <h3 class="sub-copy"><span>03</span><?php echo __d('booking', 'Color.'); ?></h3>
                            <p>
                                <?php echo __d('booking', 'Your service is applied in the studio while you get a step-by-step lesson on how to do it yourself at home.'); ?>
                            </p>
                        </div>
                    </li>
                </ul>
                <p class="sub-copy">
                    <?php
                    printf(__d('booking', 'All starting at just %1$s.* Seriously.'),
                        '$' . SALON_APPLICATION_PRICE);
                    ?>
                </p>
                <button class="cta-btn btn-primary2-esalon" onclick="window.location.href='/color-studio/2'">
                    <?php echo __d('booking', 'BOOK AN APPOINTMENT'); ?>
                </button>
                <p class="disclaimer">
                    <?php echo __d('booking', '*No need to add gratuity.'); ?>
                </p>
            </div>
        </section>

        <section class="location sub">
            <div class="section-title">
                <h2 class="title">
                    <?php echo __d('booking', 'Our locations.'); ?>
                </h2>
            </div>

            <div class="container">
                <ul class="location-info-list">

                    <?php // San Francisco Location ?>
                    <li>
                        <div class="image-location">
                            <?php echo $this->Cdn->image("/images/2018/booking/location_sf_v2.jpg",
                                array(
                                    'class' => 'img-responsive',
                                    'alt' => __dx('booking', 'San Fancisco image alt', 'eSalon in San Francisco'),
                                    'srcset' => "/images/2018/booking/location_sf_v2@2x.jpg 2x"
                                )
                            ); ?>
                            <span class="highlight-text">
                                <?php echo __d('booking', 'Now Open!'); ?>
                            </span>
                        </div>

                        <div class="content">
                            <div class="address">
                                <h3 class="location-title highlight-text"><?php echo __dx('booking', 'San Francisco title', 'San Francisco, CA'); ?></h3>
                                <h4 class="location-sub"><?php echo __d('booking', 'Union Square, Financial District'); ?></h4>
                                <p>
                                    <?php echo __d('booking', 'Between Geary St & O&apos;Farrell St'); ?><br />
                                    <?php echo __d('booking', '40 Grant Ave'); ?><br />
                                    <?php echo __d('booking', 'San Francisco, CA 94108'); ?><br />
                                    <a class="toll-free-number" href="tel:3109454670">(310) 945-4670</a>
                                </p>
                            </div>

                            <p><?php echo __dx('booking', 'San Francisco hours', 'Hours: Mon - Sun, 7:30am - 6pm'); ?></p>

                            <ul class="cta">
                                <li>
                                    <a class="cta-link" href="https://maps.google.com/?q=40+Grant+Ave,+San+Francisco,+CA+94108" target="_blank">
                                        <?php echo __d('booking', 'VIEW ON MAP'); ?>
                                    </a>
                                </li>
                                <?php if (SALON_SF_LIVE) { ?>
                                <li>
                                    <a class="cta-link" href="/color-studio/2?store_id=4">
                                        <?php echo __d('booking', 'BOOK NOW &raquo;'); ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>

                    <?php // HQ Location ?>
                    <li>
                        <div class="image-location">
                            <?php echo $this->Cdn->image("/images/2018/booking/esalon_hq_v2.jpg",
                                array(
                                    'class' => 'img-responsive',
                                    'alt' => __dx('booking', 'HQ image alt', 'eSalon in El Segundo Los Angeles'),
                                    'srcset' => "/images/2018/booking/esalon_hq_v2@2x.jpg 2x"
                                )
                            ); ?>
                        </div>

                        <div class="content">
                            <div class="address">
                                <h3 class="location-title highlight-text"><?php echo __dx('booking', 'HQ title', 'El Segundo, CA'); ?></h3>
                                <h4 class="location-sub"><?php echo __d('booking', 'Located at eSalon HQ'); ?></h4>
                                <p>
                                    <?php echo __d('booking', 'eSalon HQ'); ?><br />
                                    <?php echo __d('booking', '1910 E Maple Ave'); ?><br />
                                    <?php echo __d('booking', 'El Segundo, CA 90245'); ?><br />
                                    <a class="toll-free-number" href="tel:3109454670">(310) 945-4670</a>
                                </p>
                            </div>
                           
                            <p><?php echo __dx('booking', 'HQ hours', 'Hours: Mon - Sun, 7am - 6pm'); ?></p>

                            <ul class="cta">
                                <li>
                                    <a class="cta-link" href="https://maps.google.com/?q=1910+E+Maple+Ave%2C+El+Segundo%2C+CA+90245" target="_blank">
                                        <?php echo __d('booking', 'VIEW ON MAP'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="cta-link" href="/color-studio/2?store_id=2">
                                        <?php echo __d('booking', 'BOOK NOW &raquo;'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <?php // Hollywood Location ?>
                    <li>
                        <div class="image-location">
                            <?php echo $this->Cdn->image("/images/2018/booking/salon_republic.jpg",
                                array(
                                    'class' => 'img-responsive',
                                    'alt' => __dx('booking', 'Hollywood image alt', 'eSalon in Hollywood Los Angeles'),
                                    'srcset' => "/images/2018/booking/salon_republic@2x.jpg 2x"
                                )
                            ); ?>
                        </div>

                        <div class="content">
                            <div class="address">
                                <h3 class="location-title highlight-text"><?php echo __dx('booking', 'Hollywood title', 'Hollywood, CA'); ?></h3>
                                <h4 class="location-sub"><?php echo __d('booking', 'Inside Salon Republic'); ?></h4>
                                <p>
                                    <?php echo __d('booking', 'ArcLight Theater Center'); ?><br />
                                    <?php echo __d('booking', '6370 Sunset Blvd Suite 706'); ?><br />
                                    <?php echo __d('booking', 'Los Angeles, CA 90028'); ?><br />
                                    <a class="toll-free-number" href="tel:3109454670">(310) 945-4670</a>
                                </p>
                            </div>

                            <p><?php echo __dx('booking', 'Hollywood hours', 'Hours: Mon - Sun, 7am - 6pm'); ?></p>

                            <ul class="cta">
                                <li>
                                    <a class="cta-link" href="https://maps.google.com/?q=6370+Sunset+Blvd+Suite+706%2C+Los+Angeles%2C+CA+90028" target="_blank">
                                        <?php echo __d('booking', 'VIEW ON MAP'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="cta-link" href="/color-studio/2?store_id=3">
                                        <?php echo __d('booking', 'BOOK NOW &raquo;'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <section class="about-us sub">
        <div class="container sm">
            <div class="top">
                <div class="image-box pull-right">
                    <div class="bg">
                        <?php echo $this->Cdn->image("/images/2018/booking/model_01.jpg", array('srcset' => "/images/2018/booking/model_01@2x.jpg 2x", 'alt' => __d('booking','Woman after hair salon with gorgeous all-over color')));?>
                    </div>
                </div>
                <div class="content pull-left">
                    <h2 class="highlight-text">
                        <?php echo __d('booking', 'About eSalon.'); ?>
                    </h2>
                    <p>
                        <?php echo __d('booking', 'It’s simple. We craft custom hair color, made for you and only you. Best part? We can apply your color in our studio or ship it to your door along with everything you need to get pro results at home.' ); ?>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <div class="image-box pull-left">
                    <div class="bg">
                        <?php echo $this->Cdn->image("/images/2018/booking/custom_color.jpg", array('srcset' => "/images/2018/booking/custom_color@2x.jpg 2x", 'alt' => __d('booking','Allure magazine award winner “Best Home Hair Color”')));?>
                        <div class="award-seal icon allure-seal-2017" role="img" aria-label="2017 Allure Best of Beauty Award Winner Seal"></div>
                    </div>
                </div>
                <div class="content pull-right">
                    <h2 class="highlight-text">
                        <?php echo __d('booking', '4x Allure award winner.'); ?>
                    </h2>
                    <p>
                        <?php echo __d('booking', 'We started out as the “little engine that could” and now, we’ve won “Best Home Hair Color” four years in a row—beating out the industry giants. Come in and find out why.' ); ?>
                        </p>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <section class="testimonials sub">
        <div class="container sm">
            <div class="section-title">
                <h2 class="title">
                    <?php echo __d('booking', 'What our clients say.'); ?>
                </h2>
                <span class="line visible-xs"></span>
            </div>

            <ul class="column-3 hidden-xs">
                <li>
                    <blockquote>
                        <span class="line"></span>
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'The colorists were great. The entire experience was wonderful. I look forward to trying this on my own.'); ?>
                        </h3>
                        <p class="sub-copy author">- Marlene R.</p>
                    </blockquote>
                </li>
                <li>
                    <blockquote>
                        <span class="line"></span>
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'My colorist was very thorough in her explanation and application. My color is amazing and has stayed true.'); ?>
                        </h3>
                        <p class="sub-copy author">- Shawni R.</p>
                    </blockquote>
                </li>
                <li>
                    <blockquote>
                        <span class="line"></span>
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'It was an awesome service and very informative. The color looks amazing. I loved everything about it.'); ?>
                        </h3>
                        <p class="sub-copy author">- Karen A.</p>
                    </blockquote>
                </li>
            </ul>

            <div id="testimonialCarousel" class="carousel slide touch visible-xs" data-ride="carousel" data-interval="false">
                <ul class="column-3 carousel-inner">
                    <li class="item active">
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'The colorists were great. The entire experience was wonderful. I look forward to trying this on my own.'); ?>
                        </h3>
                        <p class="sub-copy author">- Marlene R.</p>
                    </li>
                    <li class="item">
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'My colorist was very thorough in her explanation and application. My color is amazing and has stayed true.'); ?>
                        </h3>
                        <p class="sub-copy author">- Shawni R.</p>
                    </li>
                    <li class="item">
                        <h3 class="highlight-text">
                            <?php echo __d('booking', 'It was an awesome service and very informative. The color looks amazing. I loved everything about it.'); ?>
                        </h3>
                        <p class="sub-copy author">- Karen A.</p>
                    </li>
                </ul>
                <?php echo $this->element('carousel-arrows', array('carousel_id'=>'testimonialCarousel', 'item_count'=>3)); ?>
            </div>
        </div>
    </section>

    <section class="colorists sub">
        <div class="container sm">

            <div class="section-title">
                <h2 class="title">
                    <?php echo __d('booking', 'Colorists that care.'); ?>
                </h2>
            </div>
            <ul>
                <li>
                    <?php echo $this->Cdn->image('/images/2018/booking/stylist_01.jpg', array('class'=>'img-responsive', 'alt'=>__d('booking', 'Hair colorist doing a root touch up covering grays')));?>
                </li>
                <li><?php echo $this->Cdn->image('/images/2018/booking/stylist_02.jpg', array('class'=>'img-responsive', 'alt'=>__d('booking', 'Los Angeles hair stylist')));?></li>
                <li><?php echo $this->Cdn->image('/images/2018/booking/stylist_03.jpg', array('class'=>'img-responsive', 'alt'=>__d('booking', 'Hairdresser sectioning hair')));?></li>
                <li><?php echo $this->Cdn->image('/images/2018/booking/stylist_04.jpg', array('class'=>'img-responsive', 'alt'=>__d('booking', 'Stylist blow drying hair')));?></li>
                <li><?php echo $this->Cdn->image('/images/2018/booking/stylist_05.jpg', array('class'=>'img-responsive', 'alt'=>__d('booking', 'Top hair stylist styling hair')));?></li>
            </ul>
            <p>
                <?php echo __d('booking', 'Our team of expert colorists are committed to getting your color just right. Have a question or want an adjustment? These folks are here to walk you through every step of your color journey.'); ?>
                </p>

            <button class="cta-btn btn-primary2-esalon" onclick="window.location.href='/color-studio/2'">
                <?php echo __d('booking', 'BOOK AN APPOINTMENT'); ?>
            </button>
        </div>
    </section>

    <section class="press sub">
        <div class="container">
            <p>
                <span>
                    <?php echo __d('booking', 'AS SEEN IN'); ?>
                </span>
            </p>
            <ul>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_allure.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "Allure",
                        'srcset' => "/images/2018/booking/logo_allure.png 1x, /images/2018/booking/logo_allure@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_forbes.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "Forbes",
                        'srcset' => "/images/2018/booking/logo_forbes.png 1x, /images/2018/booking/logo_forbes@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_bazaar_harpers.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "Harper's Bazaar",
                        'srcset' => "/images/2018/booking/logo_bazaar_harpers.png 1x, /images/2018/booking/logo_bazaar_harpers@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_oprah.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "O, The Oprah Magazine",
                        'srcset' => "/images/2018/booking/logo_oprah.png 1x, /images/2018/booking/logo_oprah@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_instyle.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "InStyle",
                        'srcset' => "/images/2018/booking/logo_instyle.png 1x, /images/2018/booking/logo_instyle@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_refinery29.png", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "Refinery29",
                        'srcset' => "/images/2018/booking/logo_refinery29.png 1x, /images/2018/booking/logo_refinery29@2x.png 2x")
                    );?>
                </li>
                <li>
                    <?php echo $this->Cdn->image("/images/2018/booking/logo_inc.jpg", 
                    array(
                        'class'=>'img-responsive', 
                        'alt' => "Inc.",
                        'srcset' => "/images/2018/booking/logo_inc.jpg 1x, /images/2018/booking/logo_inc@2x.jpg 2x")
                    );?>
                </li>
            </ul>
        </div>
    </section>
</div>

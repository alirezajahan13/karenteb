<?php 
/*
Template Name: Home Template
*/
get_header();
?>

<div class="introSectionBack">
    <div class="introSection sectionPadding mainView">
        <div class="introSectionDesc">
            <div class="generalHeading bigHeading highMargined">
                <h1><span>Karen Medical Group</span> Manufacturer of the Highest quality medical equipment</h1>
            </div>
            <p class="">Karen Teb Company, by using experienced specialists, has always been trying to localize advanced technologies and pioneer in recent medical innovations. The knowledge-based research and development team of this company has been able to achieve remarkable achievements in designing and producing medical equipment.</p>
            <a class="generalButton outlineButton" href="">View Products</a>
        </div>
        <div class="introSectionImg"> 
            <video controls loop autoplay muted width="100%">
                <source src="<?php bloginfo('template_directory')?>/video/Main_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<div class="counterNumbers" id="counterNumbers">
    <img src="<?php bloginfo('template_directory')?>/img/back-vectors/Vector1.svg" alt="">
    <div class="counterNumbersInner mainView">
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-1">85</span><span>%</span></div>
            <div class="counterTitle">Satisfaction</div>
        </div>
        <!-- <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span id="counter-2">16</span><span>+</span></div>
            <div class="counterTitle">کارن طب</div>
        </div> -->
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span>+</span><span id="counter-3">2413</span></div>
            <div class="counterTitle">Installs</div>
        </div>
        <div class="counterItem aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
            <div class="counterNumber"><span>+</span><span id="counter-4">3786</span></div>
            <div class="counterTitle">Collaborations</div>
        </div>
    </div>
</div>
<div class="productsSectionHomeBack sectionPadding">
    <div class="productsSectionHome mainView">
        <div class="generalHeading highMargined centeredText">
            <h2>Our Latest Products</h2>
            <span>Production of quality products with recent global standards</span>
        </div>
        <div class="productSwiperParent">
            <div class="swiper productsSwiper swiper-container  ">
                <div class="swiper-wrapper innerSwiper">
                    <?php
                        $tag_slug = 'جدیدترین-ها';

                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 4,
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'product_tag',
                                    'field'    => 'slug',
                                    'terms'    => $tag_slug,
                                ),
                            ),
                        );

                        $loop = new WP_Query($args);

                        if ($loop->have_posts()) {
                            while ($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php wc_get_template_part('content', 'product'); ?>
                                </div>
                            <?php endwhile;
                        } else {
                            echo '<div class="swiper-slide">' . esc_html__('No products found', 'your-text-domain') . '</div>';
                        }

                        wp_reset_postdata();
                    ?>
                </div>
                <!-- Add Pagination -->
                <!-- Add Navigation -->
                <div class="swiper-button-next">
                    <svg height="30" stroke="#fff" stroke-width="2" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 50" xml:space="preserve"><path fill="#fff" d="M15.563 40.836a.997.997 0 0 0 1.414 0l15-15a.999.999 0 0 0 0-1.414l-15-15a.999.999 0 1 0-1.414 1.414l14.293 14.293-14.293 14.293a.999.999 0 0 0 0 1.414z"/></svg>
                </div>
                <div class="swiper-button-prev">
                    <svg height="30" stroke="#fff" stroke-width="2" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 50" xml:space="preserve" transform="rotate(180)"><path fill="#fff" d="M15.563 40.836a.997.997 0 0 0 1.414 0l15-15a.999.999 0 0 0 0-1.414l-15-15a.999.999 0 1 0-1.414 1.414l14.293 14.293-14.293 14.293a.999.999 0 0 0 0 1.414z"/></svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="serviceSectionHomeBack sectionPadding">
    <div class="serviceSectionHome mainView">
        <div class="generalHeading highMargined centeredText">
            <h2>Providing the best and the most modern methods</h2>
        </div>
        <div class="serviceBoxParent extraHighMargined">
            <div class="serviceBoxs">
                <div class="iconPart">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.984 2.542c.087.169.109.386.152.82.082.82.123 1.23.295 1.456a1 1 0 0 0 .929.384c.28-.037.6-.298 1.238-.82.337-.277.506-.415.687-.473a1 1 0 0 1 .702.035c.175.076.33.23.637.538l.894.894c.308.308.462.462.538.637a1 1 0 0 1 .035.702c-.058.181-.196.35-.472.687-.523.639-.784.958-.822 1.239a1 1 0 0 0 .385.928c.225.172.636.213 1.457.295.433.043.65.065.82.152a1 1 0 0 1 .47.521c.071.177.071.395.071.831v1.264c0 .436 0 .654-.07.83a1 1 0 0 1-.472.522c-.169.087-.386.109-.82.152-.82.082-1.23.123-1.456.295a1 1 0 0 0-.384.929c.038.28.299.6.821 1.238.276.337.414.505.472.687a1 1 0 0 1-.035.702c-.076.175-.23.329-.538.637l-.894.893c-.308.309-.462.463-.637.538a1 1 0 0 1-.702.035c-.181-.058-.35-.196-.687-.472-.639-.522-.958-.783-1.238-.82a1 1 0 0 0-.929.384c-.172.225-.213.635-.295 1.456-.043.434-.065.651-.152.82a1 1 0 0 1-.521.472c-.177.07-.395.07-.831.07h-1.264c-.436 0-.654 0-.83-.07a1 1 0 0 1-.522-.472c-.087-.169-.109-.386-.152-.82-.082-.82-.123-1.23-.295-1.456a1 1 0 0 0-.928-.384c-.281.037-.6.298-1.239.82-.337.277-.506.415-.687.473a1 1 0 0 1-.702-.035c-.175-.076-.33-.23-.637-.538l-.894-.894c-.308-.308-.462-.462-.538-.637a1 1 0 0 1-.035-.702c.058-.181.196-.35.472-.687.523-.639.784-.958.821-1.239a1 1 0 0 0-.384-.928c-.225-.172-.636-.213-1.457-.295-.433-.043-.65-.065-.82-.152a1 1 0 0 1-.47-.521C2 13.286 2 13.068 2 12.632v-1.264c0-.436 0-.654.07-.83a1 1 0 0 1 .472-.522c.169-.087.386-.109.82-.152.82-.082 1.231-.123 1.456-.295a1 1 0 0 0 .385-.928c-.038-.281-.3-.6-.822-1.24-.276-.337-.414-.505-.472-.687a1 1 0 0 1 .035-.702c.076-.174.23-.329.538-.637l.894-.893c.308-.308.462-.463.637-.538a1 1 0 0 1 .702-.035c.181.058.35.196.687.472.639.522.958.783 1.238.821a1 1 0 0 0 .93-.385c.17-.225.212-.635.294-1.456.043-.433.065-.65.152-.82a1 1 0 0 1 .521-.471c.177-.07.395-.07.831-.07h1.264c.436 0 .654 0 .83.07a1 1 0 0 1 .522.472ZM12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" fill="#197dbb"/></svg>
                </div>
                <h3>Quality Guarantee</h3>
                <span class="lightParagraph">Karen Teb tries to gain the trust of its customers by producing quality products with the latest global standards.</span>
            </div>
            <div class="serviceBoxs">
                <div class="iconPart">
                    <svg width="50" height="50" fill="#197dbb" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M151.003 413.483h249.375a13.125 13.125 0 0 0 0-26.25H151.003a13.125 13.125 0 0 1 0-26.25h249.375a13.125 13.125 0 0 0 0-26.25H151.003a52.5 52.5 0 0 0-52.5 52.5v26.25a52.5 52.5 0 0 0 52.5 52.5h249.375a13.125 13.125 0 0 0 0-26.25H151.003c-17.186-.271-17.307-25.902 0-26.25Zm262.494-118.136V59.134a13.117 13.117 0 0 0-13.117-13.117H164.124v262.466H400.36a13.136 13.136 0 0 0 13.136-13.136Zm-54.686-91.83h-140v-87.5h140ZM137.874 47.737a52.475 52.475 0 0 0-39.377 50.78v230.119a78.466 78.466 0 0 1 39.377-19.003Z"/></svg>
                </div>
                <h3>Knowledge and Expertise</h3>
                <span class="lightParagraph">Karen Teb products are produced and updated with the most modern global knowledge by the experiences and opinions of experts.</span>
            </div>
            <div class="serviceBoxs">
                <div class="iconPart">
                    <svg width="50" height="50" fill="#197dbb" xmlns="http://www.w3.org/2000/svg" viewBox="-20 -15 270 250" xml:space="preserve"><path d="M214.419 32.12A7.502 7.502 0 0 0 209 25.927L116.76.275a7.496 7.496 0 0 0-4.02 0L20.5 25.927a7.5 7.5 0 0 0-5.419 6.193c-.535 3.847-12.74 94.743 18.565 139.961 31.268 45.164 77.395 56.738 79.343 57.209a7.484 7.484 0 0 0 3.522 0c1.949-.471 48.076-12.045 79.343-57.209 31.305-45.217 19.1-136.113 18.565-139.961zm-40.186 53.066-62.917 62.917c-1.464 1.464-3.384 2.197-5.303 2.197s-3.839-.732-5.303-2.197l-38.901-38.901a7.497 7.497 0 0 1 0-10.606l7.724-7.724a7.5 7.5 0 0 1 10.606 0l25.874 25.874 49.89-49.891a7.497 7.497 0 0 1 10.606 0l7.724 7.724a7.5 7.5 0 0 1 0 10.607z"/></svg>
                </div>
                <h3>شرایط خرید امن</h3>
                <span class="lightParagraph">امکان دریافت دمو رایگان پیش از خرید و شرایط خرید اقساطی دستگاه‌های کربوکسی تراپی و پلاسما.</span>
            </div>
            <div class="serviceBoxs">
                <div class="iconPart">
                    <svg width="50" height="50" fill="#197dbb" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M422.401 217.174c-6.613-67.84-46.72-174.507-170.666-174.507-123.948 0-164.054 106.667-170.668 174.507-23.2 8.805-38.503 31.079-38.4 55.893v29.867c0 32.99 26.745 59.733 59.734 59.733 32.99 0 59.734-26.744 59.734-59.733v-29.867c-.108-24.279-14.848-46.095-37.334-55.253 4.267-39.254 25.174-132.48 126.934-132.48 101.76 0 122.453 93.226 126.72 132.48-22.44 9.178-37.106 31.009-37.12 55.253v29.867a59.947 59.947 0 0 0 33.92 53.76c-8.96 16.853-31.787 39.68-87.894 46.506-11.215-17.03-32.914-23.744-51.788-16.023-18.873 7.72-29.646 27.717-25.71 47.725 3.936 20.009 21.48 34.432 41.872 34.432a42.667 42.667 0 0 0 37.973-23.68c91.52-10.454 120.747-57.6 129.92-85.334 24.817-8.039 41.508-31.301 41.173-57.386v-29.867c.103-24.814-15.2-47.088-38.4-55.893Zm-302.933 85.76c0 9.425-7.641 17.066-17.067 17.066-9.425 0-17.066-7.64-17.066-17.066v-29.867a17.067 17.067 0 1 1 34.133 0v29.867Zm264.533-29.867c0-9.426 7.641-17.067 17.067-17.067s17.067 7.641 17.067 17.067v29.867c0 9.425-7.641 17.066-17.067 17.066s-17.067-7.64-17.067-17.066v-29.867Z" fill-rule="evenodd"/></svg>
                </div>
                <h3>خدمات پس از فروش</h3>
                <span class="lightParagraph">تمام دستگاه‌های تولید شرکت کارن طب، شامل گارانتی، خدمات پس از فروش، آموزش و پشتیبانی 24 ساعته است.</span>
            </div>
        </div>
    </div>
</div>
<div class="descProductSectionHomeBack">
    <img src="<?php bloginfo('template_directory')?>/img/back-vectors/Vector.svg" alt="">
    <div class="descProductSectionHome mainView mediumMargined">
        <div class="descProductText">
            <div class="generalHeading highMargined">
                <h3>کربوکسی تراپی چیست؟</h3>
            </div>
            <p>کربوکسی تراپی در واقع یک نوع مزوتراپی است که به جای تزریق مایعات مزوتراپی از گاز دی اکسید کربن استفاده می‌شود. پزشک متخصص گاز co2 را در زیر پوست از طریق سوزن تزریق می کند. مکانیسم عمل کربوکسی تراپی از طریق بهبود گردش خون است که در نتیجه خاصیت ارتجاعی پوست را افزایش می‌دهد و اکسیژن رسانی به آن ناحیه را بهبود می‌دهد.</p>
            <a class="generalButton noArrowButton" href="https://karenmed.ir/product/%d8%af%d8%b3%d8%aa%da%af%d8%a7%d9%87-%da%a9%d8%b1%d8%a8%d9%88%da%a9%d8%b3%db%8c-%d8%aa%d8%b1%d8%a7%d9%be%db%8c-%da%a9%d8%a7%d8%b1%d9%86-%d8%b7%d8%a8/">ثبت سفارش</a>
        </div>
        <div class="descProductImg">
            <!-- <img src="<?php //echo get_template_directory_uri() ?>/img/banner-home.png" alt="کارن-طب">  -->
            <div class="swiper ProductImgSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <img src="<?php echo get_template_directory_uri() ?>/img/new/Carboxy-montage.jpg" alt="دستگاه-کربوکسی"> 
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/new/Plasma-montage.jpg" alt="دستگاه-پلاسما">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() ?>/img/new/Facepad-montage.jpg" alt="فیس-پد">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php bloginfo('template_directory')?>/img/back-vectors/Vector.svg" alt="">
</div>
<div class="aboutUsSectionHomeBack sectionPadding">
    <div class="aboutUsSectionHome mainView">
        <div class="generalHeading highMargined centeredText">
            <h2>چرا کارن طب؟</h2>
        </div>
        <div class="aboutUsSectionFlex extraHighMargined">
            <div class="aboutUsSections">
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" xmlns="http://www.w3.org/2000/svg" viewBox="-20 -15 270 250" xml:space="preserve"><path d="M214.419 32.12A7.502 7.502 0 0 0 209 25.927L116.76.275a7.496 7.496 0 0 0-4.02 0L20.5 25.927a7.5 7.5 0 0 0-5.419 6.193c-.535 3.847-12.74 94.743 18.565 139.961 31.268 45.164 77.395 56.738 79.343 57.209a7.484 7.484 0 0 0 3.522 0c1.949-.471 48.076-12.045 79.343-57.209 31.305-45.217 19.1-136.113 18.565-139.961zm-40.186 53.066-62.917 62.917c-1.464 1.464-3.384 2.197-5.303 2.197s-3.839-.732-5.303-2.197l-38.901-38.901a7.497 7.497 0 0 1 0-10.606l7.724-7.724a7.5 7.5 0 0 1 10.606 0l25.874 25.874 49.89-49.891a7.497 7.497 0 0 1 10.606 0l7.724 7.724a7.5 7.5 0 0 1 0 10.607z"/></svg>
                    </div>
                    <span>یک سال گارانتی و تعویض بی قید و شرط</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M151.003 413.483h249.375a13.125 13.125 0 0 0 0-26.25H151.003a13.125 13.125 0 0 1 0-26.25h249.375a13.125 13.125 0 0 0 0-26.25H151.003a52.5 52.5 0 0 0-52.5 52.5v26.25a52.5 52.5 0 0 0 52.5 52.5h249.375a13.125 13.125 0 0 0 0-26.25H151.003c-17.186-.271-17.307-25.902 0-26.25Zm262.494-118.136V59.134a13.117 13.117 0 0 0-13.117-13.117H164.124v262.466H400.36a13.136 13.136 0 0 0 13.136-13.136Zm-54.686-91.83h-140v-87.5h140ZM137.874 47.737a52.475 52.475 0 0 0-39.377 50.78v230.119a78.466 78.466 0 0 1 39.377-19.003Z"/></svg>
                    </div>
                    <span>کسب مجوز دانش بنیان از نهاد ریاست</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><path d="M960 15 693.227 257.027 333.44 243.053 284.693 599.96 0 820.547l192 304.64-76.267 352 342.934 109.973 167.893 318.613L960 1769.56l333.44 136.213 167.893-318.613 342.934-109.973-76.267-352 192-304.64-284.693-220.587-48.747-356.907-359.893 13.974L960 15Zm352.747 616.427 147.84 153.813-600 577.28-402.774-402.773L608.64 808.92l254.933 254.827 449.174-432.32Z" fill-rule="evenodd"/></svg>
                    </div>
                    <span>دریافت گواهینامه ISO۱۳۴۸۵ از شرکت IGC کره جنوبی</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M422.401 217.174c-6.613-67.84-46.72-174.507-170.666-174.507-123.948 0-164.054 106.667-170.668 174.507-23.2 8.805-38.503 31.079-38.4 55.893v29.867c0 32.99 26.745 59.733 59.734 59.733 32.99 0 59.734-26.744 59.734-59.733v-29.867c-.108-24.279-14.848-46.095-37.334-55.253 4.267-39.254 25.174-132.48 126.934-132.48 101.76 0 122.453 93.226 126.72 132.48-22.44 9.178-37.106 31.009-37.12 55.253v29.867a59.947 59.947 0 0 0 33.92 53.76c-8.96 16.853-31.787 39.68-87.894 46.506-11.215-17.03-32.914-23.744-51.788-16.023-18.873 7.72-29.646 27.717-25.71 47.725 3.936 20.009 21.48 34.432 41.872 34.432a42.667 42.667 0 0 0 37.973-23.68c91.52-10.454 120.747-57.6 129.92-85.334 24.817-8.039 41.508-31.301 41.173-57.386v-29.867c.103-24.814-15.2-47.088-38.4-55.893Zm-302.933 85.76c0 9.425-7.641 17.066-17.067 17.066-9.425 0-17.066-7.64-17.066-17.066v-29.867a17.067 17.067 0 1 1 34.133 0v29.867Zm264.533-29.867c0-9.426 7.641-17.067 17.067-17.067s17.067 7.641 17.067 17.067v29.867c0 9.425-7.641 17.066-17.067 17.066s-17.067-7.64-17.067-17.066v-29.867Z" fill-rule="evenodd"/></svg>
                    </div>
                    <span>ده سال خدمات پس از فروش</span>
                </div>
            </div>
            <div class="aboutUsSections">
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><path d="M960 15 693.227 257.027 333.44 243.053 284.693 599.96 0 820.547l192 304.64-76.267 352 342.934 109.973 167.893 318.613L960 1769.56l333.44 136.213 167.893-318.613 342.934-109.973-76.267-352 192-304.64-284.693-220.587-48.747-356.907-359.893 13.974L960 15Zm352.747 616.427 147.84 153.813-600 577.28-402.774-402.773L608.64 808.92l254.933 254.827 449.174-432.32Z" fill-rule="evenodd"/></svg>
                    </div>
                    <span>دریافت مجوز بالینی از بیمارستان پوست و مو رازی</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M151.003 413.483h249.375a13.125 13.125 0 0 0 0-26.25H151.003a13.125 13.125 0 0 1 0-26.25h249.375a13.125 13.125 0 0 0 0-26.25H151.003a52.5 52.5 0 0 0-52.5 52.5v26.25a52.5 52.5 0 0 0 52.5 52.5h249.375a13.125 13.125 0 0 0 0-26.25H151.003c-17.186-.271-17.307-25.902 0-26.25Zm262.494-118.136V59.134a13.117 13.117 0 0 0-13.117-13.117H164.124v262.466H400.36a13.136 13.136 0 0 0 13.136-13.136Zm-54.686-91.83h-140v-87.5h140ZM137.874 47.737a52.475 52.475 0 0 0-39.377 50.78v230.119a78.466 78.466 0 0 1 39.377-19.003Z"/></svg>
                    </div>
                    <span>گواهینامه ثبت اختراع از اداره مالکیت معنوی</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.984 2.542c.087.169.109.386.152.82.082.82.123 1.23.295 1.456a1 1 0 0 0 .929.384c.28-.037.6-.298 1.238-.82.337-.277.506-.415.687-.473a1 1 0 0 1 .702.035c.175.076.33.23.637.538l.894.894c.308.308.462.462.538.637a1 1 0 0 1 .035.702c-.058.181-.196.35-.472.687-.523.639-.784.958-.822 1.239a1 1 0 0 0 .385.928c.225.172.636.213 1.457.295.433.043.65.065.82.152a1 1 0 0 1 .47.521c.071.177.071.395.071.831v1.264c0 .436 0 .654-.07.83a1 1 0 0 1-.472.522c-.169.087-.386.109-.82.152-.82.082-1.23.123-1.456.295a1 1 0 0 0-.384.929c.038.28.299.6.821 1.238.276.337.414.505.472.687a1 1 0 0 1-.035.702c-.076.175-.23.329-.538.637l-.894.893c-.308.309-.462.463-.637.538a1 1 0 0 1-.702.035c-.181-.058-.35-.196-.687-.472-.639-.522-.958-.783-1.238-.82a1 1 0 0 0-.929.384c-.172.225-.213.635-.295 1.456-.043.434-.065.651-.152.82a1 1 0 0 1-.521.472c-.177.07-.395.07-.831.07h-1.264c-.436 0-.654 0-.83-.07a1 1 0 0 1-.522-.472c-.087-.169-.109-.386-.152-.82-.082-.82-.123-1.23-.295-1.456a1 1 0 0 0-.928-.384c-.281.037-.6.298-1.239.82-.337.277-.506.415-.687.473a1 1 0 0 1-.702-.035c-.175-.076-.33-.23-.637-.538l-.894-.894c-.308-.308-.462-.462-.538-.637a1 1 0 0 1-.035-.702c.058-.181.196-.35.472-.687.523-.639.784-.958.821-1.239a1 1 0 0 0-.384-.928c-.225-.172-.636-.213-1.457-.295-.433-.043-.65-.065-.82-.152a1 1 0 0 1-.47-.521C2 13.286 2 13.068 2 12.632v-1.264c0-.436 0-.654.07-.83a1 1 0 0 1 .472-.522c.169-.087.386-.109.82-.152.82-.082 1.231-.123 1.456-.295a1 1 0 0 0 .385-.928c-.038-.281-.3-.6-.822-1.24-.276-.337-.414-.505-.472-.687a1 1 0 0 1 .035-.702c.076-.174.23-.329.538-.637l.894-.893c.308-.308.462-.463.637-.538a1 1 0 0 1 .702-.035c.181.058.35.196.687.472.639.522.958.783 1.238.821a1 1 0 0 0 .93-.385c.17-.225.212-.635.294-1.456.043-.433.065-.65.152-.82a1 1 0 0 1 .521-.471c.177-.07.395-.07.831-.07h1.264c.436 0 .654 0 .83.07a1 1 0 0 1 .522.472ZM12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" fill="#197dbb"/></svg>
                    </div>
                    <span>برگزاری ورکشاپهای آموزشی در سراسر کشور</span>
                </div>
                <div class="aboutUsP">
                    <div class="iconPart">
                        <svg width="20" height="20" fill="#197dbb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve"><path d="m20.293 26.707-3.586 3.586a.999.999 0 0 1-1.414 0l-3.586-3.586c-.63-.63-.184-1.707.707-1.707H13v-6h6v6h.586c.891 0 1.337 1.077.707 1.707zM24 9a8 8 0 0 0-8-8c-3.741 0-6.873 2.572-7.748 6.041A7 7 0 0 0 9 21h3v-2h-.5a.5.5 0 0 1 0-1h9a.5.5 0 0 1 0 1H20v2h4a6 6 0 1 0 0-12z"/></svg>
                    </div>
                    <span>ارسال، نصب و آموزش رایگان</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="freeDemoSectionHomeBack sectionPadding">
    <div class="freeDemoSectionHome mainView">
        <div class="sectionRight">
            <h3>درخواست دمو رایگان</h3>
            <p>می‌توانید پیش از خرید محصول، برای مشاهده نحوه کارکرد دستگاه و بررسی موارد فنی و نوع عملکرد دستگاه، نسخه دمو آن را به صورت رایگان و در بازه زمانی محدودی در اختیار داشته باشید و میزان اثر گذاری آن را به چشم ببینید. همچنین کارشناسان ما برای آموزش متد کار با دستگاه، همراه شما هستند. برای دریافت نسخه دمو رایگان محصولات، فرم را تکمیل فرمایید تا با شما تماس بگیریم.</p>
            <?php echo do_shortcode('[contact-form-7 id="1911" title="دمو رایگان صفحه اصلی"]') ?>
        </div>
        <div class="sectionLeft">
            <img src="<?php echo get_template_directory_uri() ?>/img/new-transparent-for-request-min-1.png" alt="کارن-طب">
        </div>
    </div>
</div>
<div class="blogPostSectionHomeBack sectionPadding">
    <div class="blogPostSectionHome mainView">
        <div class="generalHeading highMargined centeredText">
            <h2>آخرین نوشته های بلاگ</h2>
            <span>تولید محصولات با کیفیت مطابق با آخرین استانداردهای روز دنیا</span>
        </div>
        <!-- <div class="blogPostHome">
            <div class="sectionOne">
                <a href="">
                    <img class="lowRadius" src="<?php //echo get_template_directory_uri() ?>/img/x-c-0072.jpg" alt="">
                    <h3>مجله کارن طب</h3>
                </a>
            </div>
            <div class="sectionTwo">
                <div class="sectionThreeFourP">
                    <div class="sectionThree">
                        <a href="">
                            <img class="lowRadius" src="<?php //echo get_template_directory_uri() ?>/img/oxy-pro-0379.jpg" alt="">
                            <h3>مجله کارن طب</h3>
                        </a>
                    </div>
                    <div class="sectionFour">
                        <a href="">
                            <img class="lowRadius" src="<?php //echo get_template_directory_uri() ?>/img/xgunhero.jpg" alt="">
                            <h3>مجله کارن طب</h3>
                        </a>
                    </div>
                </div>
                <div class="sectionFive">
                    <a href="">
                        <img class="lowRadius" src="<?php //echo get_template_directory_uri() ?>/img/oxy-pro-0324.jpg" alt="">
                        <h3>مجله کارن طب</h3>
                    </a>
                </div>
            </div>
        </div> -->
        <?php
            // Query for the 4 most recent posts
            $recent_posts_args = array(
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $recent_posts_query = new WP_Query($recent_posts_args);
            // Display the 4 most recent posts with title and full-size thumbnail
            if ($recent_posts_query->have_posts()) {
                echo '<div class="recentPostsHome">';
                echo '<div class="recentPostsHomeList">';
                // Loop through the recent posts
                while ($recent_posts_query->have_posts()) {
                    $recent_posts_query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="recent-post">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); // Use 'full' to display the full-size thumbnail ?>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                }
                echo '</div>';
                echo '</div>';
            }
            // Reset post data
            wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
<?php
/*
Template Name: Employment Template
*/
get_header();
?>

<div class="employmentPageBack">
    <div class="employmentPageBack mainView">
        <div class="generalHeading highMargined centeredText bottomBorder">
            <h1>همکاری با <div class="changeColorHeader">کارن طب</div></h1>
            <span>خدمات پس از فروش 24 ساعته محصولات کارن طب</span>
        </div>
        <div class="empPageDesc bgLight mediumPadding mediumMargined lowRadius">
            <p class="justified">کاربر گرامی؛ در صورت تمایل به همکاری با مجموعه تجهیزات پزشکی کارن طب، با تکمیل فرم زیر درخواست خود را ثبت کنید. کارشناسان پشتیبانی ما در اسرع وقت اطلاعات شما را بررسی کرده و در صورت نیاز، با شما تماس خواهند گرفت.</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="1908" title="فرم همکاری با ما"]') ?>
    </div>
</div>

<?php get_footer(); ?>
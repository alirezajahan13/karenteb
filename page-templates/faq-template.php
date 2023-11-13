<?php
/*
Template Name: Faq Template
*/
get_header();
$karenteb_faq = get_field('karenteb_faq');
?>

<div class="faqPageBack">
    <div class="faqPage mainView">
        <div class="generalHeading highMargined centeredText bottomBorder">
            <h1>سوالات متداول</h1>
            <span>کارن طب</span>
        </div>
        <?php if($karenteb_faq){?>
            <?php 
                foreach ($karenteb_faq as $faq){ ?>
                <div class="faq darkBorder lowRadius mediumMargined">
                    <div class="question">
                        <h3 class="noMargin lowPadding"><?php echo $faq['faq_question']; ?></h3>
                        <svg height="20" width="20" fill="#187dba" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"></path></svg>
                    </div>
                    <p class="answer noMargin lowPadding"><?php echo $faq['faq_answer']; ?></p>
                </div> <?php } ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
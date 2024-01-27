<?php 
/*
Template Name: FreeDemo Template
*/
get_header();
?>

<div class="freeDemoPageBack">
    <div class="freeDemoPage mainView">
        <div class="generalHeading highMargined centeredText bottomBorder">
            <h1>Request a free demo</h1>
            <span>Get a free demo of production devices of Karen Teb company</span>
        </div>
        <div class="freeDemoSection">
            <div class="sectionOne">
                <p class="justified">Dear Colleague; If you want to receive a free demo of Karen Teb devices, please fill out the form below. After completing the form, our experts will contact you.</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="e29af1e" title="Request a free demo"]') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
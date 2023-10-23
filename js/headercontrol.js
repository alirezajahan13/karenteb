var $ = jQuery;

$(window).on('scroll' , function(){
    if($(document).scrollTop() >= 130){
        $('.stickyHeaderParent').addClass('showStickyHeader');
    }
    else{
        $('.stickyHeaderParent').removeClass('showStickyHeader');
    }
});

$(document).ready(function(){
    $('.mobileMenuClickParent #openMenuMob').click(function(){
        $('.mainMenu').slideDown(500);
        $('.mainSiteOverlay').slideDown(500);
        $('#openMenuMob').hide(300);
        $('#closeMenuMob').show(300);
    });
    $('.mobileMenuClickParent #closeMenuMob').click(function(){
        $('.mainMenu').slideUp(500);
        $('.mainSiteOverlay').slideUp(500);
        $('#closeMenuMob').hide(300);
        $('#openMenuMob').show(300);
    });
    $('.mainSiteOverlay').click(function(){ 
        $('.mainMenu').slideUp(500);
        $('.mainSiteOverlay').slideUp(500);
        $('#closeMenuMob').hide(300);
        $('#openMenuMob').show(300);
    });
});
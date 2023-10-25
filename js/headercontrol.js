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
    $('.menuSection .mainMenu > ul > .menu-item-has-children > a').append('<svg height="10" width="10" fill="#187dba" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"/></svg>');
    $('.mobileMenuParent .mainMenu > ul > .menu-item-has-children > a').append('<svg height="10" width="10" fill="#187dba" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"/></svg>');

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

    $('.mobileMenuParent > .mainMenu > ul > .menu-item-has-children > a').click(function(){
        $('.mobileMenuParent > .mainMenu > ul > .menu-item-has-children > .sub-menu').slideUp(300);
        if ($(this).siblings(".sub-menu").css('display') == 'block') {
            $(this).siblings('.sub-menu').slideUp(500);
        } else {
            $(this).siblings('.sub-menu').slideToggle(500);
        }
    });
});
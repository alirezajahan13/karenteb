var $ = jQuery;
let functionIsRan = false;
function stepCounter(elementSelector , currentNumber ,endNumber , stepNumber , totalTime){
    let theIntervals = Math.round(totalTime/(endNumber/stepNumber));
    let mainAction = setInterval(() => {
        if(currentNumber<endNumber){
            $(elementSelector).text(currentNumber);
            currentNumber+=stepNumber;
        }
        else{
            $(elementSelector).text(endNumber);
            clearInterval(mainAction);
        }
    }, theIntervals);
}
$(document).ready(function(){
    console.log('test');
    if($("#counterNumbers").length) {
        $(window).scroll(function(){
            let windowBottom = $(window).scrollTop() + $(window).outerHeight(true);
            let objectCenter = $('#counterNumbers').offset().top + ($('#counterNumbers').outerHeight(true)/2);
            if(windowBottom > objectCenter && functionIsRan==false){
                stepCounter('#counter-1', 1 , 85 , 2 , 1000);
                stepCounter('#counter-2', 1 , 16 , 1 , 900);
                stepCounter('#counter-3', 1 , 2413 , 50 , 900);
                stepCounter('#counter-4', 1 , 3786 , 60 , 1000);
                functionIsRan = true;
            }
        });    
    };
    if($(window).width() <768){
        let mobHeaderHeight = $('.mobileMenuParent').outerHeight(true) + 0;
        $('body').css('padding-top',mobHeaderHeight);
    }
    $('.faq > .question').click(function(){
        $('.faq > .answer').slideUp(300);
        if ($(this).siblings(".answer").css('display') == 'block') {
            $(this).siblings('.answer').slideUp(500);
        } else {
            $(this).siblings('.answer').slideToggle(500);
        }
    });
});
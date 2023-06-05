
$(document).ready(function(){
    $('.menu-dropdown').on('click', function(){
        $(this).next().stop().slideToggle();
        $(this).children('i').toggleClass('rote');
    });
    
});

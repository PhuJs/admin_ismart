
$(document).ready(function(){
    $('.menu-dropdown').on('click', function(){
        $(this).next().stop().slideToggle();
        $(this).children('i').toggleClass('rote');
    });
    
    $("input[name='checkall']").click(function() {
        var checked = $(this).is(':checked');
        $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    });

    $("input[name='checkPostsAll']").click(function() {
        var checked = $(this).is(':checked');
        $(this).closest('.card').find('.card-body input:checkbox').prop('checked', checked);
    });

    $("input[name='checkProductsAll']").click(function() {
        var checked = $(this).is(':checked');
        $(this).closest('.card').find('.card-body input:checkbox').prop('checked', checked);
    });
});

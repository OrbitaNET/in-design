/*
*   $('.filter-group-buttons').find('input:checked').each (function(){
    *       console.log ($(this).prop('checked'));
    *   });
*/
$(document).ready (function(){
    $('.getPeopleList').on('click', function(){
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else {
            $(this).removeClass('active');
        }

    });
});
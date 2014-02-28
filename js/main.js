/*
*   $('.filter-group-buttons').find('input:checked').each (function(){
    *       console.log ($(this).prop('checked'));
    *   });
*/
var current = $('.main-sidebar li.active');
var myTimer = false;
$(document).ready (function(){
    $('.getPeopleList').on('click', function(){
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else {
            $(this).removeClass('active');
        }
    });

    $('.main-sidebar.relative li, .second-sidebar.relative')
        .mouseenter(function() {
            clearTimeout(myTimer);
            if (!$(this).hasClass('active')){
                $('.main-sidebar li').removeClass('active')
                $(this).addClass('active');
                if ($('#'+$(this).data("submenu")).length == 1) {
                    $('.second-sidebar').css('opacity', '1');
                    $('.second-sidebar').css('display', 'table-cell');
                    $('.second-sidebar ul').hide();
                    $('#'+$(this).data("submenu")).show();
                }
                else {
                    $('.second-sidebar').css('opacity', '0');
                    $('.second-sidebar ul').hide();
                }
            }
        })
        .mouseleave(function() {
            myTimer = setTimeout(function (){
                if (!current.hasClass('active')){
                    $('.main-sidebar li').removeClass('active')
                    current.addClass('active');
                    if ($('#'+current.data("submenu")).length == 1) {
                        $('.second-sidebar').css('opacity', '1');
                        $('.second-sidebar ul').hide();
                        $('#'+current.data("submenu")).show();
                    }
                    else {
                        $('.second-sidebar').css('opacity', '1');
                        $('.second-sidebar ul').hide();
                    }
                }
            }, 200);
        });
    $('.main-sidebar.absolute li, .second-sidebar.absolute')
        .mouseenter(function() {
            clearTimeout(myTimer);
            if (!$(this).hasClass('active')){
                $('.main-sidebar li').removeClass('active')
                $(this).addClass('active');
                if ($('#'+$(this).data("submenu")).length == 1) {
                    $('.second-sidebar').css('opacity', '1');
                    $('.second-sidebar').css('display', 'table-cell');
                    $('.second-sidebar ul').hide();
                    $('#'+$(this).data("submenu")).show();
                }
                else {
                    $('.second-sidebar').css('opacity', '0');
                    $('.second-sidebar').hide();
                    $('.second-sidebar ul').hide();
                }
            }
        })
        .mouseleave(function() {
            myTimer = setTimeout(function (){
                if (!current.hasClass('active')){
                    $('.main-sidebar li').removeClass('active')
                    current.addClass('active');
                    if ($('#'+current.data("submenu")).length == 1) {
                        $('.second-sidebar').css('opacity', '1');
                        $('.second-sidebar ul').hide();
                        $('#'+current.data("submenu")).show();
                    }
                    else {
                        $('.second-sidebar').css('opacity', '0');
                        $('.second-sidebar').hide();
                        $('.second-sidebar ul').hide();
                    }
                }
            }, 200);
        });
});
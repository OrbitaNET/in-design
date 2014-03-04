/*
*   $('.filter-group-buttons').find('input:checked').each (function(){
    *       console.log ($(this).prop('checked'));
    *   });
*/
var current = $('.main-sidebar li.active');
var myTimer = false;
var myMap;

function init () {
    myMap = new ymaps.Map(
        'map',
        {
            center: [55.76, 37.64],
            zoom: 10
        }
    );
}

$(document).ready (function(){

    if ($("#map").length == 1) {
        ymaps.ready(init);
    }


    $('.getPeopleList').on('click', function(){
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else {
            $(this).removeClass('active');
        }
    });
    if ($('.main-sidebar.relative li.active').hasClass('add')){
        $(".second-sidebar").addClass('add');
    }
    else {
        $(".second-sidebar").removeClass('add');
    }
    $('.main-sidebar.relative li, .second-sidebar.relative')
        .mouseenter(function() {
            clearTimeout(myTimer);
            if ($(this).parents('td').hasClass('main-sidebar')) {
                if ($(this).hasClass('add')) {
                    $(".second-sidebar").addClass('add');
                }
                else {
                    $(".second-sidebar").removeClass('add');
                }
            }
            if (!$(this).hasClass('active')){
                $('.main-sidebar.relative li').removeClass('active')
                $(this).addClass('active');
                if ($('#'+$(this).data("submenu")).length == 1) {
                    $('.second-sidebar.relative').css('opacity', '1');
                    $('.second-sidebar.relative').css('display', 'table-cell');
                    $('.second-sidebar.relative ul').hide();
                    $('#'+$(this).data("submenu")).show();
                }
                else {
                    $('.second-sidebar.relative').css('opacity', '0');
                    $('.second-sidebar.relative ul').hide();
                }
            }
        })
        .mouseleave(function() {
            myTimer = setTimeout(function (){
                if (current.parents('td').hasClass('main-sidebar')) {
                    if (current.hasClass('add')) {
                        $(".second-sidebar").addClass('add');
                    }
                    else {
                        $(".second-sidebar").removeClass('add');
                    }
                }
                if (!current.hasClass('active')){
                    $('.main-sidebar.relative li').removeClass('active');
                    current.addClass('active');
                    if ($('#'+current.data("submenu")).length == 1) {
                        $('.second-sidebar.relative').css('opacity', '1');
                        $('.second-sidebar.relative ul').hide();
                        $('#'+current.data("submenu")).show();
                    }
                    else {
                        $('.second-sidebar.relative').css('opacity', '1');
                        $('.second-sidebar.relative ul').hide();
                    }
                }
            }, 200);
        });
    $('.main-sidebar.absolute li, .second-sidebar.absolute')
        .mouseenter(function() {
            clearTimeout(myTimer);
            if ($(this).parents('td').hasClass('main-sidebar')) {
                if ($(this).hasClass('add')) {
                    $(".second-sidebar").addClass('add');
                }
                else {
                    $(".second-sidebar").removeClass('add');
                }
            }
            if (!$(this).hasClass('active')){
                $('.main-sidebar.absolute li').removeClass('active')
                $(this).addClass('active');
                if ($('#'+$(this).data("submenu")).length == 1) {
                    $('.second-sidebar.absolute').css('opacity', '1');
                    $('.second-sidebar.absolute').css('display', 'table-cell');
                    $('.second-sidebar.absolute ul').hide();
                    $('#'+$(this).data("submenu")).show();
                }
                else {
                    $('.second-sidebar.absolute').css('opacity', '0');
                    $('.second-sidebar.absolute').hide();
                    $('.second-sidebar.absolute ul').hide();
                }
            }
        })
        .mouseleave(function() {
            myTimer = setTimeout(function (){
                if (current.parents('td').hasClass('main-sidebar')) {
                    if (current.hasClass('add')) {
                        $(".second-sidebar").addClass('add');
                    }
                    else {
                        $(".second-sidebar").removeClass('add');
                    }
                }
                if (!current.hasClass('active')){
                    $(".second-sidebar").removeClass('add');
                    $('.main-sidebar.absolute li').removeClass('active');
                    current.addClass('active');
                    if ($('#'+current.data("submenu")).length == 1) {
                        $('.second-sidebar.absolute').css('opacity', '1');
                        $('.second-sidebar.absolute ul').hide();
                        $('#'+current.data("submenu")).show();
                    }
                    else {
                        $('.second-sidebar.absolute').css('opacity', '0');
                        $('.second-sidebar.absolute').hide();
                        $('.second-sidebar.absolute ul').hide();
                    }
                }
            }, 200);
        });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('.toTop').fadeIn();
        } else {
            $('.toTop').fadeOut();
        }
    });

    $('.toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 300);
        return false;
    });

    $(".datepicker.date").datetimepicker({
        language: "ru",
        todayBtn: true,
        startDate: new Date(),
        todayHighlight: true,
        autoclose: true,
        pickerPosition: "top-right",
        weekStart: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

    /*$(".datetimepicker").datetimepicker({
        language: "ru",
        format: 'dd.mm.yyyy',
        linkField: "time_field",
        linkFormat: "hh:ii",
        todayBtn: true,
        startDate: new Date(),
        todayHighlight: true,
        initialDate: new Date(),
        autoclose: true
    });*/

});
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

    ymaps.ready(init);

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
                if (!current.hasClass('active')){
                    $('.main-sidebar.relative li').removeClass('active')
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
                if (!current.hasClass('active')){
                    $('.main-sidebar.absolute li').removeClass('active')
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
});
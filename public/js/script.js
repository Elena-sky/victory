/**
 * Created by MacBook on 28.04.2018.
 */
$(document).ready(function () {

    $(".forpublishers-row-one").hover(function () {
        $('#change').css('color', '#FFFF00');
    });

    $(".forpublishers-row-three").hover(function () {
        $('#change').css('color', '#008000');
    });

    // modal form
    $(document).ready(function() {
        window.setTimeout( function(){
            $('#modal_form').css('display', 'flex');
            $('#overlay').css('display', 'block');
            console.log('show');
        }, 5000);

        $('#modal_close, #overlay').click( function(){
            $('#modal_form').css('display', 'none');
            $('#overlay').css('display', 'none');
        });
    });

    // menu change color js depends on section
    var top1 = $('#header-section').offset().top;
    var top2 = $('#about-section').offset().top;
    var top3 = $('#forpublishers-section').offset().top;
    var top4 = $('#foradvertisers-section').offset().top;
    var top5 = $('#contacts-section').offset().top;

    $(document).on( 'scroll' ,function() {
        var scrollPos = $(document).scrollTop();
        if (scrollPos >= top1 && scrollPos < top2) {
            $('#about-menu-text').css('color', '#333333');
            $('#forpublishers-menu-text').css('color', '#333333');
            $('#foradvertisers-menu-text').css('color', '#333333');
            $('#contacts-menu-text').css('color', '#333333');
        } else if (scrollPos >= top2 && scrollPos < top3) {
            $('#about-menu-text').css('color', '#fff');
            $('#forpublishers-menu-text').css('color', '#333333');
            $('#foradvertisers-menu-text').css('color', '#333333');
        } else if (scrollPos >= top3 && scrollPos < top4) {
            $('#forpublishers-menu-text').css('color', '#cc0000');
            $('#about-menu-text').css('color', '#333333');
            $('#foradvertisers-menu-text').css('color', '#333333');
        }
        else if (scrollPos >= top4 && scrollPos < top5) {
            $('#foradvertisers-menu-text').css('color', '#fff');
            $('#about-menu-text').css('color', '#333333');
            $('#forpublishers-menu-text').css('color', '#333333');
            $('#contacts-menu-text').css('color', '#333333');

        }
        else if (scrollPos >= top5) {
            $('#contacts-menu-text').css('color', '#cc0000');
            $('#about-menu-text').css('color', '#333333');
            $('#forpublishers-menu-text').css('color', '#333333');
            $('#foradvertisers-menu-text').css('color', '#333333');
        }
    });



});
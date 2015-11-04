$(document).ready(function () {

    var wall = new freewall('.grid');
    wall.reset({
        selector: '.item',
        animate: true,
        cellW: 350,
        cellH: 425,
        gutterX: 40,
        gutterY: 50,
        onResize: function() {
            wall.refresh();
        }
    });
    wall.fitWidth();
    $(window).trigger('resize');

    showLogin();
    changeActiveClass();
});

function showLogin() {
    $('#showlogin').click(function () {
        
        if (!$('.nav_item').hasClass('active')) {
            $('#login_box').toggle();
            $('#showlogin').toggleClass("highlight").toggleClass("active");
        } else if($('.nav_item').hasClass('active')) {
            $('.nav_item').removeClass('active');

            $('#login_box').show();
            $('#showlogin').addClass("highlight").addClass("active");
        } else {
            $('.nav_item').addClass('active');

            $('#login_box').hide();
            $('#showlogin').removeClass("highlight").removeClass("active");
        }
    });
}

function changeActiveClass() {
    $('.profile_stats ul li a').click(function(e){
        $('.profile_stats ul li').removeClass('active_tab');
        $('.profile_tab').hide();

        var $id = $(this).find('h4').text().toLowerCase();
        console.log($id)
        var $parent = $(this).parent();

        if(!$parent.hasClass('active_tab'))
        {
            $parent.addClass('active_tab');
            $('#profile_' + $id).show();
        }
        e.preventDefault();

    });
}
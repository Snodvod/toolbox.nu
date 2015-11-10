$(document).ready(function () {

    showLogin();
    changeActiveClassProfile();
    changeActiveClass('.grid_view');
    changeActiveClass('#duration_ratio');
    toggleFilter();
    toggleLikes();
    toggleMainNavMenu();
    $('#picture_carousel').carousel();

    //DATEPICKERS
    $.datepicker.setDefaults($.datepicker.regional['nl']);
    $('.datepicker').datepicker({ minDate: 0 });


    //GRIDS
    var wall = new freewall('.grid');
    wall.reset({
        selector: '.item',
        animate: true,
        cellW: 350,
        cellH: 375,
        gutterX: 40,
        gutterY: 50,
        onResize: function () {
            wall.refresh();
        }
    });
    wall.fitWidth();
    wall.refresh();
    $(window).trigger('resize');

    // SLIDERS
    $('#flat_slider_distance').slider({
        orientation: 'horizontal',
        range: "min",
        min: 1,
        max: 10,
        value: 3,
        slide: function (event, ui) {
            $("#distance").val(ui.value + " KM");
        }
    });

    $("#distance").val($('#flat_slider_distance').slider('value') + " KM");


    $('#flat_slider_amount').slider({
        orientation: 'horizontal',
        range: true,
        min: 1,
        max: 10,
        values: [2, 6],
        slide: function (event, ui) {
            $("#amount").val("\u20ac" + ui.values[0] + "  -  \u20ac" + ui.values[1]);
        }
    });

    $("#amount").val("\u20ac " + $("#flat_slider_amount").slider("values", 0) +
        "  -  \u20ac " + $("#flat_slider_amount").slider("values", 1));
    ////////////////////////////////////////

});

function showLogin() {

    var $active = $('.nav_item.active');
    console.log($active)
    $('#showlogin').click(function () {

        $($active).toggleClass('active');

        $('#login_box').toggle();
        $('#showlogin').toggleClass("active");
    });
}

function changeActiveClass($parent) {
    $($parent + ' ul li').click(function (e) {
        $($parent + ' ul li.active').removeClass('active');

        console.log($parent);
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.toggleClass('active');
        }
        e.preventDefault();
    });
}

function changeActiveClassProfile() {
    $('.sub_menu ul li a').click(function (e) {
        $('.sub_menu ul li').removeClass('active_tab');
        $('.sub_menu_tab').hide();

        var $id = $(this).find('h4').text().toLowerCase();
        console.log($id);
        var $parent = $(this).parent();

        if (!$parent.hasClass('active_tab')) {
            $parent.addClass('active_tab');
            $('#tab_' + $id).show();
        }
        e.preventDefault();

    });
}

function toggleFilter() {
    $('.grid_filter button').click(function () {
        $('#tools').slideToggle();
    });
}

function toggleLikes() {
    $('.message_likes i').click(function() {
        if(!$(this).hasClass('liked'))
        {
            $(this).addClass('liked');

            $('.message_likes h5').html(function(i, val){
                return +val+1;
            });
        }
        else
        {
            $(this).removeClass('liked');

            $('.message_likes h5').html(function(i, val){
                return +val-1;
            });
        }
    });
}

function toggleMainNavMenu(){
    $('.small_device .hamburger i').click(function(){
        $('.small_device .dropdown').slideToggle();
    });
}
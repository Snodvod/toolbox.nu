$(document).ready(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return results[1] || 0;
        }
    }
    if($.urlParam('column')) {
        $('.grid_sort select').val($.urlParam('column'));
    }
    if($.urlParam('minprice')) {
        $("#flat_slider_amount").slider("values", 0, $.urlParam('minprice'));
    }
    if($.urlParam('maxprice')) {
        $("#flat_slider_amount").slider("values", 1, $.urlParam('maxprice'));
    }
    $("#amount").val("\u20ac " + $("#flat_slider_amount").slider("values", 0) + "  -  \u20ac " + $("#flat_slider_amount").slider("values", 1));
    $('#flat_slider_amount').on( "slidechange", function( event, ui ) {
        $("#flat_slider_amount").slider("values", 0);
        $("#flat_slider_amount").slider("values", 1);
        var search;
        var start;
        var stop;
        var order;
        var column;
        var minprice = '&minprice=' + $("#flat_slider_amount").slider("values", 0);
        var maxprice = '&maxprice=' + $("#flat_slider_amount").slider("values", 1);
        if ($.urlParam('search')) {
            search = 'search=' + $.urlParam('search');
        } else {
            search = '';
        }
        if ($.urlParam('start')) {
            start = '&start=' + $.urlParam('start');
        } else {
            start = '';
        }
        if ($.urlParam('stop')) {
            stop = '&stop=' + $.urlParam('stop');
        } else {
            stop = '';
        }
        if ($.urlParam('order')) {
            order = '&order=' + $.urlParam('order');
        } else {
            order = '';
        }
//        if ($.urlParam('min')) {
//            min = '&min=' + $.urlParam('min');
//        } else {
//            min = '';
//        }
//        if ($.urlParam('max')) {
//            max = '&max=' + $.urlParam('max');
//        } else {
//            max = '';
//        }
        if ($.urlParam('column')) {
            column = '&column=' + $.urlParam('column');
        } else {
            column = '';
        }
        document.location.href = '/tools?' + search + start + stop + order + column + minprice + maxprice;
    });
    
    $('.grid_sort select').change(function (e) {
        e.preventDefault();
        var selector = $(this).val();
        var search;
        var start;
        var stop;
        var order;
        var column;
        var min;
        var max;
        if ($.urlParam('search')) {
            search = 'search=' + $.urlParam('search');
        } else {
            search = '';
        }
        if ($.urlParam('start')) {
            start = '&start=' + $.urlParam('start');
        } else {
            start = '';
        }
        if ($.urlParam('stop')) {
            stop = '&stop=' + $.urlParam('stop');
        } else {
            stop = '';
        }
        if ($.urlParam('order')) {
            order = '&order=' + $.urlParam('order');
        } else {
            order = '';
        }
        if ($.urlParam('min')) {
            min = '&min=' + $.urlParam('min');
        } else {
            min = '';
        }
        if ($.urlParam('max')) {
            max = '&max=' + $.urlParam('max');
        } else {
            max = '';
        }
//        if ($.urlParam('column')) {
//            column = '&column=' + $.urlParam('column');
//        } else {
//            column = '';
//        }
        column = '&column=' + selector;
        console.log(search);
        console.log(start);
        console.log(stop);
        console.log(order);
        console.log(column);
        console.log(min);
        console.log(max);
        document.location.href = '/tools?' + search + start + stop + order + column + min + max;
    });
    $("#homesearchgroup div button").click(function (e) {
        e.preventDefault();
        var searchval = '';
        var startval = '';
        var stopval = '';
        searchval = $('#homesearchgroup div #homesearch').val();
        startval = $('#homesearchgroup div #homestart').val();
        stopval = $('#homesearchgroup div #homestop').val();
        console.log(searchval);
        console.log(startval);
        console.log(stopval);
        document.location.href = '/tools?search=' + searchval + '&start=' + startval + '&stop=' + stopval;
    });
    $(".action.notstatus").click(function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        var status = $(this).data("val");
        $("li#" + id).slideUp();
        console.log(status);
        console.log(id);
        $.ajax({
            type: "GET",
            url: '/reservation/' + id + '/status/' + status + '/update',
            success: function () {}
        });
    });


    $('.datepicker#stop').change(priceChanger);
});

function priceChanger() {

    var singularPrice = $('.item_price').data('price');
    var start = $('.datepicker#start').datepicker('getDate');
    var stop = $('.datepicker#stop').datepicker('getDate');
    var days = (stop - start)/1000/60/60/24;


    var multiPrice = singularPrice * days;

    $('.item_price').html('€ ' + multiPrice);
}
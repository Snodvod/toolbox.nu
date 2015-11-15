$(document).ready(function () {
        var searchval = 0;
        var startval = 0;
        var stopval = 0;
    $("#homesearchgroup div button").click(function (e) {
        e.preventDefault();
        searchval = $('#homesearchgroup div #homesearch').val();
        startval = $('#homesearchgroup div #homestart').val();
        stopval = $('#homesearchgroup div #homestop').val();
        console.log(searchval);
        console.log(startval);
        console.log(stopval);
        document.location.href='/tools?search=' + searchval + '&start=' + startval + '&stop=' + stopval;
    });
    $(".action.notstatus").click(function (e) {
        e.preventDefault();
        //$(this).addClass("redeemed").text("Redeemed");
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

    var singularPrice = $('.item_price').html().replace(/[^0-9]/g, '');
    var start = $('.datepicker#start').datepicker('getDate');
    var stop = $('.datepicker#stop').datepicker('getDate');
    var days = (stop - start)/1000/60/60/24;


    var multiPrice = singularPrice * days;

    $('.item_price').html('€ ' + multiPrice);
}

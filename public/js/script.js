$(document).ready(function () {
    $(".btn.redeem").click(function (e) {
        e.preventDefault();
        $(this).addClass("redeemed").text("Redeemed");
        var id = $(this).attr("id");
        var status;
        $(".ticket#" + id).addClass("activated");
        console.log(id);
        $.ajax({
            type: "GET",
            url: 'reservation/' + id + '/status/' + status + '/update',
            success: function () {}
        });
    });
});
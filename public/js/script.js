$(document).ready(function () {
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
});
$(document).ready(function () {
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        console.log(value);
        $("#packages .card").filter(function () {
            $(this).toggle($(this).attr('filter').toLowerCase().indexOf(value) > -1);
        });
    });
});

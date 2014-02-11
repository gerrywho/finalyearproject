$(document).ready(function () {
    $("#suggest").keyup(function () {
        $.get("suggest.php", {course: $("#suggest").val()}, function(data){
            $("datalist").empty();
            $("datalist").html(data);
        })
    })
});
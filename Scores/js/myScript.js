$(function () {
    document.getElementById('manual').onclick =
                function () {
                    if (($("#manual").val() == "unchecked") && ($("#uscheck").val() == "unchecked")) {
                        $("#manual").val("checked");
                        $("#itemadjust").prop('disabled', false);
                        //$("#uscheck").val("checked");
                        //$("#itemhandicap").prop('disabled', true)
                        //alert($("#uscheck").val());
                    }
                    else if (($("#manual").val() == "unchecked") && ($("#uscheck").val() == "checked")) {
                        $("#manual").val("checked");
                        $("#itemadjust").prop('disabled', false);
                        //$("#uscheck").val("checked");
                        //$("#itemhandicap").prop('disabled', true)
                        alert("You can only choose USGA System or Manual Adjustment");
                    }

                    else {
                        $("#manual").val("unchecked");
                        $("#itemadjust").prop('disabled', true);
                        //alert($("#manual").val());
                    }
                };
});

$(function () {
    document.getElementById('uscheck').onclick =
                function () {
                    if (($("#uscheck").val() == "unchecked") && ($("#manual").val() == "unchecked")) {
                        $("#uscheck").val("checked");
                        $("#itemslope").prop('disabled', false);
                        //$("#uscheck").val("checked");
                        //$("#itemhandicap").prop('disabled', true)
                        //alert($("#uscheck").val());
                    }
                    else if (($("#uscheck").val() == "unchecked") && ($("#manual").val() == "checked")) {
                        $("#uscheck").val("checked");
                        $("#itemslope").prop('disabled', false);
                        //$("#uscheck").val("checked");
                        //$("#itemhandicap").prop('disabled', true)
                        alert("You can only choose USGA System or Manual Adjustment");
                    }

                    else {
                        $("#uscheck").val("unchecked");
                        $("#itemslope").prop('disabled', true);
                        //alert($("#manual").val());
                    }
                };
});


$(function () {
    document.getElementById('name-submit').onclick =
                function () {
                    var name = $('select#members').val();
                    if ($.trim(name) != '') {
                        $.post('ajax/name.php', { name: name }, function (data) {
                            alert(data);
                            $('#itemhandicap').val(data);
                        });
                    }
                }
});


           
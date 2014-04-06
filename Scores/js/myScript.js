$(function () {
    document.getElementById('manual').onclick =
                function () {
                    if (($("#manual").val() == "unchecked") && ($("#uscheck").val() == "unchecked")) {
                        $("#manual").val("checked");
                        $("#itemadjust").prop('disabled', false);
                       
                    }
                    else if (($("#manual").val() == "unchecked") && ($("#uscheck").val() == "checked")) {
                        $("#manual").val("checked");
                        $("#itemadjust").prop('disabled', false);
                        alert("You can only choose USGA System or Manual Adjustment");
                    }

                    else {
                        $("#manual").val("unchecked");
                        $("#itemadjust").prop('disabled', true);
                    }
                };
});

$(function () {
    document.getElementById('uscheck').onclick =
                function () {
                    if (($("#uscheck").val() == "unchecked") && ($("#manual").val() == "unchecked")) {
                        $("#uscheck").val("checked");
                        $("#itemslope").prop('disabled', false);
                        
                    }
                    else if (($("#uscheck").val() == "unchecked") && ($("#manual").val() == "checked")) {
                        $("#uscheck").val("checked");
                        $("#itemslope").prop('disabled', false);
                        alert("You can only choose USGA System or Manual Adjustment");
                    }

                    else {
                        $("#uscheck").val("unchecked");
                        $("#itemslope").prop('disabled', true);
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


           
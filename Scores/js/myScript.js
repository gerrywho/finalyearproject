 $(function () {
                document.getElementById('manual').onclick =
                function () {
                    if (($("#manual").val() == "unchecked")) {
                        $("#manual").val("checked");
                        $("#manadjust").prop('disabled', false);
                        //$("#itemhandicap").prop('disabled', true)
                        alert($("#manual").val());
                    }
                    else {
                        $("#manual").val("unchecked");
                        $("#manadjust").prop('disabled', true);
                        alert($("#manual").val());
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


           
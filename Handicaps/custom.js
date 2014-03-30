$(function () {
    $('#submit').on('click', function (e) {
        e.preventDefault();
        //$('#submit').fadeOut(300);
        var memberval = $('#members').val();
        var slope = $('#itemslope').val();
        $.ajax({
            url: 'uscalc.php',
            type: 'post',

            data: { action: 'test', member: memberval, itemslope: slope },
            success: function (data, status) {

                $('#itemscore').val(data);
            }

        })
    })
});
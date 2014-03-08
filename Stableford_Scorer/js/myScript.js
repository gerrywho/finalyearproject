$(document).ready(function () {
    $('#submitbutton').click(function () {
        //var Hcap = document.getElementById('handicap');
        var point_score = 0;
        var hole_points = point_score;
        var HCap = parseInt($('#handicap').val());
        if (HCap < 18) {
            var hole1score = $('select#score1').val();
            if (hole1score === "-") {
                point_score = point_score + 0;
                $('#net1').val(point_score - hole_points);
            }
            else if (hole1score != "-") {
                var index1 = $('#index1').val();
                var par1 = parseInt($('#par1').val());

                if (index1 <= HCap) {
                    if (hole1score - 1 > par1 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole1score - 1 == par1 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole1score - 1 == par1) {
                        point_score = point_score + 2;
                    }
                    else if (hole1score - 1 == par1 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole1score - 1 == par1 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole1score > par1 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole1score == par1 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole1score == par1) {
                        point_score = point_score + 2;
                    }
                    else if (hole1score == par1 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole1score == par1 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net1').val(point_score - hole_points);
            }

            var hole2score = $('select#score2').val();
            hole_points = point_score;
            if (hole2score === "-") {
                point_score = point_score + 0;
                $('#net2').val(point_score - hole_points);
            }
            else if (hole2score != "-") {
                var index2 = parseInt($('#index2').val());
                var par2 = parseInt($('#par2').val());

                if (index2 <= HCap) {
                    if (hole2score - 1 > par2 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole2score - 1 == par2 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole2score - 1 == par2) {
                        point_score = point_score + 2;
                    }
                    else if (hole2score - 1 == par2 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole2score - 1 == par2 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }
                }
                else {
                    if (hole2score > par2 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole2score == par2 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole2score == par2) {
                        point_score = point_score + 2;
                    }
                    else if (hole2score == par2 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole2score == par2 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net2').val(point_score - hole_points);
            }

            var hole3score = $('select#score3').val();
            hole_points = point_score;
            if (hole3score === "-") {
                point_score = point_score + 0;
                $('#net3').val(point_score - hole_points);
            }
            else if (hole3score != "-") {
                var index3 = $('#index3').val();
                var par3 = parseInt($('#par3').val());

                if (index3 <= HCap) {
                    if (hole3score - 1 > par3 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole3score - 1 == par3 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole3score - 1 == par3) {
                        point_score = point_score + 2;
                    }
                    else if (hole3score - 1 == par3 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole3score - 1 == par3 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole3score > par3 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole3score == par3 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole3score == par3) {
                        point_score = point_score + 2;
                    }
                    else if (hole3score == par3 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole3score == par3 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net3').val(point_score - hole_points);
            }

            var hole4score = $('select#score4').val();
            hole_points = point_score;
            if (hole4score === "-") {
                point_score = point_score + 0;
                $('#net4').val(point_score - hole_points);
            }
            else if (hole4score != "-") {
                var index4 = $('#index4').val();
                var par4 = parseInt($('#par4').val());

                if (index4 <= HCap) {
                    if (hole4score - 1 > par4 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole4score - 1 == par4 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole4score - 1 == par4) {
                        point_score = point_score + 2;
                    }
                    else if (hole4score - 1 == par4 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole4score - 1 == par4 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole4score > par4 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole4score == par4 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole4score == par4) {
                        point_score = point_score + 2;
                    }
                    else if (hole4score == par4 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole4score == par4 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net4').val(point_score - hole_points);
            }

            var hole5score = $('select#score5').val();
            hole_points = point_score;
            if (hole5score === "-") {
                point_score = point_score + 0;
                $('#net5').val(point_score - hole_points);
            }
            else if (hole5score != "-") {
                var index5 = $('#index5').val();
                var par5 = parseInt($('#par5').val());

                if (index5 <= HCap) {
                    if (hole5score - 1 > par5 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole5score - 1 == par5 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole5score - 1 == par5) {
                        point_score = point_score + 2;
                    }
                    else if (hole5score - 1 == par5 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole5score - 1 == par5 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole5score > par5 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole5score == par5 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole5score == par5) {
                        point_score = point_score + 2;
                    }
                    else if (hole5score == par5 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole5score == par5 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net5').val(point_score - hole_points);
            }

            var hole6score = $('select#score6').val();
            hole_points = point_score;
            if (hole6score === "-") {
                point_score = point_score + 0;
                $('#net6').val(point_score - hole_points);
            }
            else if (hole6score != "-") {
                var index6 = $('#index6').val();
                var par6 = parseInt($('#par6').val());

                if (index6 <= HCap) {
                    if (hole6score - 1 > par6 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole6score - 1 == par6 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole6score - 1 == par6) {
                        point_score = point_score + 2;
                    }
                    else if (hole6score - 1 == par6 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole6score - 1 == par6 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole6score > par6 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole6score == par6 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole6score == par6) {
                        point_score = point_score + 2;
                    }
                    else if (hole6score == par6 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole6score == par6 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net6').val(point_score - hole_points);
            }

            var hole7score = $('select#score7').val();
            hole_points = point_score;
            if (hole7score === "-") {
                point_score = point_score + 0;
                $('#net7').val(point_score - hole_points);
            }
            else if (hole7score != "-") {
                var index7 = $('#index7').val();
                var par7 = parseInt($('#par7').val());

                if (index7 <= HCap) {
                    if (hole7score - 1 > par7 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole7score - 1 == par7 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole7score - 1 == par7) {
                        point_score = point_score + 2;
                    }
                    else if (hole7score - 1 == par7 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole7score - 1 == par7 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole7score > par7 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole7score == par7 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole7score == par7) {
                        point_score = point_score + 2;
                    }
                    else if (hole7score == par7 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole7score == par7 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net7').val(point_score - hole_points);
            }

            var hole8score = $('select#score8').val();
            hole_points = point_score;
            if (hole8score === "-") {
                point_score = point_score + 0;
                $('#net8').val(point_score - hole_points);
            }
            else if (hole8score != "-") {
                var index8 = $('#index8').val();
                var par8 = parseInt($('#par8').val());

                if (index8 <= HCap) {
                    if (hole8score - 1 > par8 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole8score - 1 == par8 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole8score - 1 == par8) {
                        point_score = point_score + 2;
                    }
                    else if (hole8score - 1 == par8 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole8score - 1 == par8 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole1score > par8 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole8score == par8 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole8score == par8) {
                        point_score = point_score + 2;
                    }
                    else if (hole8score == par8 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole8score == par8 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net8').val(point_score - hole_points);
            }

            var hole9score = $('select#score9').val();
            hole_points = point_score;
            if (hole9score === "-") {
                point_score = point_score + 0;
                $('#net9').val(point_score - hole_points);
            }
            else if (hole9score != "-") {
                var index9 = $('#index9').val();
                var par9 = parseInt($('#par9').val());

                if (index9 <= HCap) {
                    if (hole9score - 1 > par9 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole9score - 1 == par9 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole9score - 1 == par9) {
                        point_score = point_score + 2;
                    }
                    else if (hole9score - 1 == par9 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole9score - 1 == par9 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole9score > par9 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole9score == par9 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole9score == par9) {
                        point_score = point_score + 2;
                    }
                    else if (hole9score == par9 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole9score == par9 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net9').val(point_score - hole_points);
            }

            var hole10score = $('select#score10').val();
            hole_points = point_score;
            if (hole10score === "-") {
                point_score = point_score + 0;
                $('#net10').val(point_score - hole_points);
            }
            else if (hole10score != "-") {
                var index10 = $('#index10').val();
                var par10 = parseInt($('#par10').val());

                if (index10 <= HCap) {
                    if (hole10score - 1 > par10 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole10score - 1 == par10 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole10score - 1 == par10) {
                        point_score = point_score + 2;
                    }
                    else if (hole10score - 1 == par10 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole10score - 1 == par10 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole10score > par10 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole10score == par10 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole10score == par10) {
                        point_score = point_score + 2;
                    }
                    else if (hole10score == par10 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole10score == par10 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net10').val(point_score - hole_points);
            }

            var hole11score = $('select#score11').val();
            hole_points = point_score;
            if (hole11score === "-") {
                point_score = point_score + 0;
                $('#net11').val(point_score - hole_points);
            }
            else if (hole11score != "-") {
                var index11 = $('#index11').val();
                var par11 = parseInt($('#par11').val());

                if (index11 <= HCap) {
                    if (hole11score - 1 > par11 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole11score - 1 == par11 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole11score - 1 == par11) {
                        point_score = point_score + 2;
                    }
                    else if (hole11score - 1 == par11 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole11score - 1 == par11 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole11score > par11 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole11score == par11 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole11score == par11) {
                        point_score = point_score + 2;
                    }
                    else if (hole11score == par11 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole11score == par11 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net11').val(point_score - hole_points);
            }

            var hole12score = $('select#score12').val();
            hole_points = point_score;
            if (hole12score === "-") {
                point_score = point_score + 0;
                $('#net12').val(point_score - hole_points);
            }
            else if (hole12score != "-") {
                var index12 = $('#index12').val();
                var par12 = parseInt($('#par12').val());

                if (index12 <= HCap) {
                    if (hole12score - 1 > par12 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole12score - 1 == par12 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole12score - 1 == par12) {
                        point_score = point_score + 2;
                    }
                    else if (hole12score - 1 == par12 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole12score - 1 == par12 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole12score > par12 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole12score == par12 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole12score == par12) {
                        point_score = point_score + 2;
                    }
                    else if (hole12score == par12 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole12score == par12 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net12').val(point_score - hole_points);
            }

            var hole13score = $('select#score13').val();
            hole_points = point_score;
            if (hole13score === "-") {
                point_score = point_score + 0;
                $('#net13').val(point_score - hole_points);
            }
            else if (hole13score != "-") {
                var index13 = $('#index13').val();
                var par13 = parseInt($('#par13').val());

                if (index13 <= HCap) {
                    if (hole13score - 1 > par13 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole13score - 1 == par13 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole13score - 1 == par13) {
                        point_score = point_score + 2;
                    }
                    else if (hole13score - 1 == par13 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole13score - 1 == par13 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole13score > par13 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole13score == par13 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole13score == par13) {
                        point_score = point_score + 2;
                    }
                    else if (hole13score == par13 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole13score == par13 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net13').val(point_score - hole_points);
            }

            var hole14score = $('select#score14').val();
            hole_points = point_score;
            if (hole14score === "-") {
                point_score = point_score + 0;
                $('#net14').val(point_score - hole_points);
            }
            else if (hole14score != "-") {
                var index14 = $('#index14').val();
                var par14 = parseInt($('#par14').val());

                if (index14 <= HCap) {
                    if (hole14score - 1 > par14 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole14score - 1 == par14 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole14score - 1 == par14) {
                        point_score = point_score + 2;
                    }
                    else if (hole14score - 1 == par14 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole14score - 1 == par14 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole14score > par14 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole14score == par14 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole14score == par14) {
                        point_score = point_score + 2;
                    }
                    else if (hole14score == par14 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole14score == par14 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net14').val(point_score - hole_points);
            }

            var hole15score = $('select#score15').val();
            hole_points = point_score;
            if (hole15score === "-") {
                point_score = point_score + 0;
                $('#net15').val(point_score - hole_points);
            }
            else if (hole15score != "-") {
                var index15 = $('#index15').val();
                var par15 = parseInt($('#par15').val());

                if (index15 <= HCap) {
                    if (hole15score - 1 > par15 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole15score - 1 == par15 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole15score - 1 == par15) {
                        point_score = point_score + 2;
                    }
                    else if (hole15score - 1 == par15 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole15score - 1 == par15 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole15score > par15 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole15score == par15 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole15score == par15) {
                        point_score = point_score + 2;
                    }
                    else if (hole15score == par15 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole15score == par15 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net15').val(point_score - hole_points);
            }

            var hole16score = $('select#score16').val();
            hole_points = point_score;
            if (hole16score === "-") {
                point_score = point_score + 0;
                $('#net16').val(point_score - hole_points);
            }
            else if (hole16score != "-") {
                var index16 = $('#index16').val();
                var par16 = parseInt($('#par16').val());

                if (index16 <= HCap) {
                    if (hole16score - 1 > par16 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole16score - 1 == par16 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole16score - 1 == par16) {
                        point_score = point_score + 2;
                    }
                    else if (hole16score - 1 == par16 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole16score - 1 == par16 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole16score > par16 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole16score == par16 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole16score == par16) {
                        point_score = point_score + 2;
                    }
                    else if (hole16score == par16 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole16score == par16 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net16').val(point_score - hole_points);
            }

            var hole17score = $('select#score17').val();
            hole_points = point_score;
            if (hole17score === "-") {
                point_score = point_score + 0;
                $('#net17').val(point_score - hole_points);
            }
            else if (hole17score != "-") {
                var index17 = $('#index17').val();
                var par17 = parseInt($('#par17').val());

                if (index17 <= HCap) {
                    if (hole17score - 1 > par17 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole17score - 1 == par17 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole17score - 1 == par17) {
                        point_score = point_score + 2;
                    }
                    else if (hole17score - 1 == par17 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole17score - 1 == par17 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole17score > par17 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole17score == par17 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole17score == par17) {
                        point_score = point_score + 2;
                    }
                    else if (hole17score == par17 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole17score == par17 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net17').val(point_score - hole_points);
            }

            var hole18score = $('select#score18').val();
            hole_points = point_score;
            if (hole18score === "-") {
                point_score = point_score + 0;
                $('#net18').val(point_score - hole_points);
            }
            else if (hole18score != "-") {
                var index18 = $('#index18').val();
                var par18 = parseInt($('#par18').val());

                if (index18 <= HCap) {
                    if (hole18score - 1 > par18 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole18score - 1 == par18 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole18score - 1 == par18) {
                        point_score = point_score + 2;
                    }
                    else if (hole18score - 1 == par18 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole18score - 1 == par18 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole18score > par18 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole18score == par18 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole18score == par18) {
                        point_score = point_score + 2;
                    }
                    else if (hole18score == par18 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole18score == par18 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net18').val(point_score - hole_points);
            }
            else {

            }
        }
        else {
            HCap = HCap - 18;
            var hole1score = $('select#score1').val();
            hole_points = point_score;
            if (hole1score === "-") {
                point_score = point_score + 0;
                $('#net1').val(point_score - hole_points);
            }
            else if (hole1score != "-") {
                var index1 = $('#index1').val();
                var par1 = parseInt($('#par1').val());

                if (index1 <= HCap) {
                    if (hole1score - 2 > par1 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole1score - 2 == par1 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole1score - 2 == par1) {
                        point_score = point_score + 2;
                    }
                    else if (hole1score - 2 == par1 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole1score - 2 == par1 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole1score - 1 > par1 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole1score - 1 == par1 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole1score - 1 == par1) {
                        point_score = point_score + 2;
                    }
                    else if (hole1score - 1 == par1 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole1score - 1 == par1 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net1').val(point_score - hole_points);
            }

            var hole2score = $('select#score2').val();
            hole_points = point_score;
            if (hole2score === "-") {
                point_score = point_score + 0;
                $('#net2').val(point_score - hole_points);
            }
            else if (hole2score != "-") {
                var index2 = $('#index2').val();
                var par2 = parseInt($('#par2').val());

                if (index2 <= HCap) {
                    if (hole2score - 2 > par2 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole2score - 2 == par2 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole2score - 2 == par2) {
                        point_score = point_score + 2;
                    }
                    else if (hole2score - 2 == par2 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole2score - 2 == par2 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole2score - 1 > par2 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole2score - 1 == par2 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole2score - 1 == par2) {
                        point_score = point_score + 2;
                    }
                    else if (hole2score - 1 == par2 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole2score - 1 == par2 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net2').val(point_score - hole_points);
            }

             var hole3score = $('select#score3').val();
            hole_points = point_score;
            if (hole3score === "-") {
                point_score = point_score + 0;
                $('#net3').val(point_score - hole_points);
            }
            else if (hole3score != "-") {
                var index3 = $('#index3').val();
                var par3 = parseInt($('#par3').val());

                if (index3 <= HCap) {
                    if (hole3score - 2 > par3 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole3score - 2 == par3 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole3score - 2 == par3) {
                        point_score = point_score + 2;
                    }
                    else if (hole3score - 2 == par3 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole3score - 2 == par3 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole3score - 1 > par3 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole3score - 1 == par3 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole3score - 1 == par3) {
                        point_score = point_score + 2;
                    }
                    else if (hole3score - 1 == par3 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole3score - 1 == par3 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net3').val(point_score - hole_points);
            }

             var hole4score = $('select#score4').val();
            hole_points = point_score;
            if (hole4score === "-") {
                point_score = point_score + 0;
                $('#net4').val(point_score - hole_points);
            }
            else if (hole4score != "-") {
                var index4 = $('#index4').val();
                var par4 = parseInt($('#par4').val());

                if (index4 <= HCap) {
                    if (hole4score - 2 > par4 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole4score - 2 == par4 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole4score - 2 == par4) {
                        point_score = point_score + 2;
                    }
                    else if (hole4score - 2 == par4 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole4score - 2 == par4 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole4score - 1 > par4 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole4score - 1 == par4 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole4score - 1 == par4) {
                        point_score = point_score + 2;
                    }
                    else if (hole4score - 1 == par4 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole4score - 1 == par4 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net4').val(point_score - hole_points);
            }

             var hole5score = $('select#score5').val();
            hole_points = point_score;
            if (hole5score === "-") {
                point_score = point_score + 0;
                $('#net5').val(point_score - hole_points);
            }
            else if (hole5score != "-") {
                var index5 = $('#index5').val();
                var par5 = parseInt($('#par5').val());

                if (index5 <= HCap) {
                    if (hole5score - 2 > par5 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole5score - 2 == par5 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole5score - 2 == par5) {
                        point_score = point_score + 2;
                    }
                    else if (hole5score - 2 == par5 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole5score - 2 == par5 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole5score - 1 > par5 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole5score - 1 == par5 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole5score - 1 == par5) {
                        point_score = point_score + 2;
                    }
                    else if (hole5score - 1 == par5 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole5score - 1 == par5 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net5').val(point_score - hole_points);
            }

             var hole6score = $('select#score6').val();
            hole_points = point_score;
            if (hole6score === "-") {
                point_score = point_score + 0;
                $('#net6').val(point_score - hole_points);
            }
            else if (hole6score != "-") {
                var index6 = $('#index6').val();
                var par6 = parseInt($('#par6').val());

                if (index6 <= HCap) {
                    if (hole6score - 2 > par6 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole6score - 2 == par6 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole6score - 2 == par6) {
                        point_score = point_score + 2;
                    }
                    else if (hole6score - 2 == par6 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole6score - 2 == par6 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole6score - 1 > par6 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole6score - 1 == par6 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole6score - 1 == par6) {
                        point_score = point_score + 2;
                    }
                    else if (hole6score - 1 == par6 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole6score - 1 == par6 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net6').val(point_score - hole_points);
            }

             var hole7score = $('select#score7').val();
            hole_points = point_score;
            if (hole7score === "-") {
                point_score = point_score + 0;
                $('#net7').val(point_score - hole_points);
            }
            else if (hole7score != "-") {
                var index7 = $('#index7').val();
                var par7 = parseInt($('#par7').val());

                if (index7 <= HCap) {
                    if (hole7score - 2 > par7 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole7score - 2 == par7 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole7score - 2 == par7) {
                        point_score = point_score + 2;
                    }
                    else if (hole7score - 2 == par7 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole7score - 2 == par7 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole7score - 1 > par7 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole7score - 1 == par7 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole7score - 1 == par7) {
                        point_score = point_score + 2;
                    }
                    else if (hole7score - 1 == par7 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole7score - 1 == par7 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net7').val(point_score - hole_points);
            }

             var hole8score = $('select#score8').val();
            hole_points = point_score;
            if (hole8score === "-") {
                point_score = point_score + 0;
                $('#net8').val(point_score - hole_points);
            }
            else if (hole8score != "-") {
                var index8 = $('#index8').val();
                var par8 = parseInt($('#par8').val());

                if (index8 <= HCap) {
                    if (hole8score - 2 > par8 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole8score - 2 == par8 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole8score - 2 == par8) {
                        point_score = point_score + 2;
                    }
                    else if (hole8score - 2 == par8 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole8score - 2 == par8 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole8score - 1 > par8 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole8score - 1 == par8 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole8score - 1 == par8) {
                        point_score = point_score + 2;
                    }
                    else if (hole8score - 1 == par8 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole8score - 1 == par8 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net8').val(point_score - hole_points);
            }

             var hole9score = $('select#score9').val();
            hole_points = point_score;
            if (hole9score === "-") {
                point_score = point_score + 0;
                $('#net9').val(point_score - hole_points);
            }
            else if (hole9score != "-") {
                var index9 = $('#index9').val();
                var par9 = parseInt($('#par9').val());

                if (index9 <= HCap) {
                    if (hole9score - 2 > par9 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole9score - 2 == par9 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole9score - 2 == par9) {
                        point_score = point_score + 2;
                    }
                    else if (hole9score - 2 == par9 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole9score - 2 == par9 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole9score - 1 > par9 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole9score - 1 == par9 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole9score - 1 == par9) {
                        point_score = point_score + 2;
                    }
                    else if (hole9score - 1 == par9 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole9score - 1 == par9 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net9').val(point_score - hole_points);
            }

             var hole10score = $('select#score10').val();
            hole_points = point_score;
            if (hole10score === "-") {
                point_score = point_score + 0;
                $('#net10').val(point_score - hole_points);
            }
            else if (hole10score != "-") {
                var index10 = $('#index10').val();
                var par10 = parseInt($('#par10').val());

                if (index10 <= HCap) {
                    if (hole10score - 2 > par10 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole10score - 2 == par10 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole10score - 2 == par10) {
                        point_score = point_score + 2;
                    }
                    else if (hole10score - 2 == par10 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole10score - 2 == par10 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole10score - 1 > par10 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole10score - 1 == par10 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole10score - 1 == par10) {
                        point_score = point_score + 2;
                    }
                    else if (hole10score - 1 == par10 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole10score - 1 == par10 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net10').val(point_score - hole_points);
            }

             var hole11score = $('select#score11').val();
            hole_points = point_score;
            if (hole11score === "-") {
                point_score = point_score + 0;
                $('#net11').val(point_score - hole_points);
            }
            else if (hole11score != "-") {
                var index11 = $('#index11').val();
                var par11 = parseInt($('#par11').val());

                if (index11 <= HCap) {
                    if (hole11score - 2 > par11 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole11score - 2 == par11 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole11score - 2 == par11) {
                        point_score = point_score + 2;
                    }
                    else if (hole11score - 2 == par11 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole11score - 2 == par11 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole11score - 1 > par11 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole11score - 1 == par11 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole11score - 1 == par11) {
                        point_score = point_score + 2;
                    }
                    else if (hole11score - 1 == par11 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole11score - 1 == par11 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net11').val(point_score - hole_points);
            }

             var hole12score = $('select#score12').val();
            hole_points = point_score;
            if (hole12score === "-") {
                point_score = point_score + 0;
                $('#net12').val(point_score - hole_points);
            }
            else if (hole12score != "-") {
                var index12 = $('#index12').val();
                var par12 = parseInt($('#par12').val());

                if (index12 <= HCap) {
                    if (hole12score - 2 > par12 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole12score - 2 == par12 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole12score - 2 == par12) {
                        point_score = point_score + 2;
                    }
                    else if (hole12score - 2 == par12 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole12score - 2 == par12 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole12score - 1 > par12 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole12score - 1 == par12 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole12score - 1 == par12) {
                        point_score = point_score + 2;
                    }
                    else if (hole12score - 1 == par12 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole12score - 1 == par12 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net12').val(point_score - hole_points);
            }

             var hole13score = $('select#score13').val();
            hole_points = point_score;
            if (hole13score === "-") {
                point_score = point_score + 0;
                $('#net13').val(point_score - hole_points);
            }
            else if (hole13score != "-") {
                var index13 = $('#index13').val();
                var par13 = parseInt($('#par13').val());

                if (index13 <= HCap) {
                    if (hole13score - 2 > par13 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole13score - 2 == par13 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole13score - 2 == par13) {
                        point_score = point_score + 2;
                    }
                    else if (hole13score - 2 == par13 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole13score - 2 == par13 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole13score - 1 > par13 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole13score - 1 == par13 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole13score - 1 == par13) {
                        point_score = point_score + 2;
                    }
                    else if (hole13score - 1 == par13 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole13score - 1 == par13 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net13').val(point_score - hole_points);
            }

             var hole14score = $('select#score14').val();
            hole_points = point_score;
            if (hole14score === "-") {
                point_score = point_score + 0;
                $('#net14').val(point_score - hole_points);
            }
            else if (hole14score != "-") {
                var index14 = $('#index14').val();
                var par14 = parseInt($('#par14').val());

                if (index14 <= HCap) {
                    if (hole14score - 2 > par14 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole14score - 2 == par14 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole14score - 2 == par14) {
                        point_score = point_score + 2;
                    }
                    else if (hole14score - 2 == par14 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole14score - 2 == par14 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole14score - 1 > par14 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole14score - 1 == par14 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole14score - 1 == par14) {
                        point_score = point_score + 2;
                    }
                    else if (hole14score - 1 == par14 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole14score - 1 == par14 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net14').val(point_score - hole_points);
            }

             var hole15score = $('select#score15').val();
            hole_points = point_score;
            if (hole15score === "-") {
                point_score = point_score + 0;
                $('#net15').val(point_score - hole_points);
            }
            else if (hole15score != "-") {
                var index15 = $('#index15').val();
                var par15 = parseInt($('#par15').val());

                if (index15 <= HCap) {
                    if (hole15score - 2 > par15 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole15score - 2 == par15 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole15score - 2 == par15) {
                        point_score = point_score + 2;
                    }
                    else if (hole15score - 2 == par15 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole15score - 2 == par15 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole15score - 1 > par15 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole15score - 1 == par15 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole15score - 1 == par15) {
                        point_score = point_score + 2;
                    }
                    else if (hole15score - 1 == par15 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole15score - 1 == par15 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net15').val(point_score - hole_points);
            }

             var hole16score = $('select#score16').val();
            hole_points = point_score;
            if (hole16score === "-") {
                point_score = point_score + 0;
                $('#net16').val(point_score - hole_points);
            }
            else if (hole16score != "-") {
                var index16 = $('#index16').val();
                var par16 = parseInt($('#par16').val());

                if (index16 <= HCap) {
                    if (hole16score - 2 > par16 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole16score - 2 == par16 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole16score - 2 == par16) {
                        point_score = point_score + 2;
                    }
                    else if (hole16score - 2 == par16 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole16score - 2 == par16 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole16score - 1 > par16 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole16score - 1 == par16 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole16score - 1 == par16) {
                        point_score = point_score + 2;
                    }
                    else if (hole16score - 1 == par16 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole16score - 1 == par16 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net16').val(point_score - hole_points);
            }

             var hole17score = $('select#score17').val();
            hole_points = point_score;
            if (hole17score === "-") {
                point_score = point_score + 0;
                $('#net17').val(point_score - hole_points);
            }
            else if (hole17score != "-") {
                var index17 = $('#index17').val();
                var par17 = parseInt($('#par17').val());

                if (index17 <= HCap) {
                    if (hole17score - 2 > par17 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole17score - 2 == par17 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole17score - 2 == par17) {
                        point_score = point_score + 2;
                    }
                    else if (hole17score - 2 == par17 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole17score - 2 == par17 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole17score - 1 > par17 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole17score - 1 == par17 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole17score - 1 == par17) {
                        point_score = point_score + 2;
                    }
                    else if (hole17score - 1 == par17 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole17score - 1 == par17 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net17').val(point_score - hole_points);
            }

             var hole18score = $('select#score18').val();
            hole_points = point_score;
            if (hole18score === "-") {
                point_score = point_score + 0;
                $('#net18').val(point_score - hole_points);
            }
            else if (hole18score != "-") {
                var index18 = $('#index18').val();
                var par18 = parseInt($('#par18').val());

                if (index18 <= HCap) {
                    if (hole18score - 2 > par18 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole18score - 2 == par18 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole18score - 2 == par18) {
                        point_score = point_score + 2;
                    }
                    else if (hole18score - 2 == par18 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole18score - 2 == par18 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                else {
                    if (hole18score - 1 > par18 + 1) {
                        point_score = point_score + 0;
                    }
                    else if (hole18score - 1 == par18 + 1) {
                        point_score = point_score + 1;
                    }
                    else if (hole18score - 1 == par18) {
                        point_score = point_score + 2;
                    }
                    else if (hole18score - 1 == par18 - 1) {
                        point_score = point_score + 3;
                    }
                    else if (hole18score - 1 == par18 - 2) {
                        point_score = point_score + 4;
                    }
                    else {
                        point_score = point_score + 5;
                    }

                }
                $('#net18').val(point_score - hole_points);
            }
        }

        $('#endscore').val(point_score);
    });
});


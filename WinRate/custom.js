$(function () {

    var paper = Raphael(document.getElementById('draw'), 640, 480);
    var k = parseInt(jArray[0].Wins);
    var c = paper.piechart(320, 240, 100, [parseInt(jArray[0].Wins), parseInt(jArray[1].Wins)],
    {
        legend: [jArray[0].M_ID, jArray[1].M_ID, ]
    });
    for (var i = 0; i < 2; i++) {
        alert(jArray[i].Wins);
    }

});
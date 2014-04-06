$(function () {

    var paper = Raphael(document.getElementById('draw'), 640, 480);
    var k = parseInt(jArray[0].Wins);
    var c = paper.piechart(360, 220, 130, [parseInt(jArray[0].Wins), parseInt(jArray[1].Wins)],
    {
        legend: [jArray[0].Name, jArray[1].Name, ]
    });
   

});
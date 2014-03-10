$(function () {

    var xlen = 375;
    var ylen = 180;
    var gutter =20;
    var paper = Raphael($('#draw').get(0), 400, 200);
    //var k = parseInt(jArray[0].HCap_Score);
    var c = paper.linechart(20, 0, xlen, ylen, [0, 1, 2, 3, 4], [parseFloat(jArray[0].HCap_Score), parseFloat(jArray[1].HCap_Score), parseFloat(jArray[2].HCap_Score), 23.5, 22.3], { smooth: false, axisxstep: 1, axis: "0 0 1 1", colors: ['#F00'], symbol: 'circle' });


    for (var i = 0; i < 2; i++) {
        alert(jArray[i].HCap_Score);
    }

});
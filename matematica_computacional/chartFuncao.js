class Funcao {

    constructor(x, y, z) {
        this.x = x;
        this.y = y;
        this.z = z;
    }

    funcao_primeiro_grau() {
        return this.y = (this.z * this.x) + 1
    }
}



google.charts.load('current', { 'packages': ['annotationchart'] });
google.charts.setOnLoadCallback(drawChart);

function chart(x,y,z){

    var a = calc(x,y,z)

    for (let i = 0; i < a.length; i++) {
        var data = google.visualization.arrayToDataTable([
            ['x', 'y'], a[0], a[1], a[2], a[i]
        ]);
    }


    var options = {
        title: 'Grafico de Função Crescente',
        hAxis: { title: 'x' },
        vAxis: { title: 'y' },
        legend: 'none',
        trendlines: { 0: {} }    // Draw a trendline for data series 0.
    };


    var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

function drawChart() {

    chart(-2, 2, 20);

    let btn = document.getElementById('btn')
    btn.addEventListener('click', () => {

        let value = document.getElementById('value').value
        chart(-2, 2, value);

    })

}

function calc(x, y, z) {
    
    var arr = new Array();

    while (x < y) {
        let a = new Funcao(x, y, z).funcao_primeiro_grau();
        arr.push([x, a]);
        x++
    }

    return arr;

}
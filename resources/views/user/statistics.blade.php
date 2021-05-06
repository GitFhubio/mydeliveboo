@extends('layouts.baseuser')
@section('title', 'Statistiche')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.0/chart.min.js"></script>


<script>
const orders ={!! $orders !!};
function randomInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}

let result = {
    "01": {
        totalOrders: randomInteger(5, 25),
        money: randomInteger(20, 150),
        monthName: "Gennaio",
    },

    "02": {
        totalOrders: randomInteger(5, 25),
        money: randomInteger(20, 150),
        monthName: "Febbraio",
    },

    "03": {
        totalOrders: randomInteger(5, 25),
        money: randomInteger(20, 150),
        monthName: "Marzo",
    },

    "04": {
        totalOrders: randomInteger(5, 25),
        money: randomInteger(20, 150),
        monthName: "Aprile",
    },
    "05":{
        totalOrders:0,
        money:0,
        monthName: "Maggio"
    }

}

    orders.forEach(order => {
        result[order.created_at.slice(5,7)].totalOrders += 1;
        result[order.created_at.slice(5,7)].money += order.amount;
    });

    const orderValues = []; // restaurant's order, from the api
    const moneyValues = []; // restaurant's money gained, from the api
    const monthValues = []; // months

    for (let key in result) {
        orderValues.push(result[key].totalOrders);
        moneyValues.push(result[key].money);
        monthValues.push(result[key].monthName);
    }

</script>

<section class="section stats wrapper">
    <div class="section-title-container">
        <h1 class="section-title">Statistiche</h1>
    </div>

    <div class="stats-year">Anno 2021</div>

    <div class="chart-container">
        <canvas id="myChart" width="100" height="75"></canvas>
    </div>

</section>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar', // set the kind of chart
    data: {
        labels: [...monthValues],
        datasets: [
          // first graph
          {
            label: 'Numero ordini', // legend
            data: [...orderValues], // the y value adapt automatically to contain all the values in the array
            fill: false, // fil color under the graph
            backgroundColor: '#71bed1', // color of the graph under the line
            borderColor: '#71bed1', // graph line color
            borderWidth: 1.5, // width of the graph line
            tension: 0.1, // roundness of the graph line
        },
          // second graph
        {
            label: 'Totale incasso in euro', // legend
            data: [...moneyValues],
            fill: false,
            backgroundColor: '#ff6e54', // color of the graph under the line
            borderColor: '#ff6e54',
            borderWidth: 1.5,
            tension: 0.1,
        }

                  ]
    },
    options: {
        scales: {
            x: {
                beginAtZero: true,
                ticks: {
                    maxRotation: 90,
                    minRotation: 45
                },
            }

        }
    }
});
</script>

@endsection

const district_toggle = document.querySelector('#district_toggle')

let kandidaat = []
let aantal_stemmen = []


if (document.getElementById('barChart') && document.getElementById('pieChart')) {
    // Bar Chart 
    let drawBarChart = (x, y) => {

        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: x,
                datasets: [{
                    label: '# of Votes',
                    data: y,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
    // Bar Chart 
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    // Toggle chart Data by district
    district_toggle.addEventListener('change', async () => {
        // console.log(district_toggle.value)
        let data = await fetch(`${window.location.origin}/api/statistieken/kandidaten/district/${district_toggle.value}}`).then(res => res.json())
        kandidaat = data.map(x => x.kandidaat_naam)
        aantal_stemmen = data.map(x => x.aantal_stemmen)

        drawBarChart(kandidaat, aantal_stemmen)

    })
}


// Map 

mapboxgl.accessToken = 'pk.eyJ1IjoibjNyZGNsYXNoIiwiYSI6ImNrOTY2dTMwaTBmMDgzZ3E5M3Rnc2l1dWsifQ.ZRceag02-VH3ggc59oh4zw';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v10'
});
map.on('load', function () {
    map.fitBounds([
        // [3.9193, 56.0278]
        [32.958984, -5.353521],
        [43.50585, 5.615985]
    ])
});

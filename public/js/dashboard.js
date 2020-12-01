const district_toggle = document.querySelector('#district_toggle')

let kandidaat = []
let aantal_stemmen = []

const drawBarChart = (labels, values) => {

    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: values,
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

const drawPieChart = (labels, values) => {
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: values,
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
const toggleCharts =
    async (id) => {
        // console.log(district_toggle.value)
        console.log(id)
        await fetch(`${window.location.origin}/api/statistieken/kandidaten/district/${id}`).then(res => res.json()).then(
            (data) => {
                kandidaat = data.map(x => x.kandidaat_naam)
                aantal_stemmen = data.map(x => x.aantal_stemmen)
                console.log(JSON.stringify([kandidaat, aantal_stemmen]))
                drawBarChart(kandidaat, aantal_stemmen)
                drawPieChart(kandidaat, aantal_stemmen)
            }
        )
        await fetch(`${window.location.origin}/api/statistieken/partijen`).then(res => res.json()).then(
            (data) => {
                console.log(data)
                kandidaat = data.map(x => x.partij_naam)
                aantal_stemmen = data.map(x => x.aantal_stemmen)
                console.log(JSON.stringify([kandidaat, aantal_stemmen]))
                drawPieChart(kandidaat, aantal_stemmen)
            }
        )

    }
district_toggle.addEventListener('change', () => toggleCharts(district_toggle.value))

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.select-wrapper li')[1].click()
    console.log()
})

const selectKandidaat = (element) => {
    console.log(element)
    document.querySelector('.collection li.selected') ? document.querySelector('.collection li.selected').classList.remove('selected') :
        null
    element.classList.add('selected')

}
document.querySelectorAll('.collection li').forEach(li => li.addEventListener('click', () => selectKandidaat(li)))

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

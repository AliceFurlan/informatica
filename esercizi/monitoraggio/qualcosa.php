
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto di Monitoraggio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
</head>

<body>
    <div class="ct-chart" id="myChart"></div>
    <? require './raccolta_dati.php'; ?>    
    <script>
        // Esempio di dati PHP
        var phpData = file_get_contents('raccolta_dati.php');

        // Estrai dati per il grafico
        var dates = phpData.map(function(item) {
            return new Date(item.date).getTime();
        });

        var temperatures = phpData.map(function(item) {
            return item.temp;
        });

        var humidities = phpData.map(function(item) {
            return item.hum;
        });

        console.log("Date", dates)

        // Crea dati per Chartist
        var chartData = {
            labels: dates,
            series: [
                temperatures,
                humidities
            ]
        };

        // Configura le opzioni del grafico
        var chartOptions = {
            axisX: {
                type: Chartist.FixedScaleAxis,
                divisor: 5,
                labelInterpolationFnc: function(value) {
                    return new Date(value).toLocaleDateString();
                }
            },
            axisY: {
                type: Chartist.AutoScaleAxis,
                onlyInteger: true
            }
        };
        var options = {
            axisX: {
                // type: Chartist.FixedScaleAxis,
                // divisor: 5,
                labelInterpolationFnc: function(value, index) {
                    // Mostra un'etichetta ogni 5 elementi
                    return index % (Math.floor(dates.length / 5)) === 0 ? new Date(value).toString() : null;
                }
            },
            axisY: {
                type: Chartist.AutoScaleAxis,
                // onlyInteger: true
            }
        };

        // Crea il grafico
        new Chartist.Line('#myChart', chartData, options);
    </script>
</body>

</html>
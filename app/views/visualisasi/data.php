<?php
$koneksi    = mysqli_connect("localhost", "root", "", "dinsos");
$penjualan  = mysqli_query($koneksi, "SELECT PMKS FROM visual order by id asc");
$merk       = mysqli_query($koneksi, "SELECT kecamatan FROM visual order by id asc");
$PSKS       = mysqli_query($koneksi, "SELECT PSKS FROM visual order by id asc");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grafik Batang</title>
    <script src="<?=BASEURL;?>/js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 80%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="barchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($merk)) { echo '"' . $p['kecamatan'] . '",';}?>],
            datasets: [
            
            {
              label: "PMKS",
              data: [<?php while ($p = mysqli_fetch_array($penjualan)) { echo '"' . $p['PMKS'] . '",';}?>],
              backgroundColor: [
                'cyan','cyan','cyan','cyan','cyan','cyan','cyan','cyan','cyan','cyan',
              ]
            },
            {
              label: "PSKS",
              data: [<?php while ($p = mysqli_fetch_array($PSKS)) { echo '"' . $p['PSKS'] . '",';}?>],
              backgroundColor: [
                'green ','green ','green ','green ','green ','green ','green ','green ','green ','green ',
                
              ]
            }

            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
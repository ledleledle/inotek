<?php 
include 'connect.php';
@$show = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid'");
$row = mysqli_fetch_array($show);
$ben = $row['nilai'];
$sal = 100 - $ben;
 ?>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Salah", "Benar"],
    datasets: [{
      data: [<?php echo $sal.','.$ben; ?>],
      backgroundColor: ['#dc3545', '#1cc88a'],
      hoverBackgroundColor: ['#d9534f', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
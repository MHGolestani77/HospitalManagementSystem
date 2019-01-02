<?php include '../functions.php'; ?>
<html><head>
	<title>Bar Chart</title>
	<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="../assets/chart/dist/Chart.bundle.js"></script>
	<link rel="stylesheet" href="http://localhost/HospitalManagementSystem/assets/css/styles.css">
	<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
	</style>
	<script src="utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		background: none;
	}
	li {
		margin: 5px;
		padding: 5px;
		line-height: 35px;
		background: #fff;
		border-radius: 5px;
	}
	small {
		padding-right: 10px;
		width: 100px;
		display: inline-block;
	}
	</style>
</head>

<body style="background: none;">

	<?php 
		$sqlGetDate = "select DISTINCT loginDate from ".illsTable;
		$resultGetDate = mysqli_query(connection(), $sqlGetDate);

		$sql = "select * from ".illsTable;
		$result = mysqli_query(connection(), $sql);

		$i = 0;
		while ($feildGetDate = mysqli_fetch_array($resultGetDate)) {
			$labels[$i] = $feildGetDate['loginDate'];
			$i++;
		}
		$i = 0;
		foreach ($labels as $key) {
			$data[$key] = 0;
			$i++;
		}
		while ($feild = mysqli_fetch_array($result)) {
			$data[$feild['loginDate']]++;
		}
	?>

	<canvas id="myChart"  width="300" height="300" class="chartjs-render-monitor" style="display: block; width: 300px; height: 300px;"></canvas>

	<diw class="row">
		<ul>
			<?php foreach ($labels as $key) { ?>
			<li>
				<small><?php echo $key; ?>: </small>
				<?php echo $data[$key]; ?> بیمار
			</li>
			<?php } ?>
		</ul>
	</diw>

	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: [<?php foreach ($labels as $key) { echo "'".$key."'"; ?>,<?php } ?>],
	        datasets: [{
	            label: '# of Votes',
	            data: [<?php foreach ($data as $key) { echo $key; ?>,<?php } ?>],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(54, 162, 235, 0.2)',
	                'rgba(255, 206, 86, 0.2)',
	                'rgba(75, 192, 192, 0.2)',
	                'rgba(153, 102, 255, 0.2)',
	                'rgba(255, 159, 64, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255,99,132,1)',
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
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});

	// var myChart = new Chart(ctx, {
	//     type: 'bar',
	//     data: {
	//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
	//         datasets: [{
	//             label: '# of Votes',
	//             data: [12, 19, 3, 5, 2, 3],
	//             backgroundColor: 'rgba(255, 99, 132, 0.2)',
	//             borderColor: 'rgba(255,99,132,1)',
	//             borderWidth: 1
	//         }, {
	//             label: '# of Votes2',
	//             data: [15, 22, 6, 8, 5, 6],
	//             backgroundColor: 'rgba(255, 159, 64, 0.2)',
	//             borderColor: 'rgba(255, 159, 64, 1)',
	//             borderWidth: 1
	//         }]
	//     },
	//     options: {
	//         scales: {
	//             yAxes: [{
	//                 ticks: {
	//                     beginAtZero:true
	//                 }
	//             }]
	//         }
	//     }
	// });
	</script>

</body>
</html>
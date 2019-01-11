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
		width: 35px;
		display: inline-block;
	}
	</style>
</head>

<body style="background: none;">

	<?php 
		$sql = "select * from ".blackBox;
		$result = mysqli_query(connection(), $sql);

		$sqlGetLabels = "select * from ".userLevelTable;
		$resultGetLabels = mysqli_query(connection(), $sqlGetLabels);
		while ($feildGetLabels = mysqli_fetch_array($resultGetLabels)) {
			$data[$feildGetLabels['id']] = 0;
		}
		while ($feild = mysqli_fetch_array($result)) {
			$data[getUserData(getNationalCode($feild['userId']), "userLevelId")]++;
		}
		$sum = $data[1] + $data[2] + $data[3] + $data[4];
		while ($feildGetLabels = mysqli_fetch_array($resultGetLabels)) {
			$persent[$feildGetLabels['id']] = 0;
			
		}
		$persent[1] = round($data[1]/$sum*100, 2);
		$persent[2] = round($data[2]/$sum*100, 2);
		$persent[3] = round($data[3]/$sum*100, 2);
		$persent[4] = round($data[4]/$sum*100, 2);
	?>

	<canvas id="myChart"  width="300" height="300" class="chartjs-render-monitor" style="display: block; width: 300px; height: 300px;"></canvas>

	<diw class="row">
		<ul>
			<li>
				<small>مدیر: </small>
				<?php echo $data[1]." (".$persent[1]."%)"; ?>
			</li>
			<li>
				<small>منشی: </small>
				<?php echo $data[2]." (".$persent[2]."%)"; ?>
			</li>
			<li>
				<small>پزشک: </small>
				<?php echo $data[3]." (".$persent[3]."%)"; ?>
			</li>
			<li>
				<small>بیمار: </small>
				<?php echo $data[4]." (".$persent[4]."%)"; ?>
			</li>
		</ul>
	</diw>

	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["مدیر", "منشی", "پزشک", "بیمار"],
	        datasets: [{
	            label: '# of Votes',
	            data: [<?php echo $persent[1]; ?>,<?php echo $persent[2]; ?>,<?php echo $persent[3]; ?>,<?php echo $persent[4]; ?>],
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
<?php
	//connection
	include('../../../connection/connection.php');

	$sql = "SELECT gender, count(*) as number FROM users GROUP BY gender";
	$query = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- this is where we show our chart -->
<div id="piechart" style="width: 100%; height: 300px;"></div>
	
<!-- Load our Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
	google.charts.load('current', {'packages':['corechart']});  
	google.charts.setOnLoadCallback(drawChart);  
	function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
              	['Gender', 'Number'],  
              	<?php  
	              	while($row = $query->fetch_assoc()){  
	               		echo "['".$row["gender"]."', ".$row["number"]."],";  
	              	}  
              	?>  
         	]);  
    var options = {  
          		title: 'Percentage of Male and Female Users',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-plus"></span>ADD QUIZ</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>TID</th>
						<th>RESOURCE</th>
						<th>TOPIC NAME</th>
						<th>QUIZ CREATED</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT *, resource_topic.id as chid, topic_assesment.id as q FROM resource_topic LEFT JOIN topic_assesment ON resource_topic.id = topic_assesment.tid";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
                                 $rid = $row['rid']; 
								 $result=mysqli_query($conn, "SELECT * FROM `resources` WHERE rid='$rid'");
                                 $crow=mysqli_fetch_array($result);


								echo 
								"<tr>
							    	<td>".$row['chid']."</td>
								    <td>".$crow['resource_description']."</td>
									<td>".$row['topic_name']."</td>
									<td>"; 
									
									if(!empty($row['tid'])) { echo 'QUIZ CREATED'; } else { echo 'NO QUIZ';  } 
						
								echo  "
								      </td>
								       <td>";

								    if(!empty($row['tid'])) {
								       echo "
										<a href='assesment_details.php?id=".$row['q']."' class='btn btn-success btn-sm' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-eye-open'></span></a>
										<a href='#delete_".$row['tid']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-trash'></span></a>";
								   } else {   } 

									echo "</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>
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
				<a href="index.php" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
				<a href="#addquestion" data-toggle="modal" class="btn btn-primary" style="background-color:#1ddd9f; border-color:#1ddd9f;"><span class="glyphicon glyphicon-plus"></span> ADD QUESTION</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>QUESTION</th>
						<th>ANSWER</th>
						<th>TOTAL SELECTION</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
						    $q = $_GET['id']; 
							include_once('../../../connection/connection.php');
							$sql = "SELECT *,topic_assesment_q.id as qq, topic_assesment_q.answer as count, topic_assesment_answers.answer as inword FROM topic_assesment_q LEFT JOIN topic_assesment_answers ON topic_assesment_q.id = topic_assesment_answers.question_id WHERE topic_assesment_q.qid = '$q' GROUP BY topic_assesment_q.id";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
                                 $rid = $row['qq']; 
                                 $c = $row['count'];
								 $result=mysqli_query($conn, "SELECT *,COUNT(id) as total FROM `topic_assesment_answers` WHERE question_id='$rid'");
                                 $crow=mysqli_fetch_array($result);

                                 $inword=mysqli_query($conn, "SELECT * FROM `topic_assesment_answers` WHERE question_id='$rid' AND id = '$c'");
                                 $irow=mysqli_fetch_array($inword);


								echo 
								"<tr>
							    	<td>".$row['qq']."</td>
								    <td>".$row['question']."</td>
									<td>";
									if ($row['count'] == 0){ 

									 if($crow['total'] > 0){
									 echo 'ADD ANSWER'; 
									 echo 
									  "
									  <a href='#addsolution_".$row['qq']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-question-sign'></span></a>
									  "; 
									 }else{
									 echo 'ADD QUESTION FIRST'; 	
									 }


								    }else{ echo $irow['answer']; }
									echo
									"</td>
									<td>".$crow['total']."</td>
									<td>";
									if($crow['total'] > 0){
									 
									 	 echo 
									  "
									  <a href='#addanswer_".$row['qq']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='	glyphicon glyphicon-plus'></span></a>
									   <a href='#editquestion_".$row['qq']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-edit'></span></a>
									  <a href='assesment_answer.php?id=".$row['qq']."&qid=".$q."' class='btn btn-success btn-sm' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-eye-open'></span></a>

									  "; 

									  if ($row['count'] == 0){ 


									  }
									  else{

									  	 echo 
									  "
									  <a href='#addsolution_".$row['qq']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='glyphicon glyphicon-question-sign'></span></a>
									  "; 

									  }


									}else{

										 echo 
									  "
									  <a href='#addanswer_".$row['qq']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#1ddd9f; border-color:#1ddd9f;'><span class='	glyphicon glyphicon-plus'></span></a>
									  "; 
									}
									echo "</td>
								</tr>";
								include('edit_delete_question.php');
							}
							

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_question.php') ?>

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
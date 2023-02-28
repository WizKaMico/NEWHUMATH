<?php 
  include_once('../../../connection/connection.php');
$id = $_GET['id'];
$uid = $_GET['uid'];
$rresult=mysqli_query($conn, "SELECT * FROM `resource_topic` WHERE id = '$id'");
$rrow=mysqli_fetch_array($rresult);

$check_answers=mysqli_query($conn, "SELECT * FROM `topic_assesment_into` WHERE uid = '$uid' ORDER BY id desc");
$arow=mysqli_fetch_array($check_answers);

/*COUNT COMPARISON*/
  
$count_question=mysqli_query($conn, "SELECT COUNT(id) as total FROM `topic_assesment_q` WHERE qid = '$id'");
$countq=mysqli_fetch_array($count_question);

$count_answer=mysqli_query($conn, "SELECT COUNT(id) as total FROM `topic_assesment_into` WHERE under = '$id' and uid = '$uid'");
$count=mysqli_fetch_array($count_answer);

if($countq['total'] == $count['total']){

 header('Location: summary.php');
}

if(isset($_POST['submit'])){
   $qid = $_POST['qid']; 
    $id = $_POST['id']; 
    $ansid = $_POST['ansid']; 
    $under = $_GET['id'];

    $compare=mysqli_query($conn, "SELECT * FROM `topic_assesment_q` WHERE qid = '$qid' AND id = '$id'");
    $compare_answer=mysqli_fetch_array($compare);

    if($compare_answer['answer'] == $ansid)
    {
      $status = 'CORRECT'; 
      mysqli_query($conn,"INSERT INTO topic_assesment_into (under, qid, uid, ansid, status) VALUES ('$under',  '$qid', '$uid', '$ansid', '$status')");  
    }
    else
    {
      $status = 'FALSE'; 
        mysqli_query($conn,"INSERT INTO topic_assesment_into (under, qid, uid, ansid, status) VALUES ('$under',  '$qid', '$uid', '$ansid', '$status')");   
    }
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<?php 
                           
                            if(empty($arow['id'])){ 
                            $sql = "SELECT * FROM topic_assesment_q WHERE qid = '$id' ORDER BY id ASC LIMIT 1";
                            $query = $conn->query($sql);


                            }else{

                            if($countq['total'] == $count['total']){
                              

                              

                            }else{
                       /*     echo $arow['id'];*/
       
                             $check = $arow['id'] + 1;
                            $sql = "SELECT * FROM topic_assesment_q WHERE qid = '$id' AND id = '$check'";
                            $query = $conn->query($sql);

                            }

                            }
                             
                              $i = 0; 
                              while($row = $query->fetch_assoc()){
                              $id = $row['id'];
                              $i++;
                            

?>
<div class="quize" style="margin-top:-1px; margin-bottom:-50px;">
  <form action="#" method="POST">
  <input type="hidden" name="qid" value="<?php echo $id; ?>" />
  <input type="hidden" name="id" value="<?php echo $uid; ?>" />
  <div class="question-bar">
    <h2 class="qestion"><?php echo strtoupper($row['id']); ?>) <?php echo strtoupper($row['question']); ?></h2>
    <ul>
      <?php 
            
                            $answers = "SELECT * FROM topic_assesment_answers WHERE question_id = '$id'";
                            $query1 = $conn->query($answers);
                            while($arow = $query1->fetch_assoc()){

      ?>
      <li>
        <input type="radio" name="ansid" value="<?php echo $arow['id']; ?>" id="<?php echo $arow['id']; ?>" class="ansList">
        <label for="<?php echo $arow['id']; ?>" class="ansa"><?php echo $arow['answer']; ?></label>
      </li>
    <?php } ?>
    </ul>
    <div class="footer-button">
      <button id="submit" name="submit" class="submitBtn" style="background-color:#1ddd9f; width:100%;">Submit</button>
    </div>
  </div>
</form>
  <div id="showscore" class="scoreArea"></div>
</div>
 <?php }  ?>
<!-- partial -->
 

</body>
</html>

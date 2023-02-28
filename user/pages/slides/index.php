


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="CSSgal">

  <!-- Don't wrap targets in parent -->
   <?php
                            $id = $_GET['id'];
                            include_once('../../../connection/connection.php');
                            $sql = "SELECT * FROM topic_image WHERE tid = '$id'";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

  ?>
  <s id="s<?php echo $row['id']; ?>"></s> 
 
<?php } ?>

  <div class="slider">
      <?php
                            $id = $_GET['id'];
                            include_once('../../../connection/connection.php');
                            $sql = "SELECT * FROM topic_image WHERE tid = '$id'";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

  ?>
    <div style="background:#5b8;">
       <img src="../../../ADMIN/pages/topic/<?php echo $row['photo']; ?>" style="margin-top:10px; width:100%; height:450px;">
    </div>
  <?php } ?>
  </div>
  
  <div class="prevNext">
    <div><a href="#s4"></a><a href="#s2"></a></div>
    <div><a href="#s1"></a><a href="#s3"></a></div>
    <div><a href="#s2"></a><a href="#s4"></a></div>
    <div><a href="#s3"></a><a href="#s1"></a></div>
  </div>

  <div class="bullets">
       <?php
                            $id = $_GET['id'];
                            include_once('../../../connection/connection.php');
                            $sql = "SELECT * FROM topic_image WHERE tid = '$id'";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

  ?>
    <a href="#s<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a>
 <?php } ?>
  </div>

</div>
<!-- partial -->
  
</body>
</html>

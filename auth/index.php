<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title><link rel="stylesheet" href="style/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <section>
    <div class="container">
        <?php if(!empty($_GET['view'])) { ?>
        <?php if($_GET['view'] == 'HOME') {?>
        <?php include('pages/home.php'); ?>
        <?php } else if($_GET['view'] == 'CONFIRMATION') { ?>
        <?php include('pages/confirmation.php'); ?>
        <?php } else if($_GET['view'] == 'SECURITY') { ?>
        <?php include('pages/security.php'); ?>
        <?php } else if($_GET['view'] == 'FORGOT') { ?>
        <?php include('pages/forgot.php'); ?>
          <?php } else if($_GET['view'] == 'CHANGEPASS') { ?>
        <?php include('pages/change.php'); ?>
        <?php } else { ?>

        <?php } ?>
        <?php } else { ?>
        <?php include('pages/home.php'); ?>
        <?php } ?>
    </div>
  </section>
</body>
<!-- partial -->
  <script  src="style/script.js"></script>

</body>
</html>

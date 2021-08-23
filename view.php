<!doctype html>
<html>
    
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <title>Medigene IT</title>
            <style>
                .phpcoding{width:800px; margin:0 auto; background:#ddd; padding:20px; min-height:460px;}
                .headphp, .footphp{background:#444; color:#fff; text-align:center;}
                .maincontent{min-height:450px}
                .date{text-align:center}
            </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headphp">
                <h1>Medigene IT<h1>
            </section>

<section class="maincontent">
    <a class="btn btn-primary float-right" href="index.php">Student Add</a>
    <h2 class="text-center">Student View</h2>
        <div class="">
            <?php
               $id = $_GET['id'];
               $mysqli = mysqli_connect("localhost", "root", "", "php");
               $sql = "SELECT * FROM student WHERE id='$id'";
               $result = mysqli_query($mysqli,$sql);
               $row = mysqli_fetch_array($result);
               if(isset($_POST['btn'])){
                   $name = $_POST['name'];
                   $father_name = $_POST['father_name'];
                   $mother_name = $_POST['mother_name'];
                   $district = $_POST['district'];
               }?>

            <p>ID: <?php echo $row['id']; ?></p>
            <p>NAME: <?php echo $row['name']; ?></p>
            <p>FATHER_NAME: <?php echo $row['father_name']; ?></p>
            <p>MOTHER_NAME: <?php echo $row['mother_name']; ?></p>
            <p>DISTRICT: <?php echo $row['district']; ?></p>
            <?php

            ?>
        </div>
    
  
</section>

<section class="footphp">
<h1>sarker<h2>
</section>
</div>

</body>
</html>

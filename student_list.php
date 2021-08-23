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
    <h2>Student List<a class="btn btn-primary float-right" href="index.php">Student Add</a><h2>
    <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>name</th>
                    <th>father's name</th>
                    <th>mother's name</th>
                    <th>district</th>
                    <th>Action</th>
                </tr>

            <?php
               $mysqli  = mysqli_connect("localhost", "root", "", "php");
               $sql = "SELECT * FROM student";
               $result = mysqli_query($mysqli, $sql);
               while($row = mysqli_fetch_array($result)){?>

                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['father_name']; ?></td>
                    <td><?php echo $row['mother_name']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="font-size:10px;">Delete</a>
                        <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="font-size:10px;">View</a>
                    </td>
                </tr>
               
               <?php }

            ?>
        </table>
  
</section>

<section class="footphp">
<h1>sarker<h2>
</section>
</div>

</body>
</html>

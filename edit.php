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
    <h2>Databes Form<h2>
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
            $sql2 = "UPDATE student SET name='$name', father_name='$father_name', mother_name='$mother_name', district='$district' WHERE id='$id' ";
            if($result = mysqli_query($mysqli, $sql2)){
                echo "data update successfully";
                header('location:student_list.php');
            }else{
                echo "sorry! data nor update";
            }
        }
            
        ?>
    <h3>Student Update<a class="btn btn-primary float-right" href="student_list.php">Student List</a></h3>    

    <form action="" method="POST">
        <div class="form-row">
            <div class="col-md-">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['name'] ?>"class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-">
                <label>Father Name</label>
                <input type="text" name="father_name" value="<?php echo $row['father_name'] ?>"class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label>Mother Name</label>
                <input type="text" name="mother_name" value="<?php echo $row['mother_name'] ?>"class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label>District</label>
                <select name="district" class="form-control">
                    <option value="">please select district</option>
                    <option value="dhaka" <?php if($row['district']=="dhaka"){echo "selected";} ?> >Dhaka</option>
                    <option value="khulna" <?php if($row['district']=="khulna"){echo "selected";} ?> >Khulna</option>
                    <option value="joypurhat" <?php if($row['district']=="joypurhat"){echo "selected";} ?> >Joypurhat</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary" name="btn">Updata</button>
        </div>

    </form>    
</section>

<section class="footphp">
<h1>sarker<h2>
</section>
</div>

</body>
</html>

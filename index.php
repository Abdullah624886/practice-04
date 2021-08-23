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
        if(isset($_POST['btn'])){
            $mysqli  = mysqli_connect("localhost", "root", "", "php");
            $name = $_POST['name'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];
            $district = $_POST['district'];
            $sql = "INSERT INTO student(name, father_name, mother_name, district)VALUES('$name', '$father_name', '$mother_name', '$district')";
            if($result = mysqli_query($mysqli, $sql)){
                echo "data seved successfully";
                header('location:student_list.php');
            }else{
                echo "sorry! data nor seved";
            }
        }
            
        ?>
    <h3>Student Add<a class="btn btn-primary float-right" href="student_list.php">Student List</a></h3>    

    <form action="" method="POST">
        <div class="form-row">
            <div class="col-md-">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-">
                <label>Father Name</label>
                <input type="text" name="father_name" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label>Mother Name</label>
                <input type="text" name="mother_name" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label>District</label>
                <select name="district" class="form-control">
                    <option value="">please select district</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="khulna">Khulna</option>
                    <option value="joypurhat">Joypurhat</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </div>

    </form>    
<?php
interface Animal{
    public function makeSound();
}
class cat implements Animal{
    public function makeSound(){
        echo "abdulah";
    }
}
$student = new cat();
$student->makeSound();
?>



</section>

<section class="footphp">
<h1>sarker<h2>
</section>
</div>

</body>
</html>

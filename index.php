<?php 
include("header.php"); 
include("navbar.php"); 
include("connection.php");

$res = mysqli_query($conn, "SELECT * FROM courses");
$courses = mysqli_num_rows($res);

?>
    
    <div class="container">
        <h2 class="display-5 my-5 text-center">Welcome to EDUWIDE Academy</h2>
        <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title ">Courses</h5>
                        <p class="card-text  fw-bold  display-3"><?php echo $courses; ?></p>
                        <a href="course.php" class="btn btn-sm btn-success">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title ">Teachers</h5>
                        <p class="card-text  fw-bold  display-3">9</p>
                        <a href="teacher.php" class="btn btn-sm btn-success">View Teachers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title ">Students</h5>
                        <p class="card-text  fw-bold  display-3">698</p>
                        <a href="student.php" class="btn btn-sm btn-success">View Students</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php  include("footer.php"); ?>
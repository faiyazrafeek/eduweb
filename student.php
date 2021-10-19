<?php 
include("header.php"); 
include("navbar.php"); 
require("connection.php");
require("addStudent.php");

if(isset($_GET["edit"])){
    $id = $_GET["edit"];

    $rec = mysqli_query($conn, "SELECT * FROM students WHERE student_id='$id'");

    $record = mysqli_fetch_array($rec);  

    $edit_state = true;
    $name = $record['student_name'];
    $grade = $record['grade'];
    $address = $record['address'];
}

?>
    
    <div class="container">
        <h1 class="display-4 text-center my-4">Student Details</h1>
        <?php if(isset($_SESSION["msg"])):  ?>
            <div class="alert alert-primary" role="alert">
                <?php               
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);              
                ?>
            </div>
            
        <?php endif ?>
       

       <div class="row">
           <div class="col-md-6 mb-md-0 mb-5">
           <form action="addStudent.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Student Name</label>
            <input type="text" class="form-control" name="stname" value="<?php echo $name; ?>" >
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Student Grade</label>
            <input type="text" class="form-control" name="grade" value="<?php echo $grade; ?>">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Student Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
        </div>
        
        <?php if($edit_state == false): ?>
            <button type="submit" class="btn btn-primary" name="save" >Register Student</button>
        
        <?php else: ?>
            <button type="submit" class="btn btn-success" name="update" >Update Student</button>

        <?php endif ?>
        
       
        </form>
           </div>
           <div class="col-md-6">
           <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>#ID</th>
      <th>Student Name</th>
      <th>Student Grade</th>
      <th>Student Address</th>
    </tr>
  </thead>
  <tbody> 


    <?php while($row = mysqli_fetch_assoc($result)){  ?>
        <tr>
            <td><?php echo $row['student_id']  ?></td>
            <td><?php echo $row['student_name']  ?></td>
            <td><?php echo $row['grade']  ?></td>
            <td><?php echo $row['address']  ?></td>
            <td>
            <a href="student.php?del=<?php echo $row['student_id'] ?>" class="btn btn-sm btn-danger">Delete</a>
            <a href="student.php?edit=<?php echo $row['student_id'] ?>" class="btn btn-sm btn-secondary">Update</a>
            </td>
      </tr>

    <?php } ?>

  </tbody>
  </table>
</div>
           </div>
       </div>
    </div>

<?php  include("footer.php"); ?>
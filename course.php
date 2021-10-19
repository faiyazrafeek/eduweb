<?php 
include("header.php"); 
include("navbar.php"); 
require("connection.php");
include("course_set.php"); 

if(isset($_GET['edit'])){
  $id = $_GET['edit'];

  $rec = mysqli_query($conn,"SELECT * FROM courses WHERE course_id='$id'");
  $record = mysqli_fetch_array($rec);
  $edit_state = true;
  $name = $record['course_id'];
  $title = $record['course_title'];
  $duration = $record['course_duration'];

}
?>    
    <div class="container">
        <h1 class="display-4 text-center my-4">Courses</h1>
        <div id="alert">
        <?php if(isset($_SESSION["msg"])):  ?>

          <div class="alert alert-success d-flex align-items-center" role="alert" > 
            <i class="bi bi-check-circle-fill"></i> &nbsp;
            <div class="ml-2">
              <?php               
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);              
                ?>
            </div>
          </div>
          <?php endif  ?>
        </div>

       <div class="row">
           <div class="col-md-6 mb-md-0 mb-5">
           <form action="course_set.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">Course ID</label>
            <input type="text" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" class="form-control" value="<?php echo $title; ?>" name="title">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Course Duration</label>
            <input type="text" class="form-control" value="<?php echo $duration; ?>" name="duration">
        </div>

        <?php if($edit_state == false): ?>
        <button type="submit" class="btn btn-primary" name="save" >Add Course</button>
        <?php else: ?>
        <button type="submit" class="btn btn-success" name="update" >Update Course</button>
        <?php endif ?>


       
        </form>
           </div>
           <div class="col-md-6">
           <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>#ID</th>
      <th>Course Title</th>
      <th>Course Duration</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){  ?>
      <tr>
        <td><?php echo $row['course_id']; ?></td>
        <td><?php echo $row['course_title']; ?></td>
        <td><?php echo $row['course_duration']; ?> Months</td>
        <td>
          <a href="course.php?del=<?php echo $row['course_id']; ?>" class="btn btn-sm btn-danger">Delete</a>
          <a href="course.php?edit=<?php echo $row['course_id']; ?>" class="btn btn-sm btn-secondary">Update</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>
           </div>
       </div>
    </div>

    <script>
      $(document).ready(function(){
        <?php if($edit_state == false): ?>
          $("#id").attr("readonly", false)
        <?php else: ?>
          $("#id").attr("readonly", true)
        <?php endif ?>

        setTimeout(() => {
          $("#alert").fadeOut(2500);
        }, 2500);
      })
</script>

<?php  include("footer.php"); ?>




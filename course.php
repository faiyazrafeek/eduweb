<?php 
include("header.php"); 
include("navbar.php"); 
?>
    
    <div class="container">
        <h1 class="display-4 text-center my-4">Courses</h1>

       <div class="row">
           <div class="col-md-6 mb-md-0 mb-5">
           <form action="addCourse.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">Course ID</label>
            <input type="text" class="form-control" name="id" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Course Duration</label>
            <input type="text" class="form-control" name="duration">
        </div>
       
        <button type="submit" class="btn btn-primary" name="save" >Add Course</button>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href="#" class="btn btn-sm btn-danger">Delete</a>
        <a href="#" class="btn btn-sm btn-secondary">Update</a>
      </td>
    </tr>
  </tbody>
  </table>
</div>
           </div>
       </div>
    </div>

<?php  include("footer.php"); ?>
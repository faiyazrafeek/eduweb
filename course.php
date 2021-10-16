<?php 
include("header.php"); 
include("navbar.php"); 
?>
    
    <div class="container">
        <h1 class="display-4 text-center my-4">Courses</h1>

       <div class="row">
           <div class="col-md-6">
           <form>
        <div class="mb-3">
            <label for="id" class="form-label">Course ID</label>
            <input type="text" class="form-control" id="id" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="tiduration" class="form-label">Course Duration</label>
            <input type="text" class="form-control" id="duration">
        </div>
       
        <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
           </div>
           <div class="col-md-6">
           <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>
</div>
           </div>
       </div>
    </div>

<?php  include("footer.php"); ?>
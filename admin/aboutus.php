<?php 
include('includes/header.php');
include('includes/navbar.php');
?>



<!-- Modal -->
<div class="modal fade" id="addaboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <form action="code.php" method="POST">     
      <div class="modal-body">

        <div class="from-group">
            <label> Title </label>
            <input type= "text" name="title" class="form-control" placeholder="Enter Title">
        </div>

        <div class="from-group">
            <label>Sub Title </label>
            <input type= "text" name="subtitle" class="form-control" placeholder="Enter Sub Title">
        </div>

        <div class="from-group">
            <label> Description </label>
            <input type= "text" name="description" class="form-control" placeholder="Enter Description">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name="about_save" class="btn btn-primary">Save changes</button>
      </div>
</form>  
    </div>
  </div>
</div>




<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About Us
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addaboutus">
              Add  </button>

        </h6>
</div>

<div class="card body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>




<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
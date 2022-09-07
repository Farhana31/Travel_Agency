<?php 
include('includes/header.php');
include('code.php');
include('includes/navbar.php');
?>




<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "travelproject";

    $conn = mysqli_connect($server, $user, $pass, $database);
    $name="";

    if(isset($_POST[$name]))
    {
        $sth = $row["title"];
        
            $query1 = "DELETE FROM `des` WHERE title='$sth';";
            $query_run1 = mysqli_query($conn, $query1);

            
            header('location:redirect.php');

    
            
        }

?>







<!-- ////////////-->
<div class="modal fade" id="adddes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Destination</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="code.php" method="POST" enctype="multipart/form-data">     
            <div class="modal-body">

                <div class="from-group">
                    <label> Title </label>
                    <input type= "text" name="des_title" class="form-control" placeholder="Enter Title" required>
                </div>

                <div class="from-group">
                    <label>Sub Title </label>
                    <input type= "text" name="des_subtitle" class="form-control" placeholder="Enter Sub Title" required>
                </div>

                <div class="from-group">
                    <label> Description </label>
                    <input type= "text" name="des_description" class="form-control" placeholder="Enter Description" required>
                </div>

                <div class="from-group">
                    <label> Image </label>
                    <input type= "file" name="des_image" id="des_image" class="form-control" required>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save_des" class="btn btn-primary">Save</button>
                </div>

            </div>
            </form>  
        </div>
            
        
  </div>
</div>




<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Desstination
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddes">
              Add  </button>

        </h6>
</div>

<div class="card body">


    <!-- <?php




    ?> -->




    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th width=20%>Image</th>
                    <th width=20%>Delete</th>

                </tr>
            </thead>
            <tbody>

                <?php

                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    $sql = "SELECT * FROM des";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        
                            while($row = $result->fetch_assoc()) {

                                $name=$row["title"];
                            ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["title"] ?></td>
                                    <td><?php echo $row["description"] ?></td>
                                    <td> <img src="<?= $row['images']?>" alt="" width=100%> </td>
                                    <td class="td1">
                                    <a href="redirect.php?id=<?php echo $row["id"] ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>

          

                            <?php } 
                    } 

                ?>









               
            </tbody>
        </table>
    </div>
</div>

</div>






<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
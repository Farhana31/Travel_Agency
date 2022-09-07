<?php 
include('includes/header.php');
include('code.php');
include('includes/navbar.php');
?>












<!-- ////////////-->





<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Services
            
        </h6>
</div>

<div class="card body">


    <!-- <?php




    ?> -->




    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
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

                    $sql = "SELECT * FROM contact";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        
                            while($row = $result->fetch_assoc()) {

                               
                            ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["firstname"] ?></td>
                                    <td><?php echo $row["lastname"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["phone"] ?></td>
                                    <td><?php echo $row["message"] ?></td>
                                    <td class="td1">
                                    <a href="contact_redirect.php?id=<?php echo $row["id"] ?>" class="btn btn-danger btn-sm">Delete</a>
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
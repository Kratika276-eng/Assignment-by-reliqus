<?php
  session_start();
 
      
  include_once 'db-connection.php';
  $results  = mysqli_query($conn,"SELECT * FROM user_practice ");
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User list</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 
 
</head>
<body>
    <a href="form.php" class="btn btn-success">Add new</a>          
   
      <div class="">
            <div class="row">
                  <div class="col-md-12">                   
                       
                    
            </div> 
            <div class="row">
              <div class="table-responsive" style="margin-left:">
                <table  class="table"id="customers">
                        <tr>
                          <th>id</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Status</th>
                          <th>Action</th>
                          <th colspan="2" style="text-align:center;">Action</th>
                        </tr>
                    <?php

                      foreach ($results as $key => $value ) 
                      {
                    ?>
                    <tr>
                      
                      <td>
                       <?php  echo $value['id'];
                       ?>
                      </td>
                      <td>
                       <?php  echo $value['name'];
                       ?>
                      </td>
                         
                      
                      </td>
                      <td>
                        <?php echo $value['email'];
                        ?>
                      </td>
                      <td>
                        <?php echo  $value['gender'];
                        ?>
                      </td>
                    
                      <td>
                        <?php  echo $value['status'];
                        ?>
                      </td>
                      <td>
                          <a  class="btn btn-success" href="update.php? id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i></a>
                          <td style="background: white;">
                          <a class="btn btn-danger" href="delete.php? id=<?php echo $value['id'];?>"><i class="fa fa-trash"></i></a>
                        </td>
                      </td>
                    
                    </tr>
                          
                    <?php
                      } 
                    ?>
                </table>
                          <!-- print_r('string');die(); -->
              </div>
            </div>
      </div>
    </div>


</body>
</html>
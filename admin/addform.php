<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CACA</title>
    
</head>
<body>

<?php include 'header.php' ?>





    <section class="main-content page-content mt-2" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="lead breadcumb">
                        <div class="left-content mt-3">
                            <ul>
                                <li><i class="fa fa-home" id="sidebarCollapse" style="cursor:pointer"></i></li>
                                <li>|</li>
                                <li>Addmission</li>
                            </ul>
                        </div>
                        <div class="right-content mt-3">
                        <div class="dropdown">
  
  <img src="./img/profile.png" alt="" class="dropdown-toggle img-fluid" type="button" data-toggle="dropdown" aria-expanded="false" style="    margin-top: -15px;
    margin-right: 25px;width: 61px;">

  <div class="dropdown-menu">
    <a class="dropdown-item" href="#"><?php echo " Mr " .$_SESSION['username'];?></a>
    <a class="dropdown-item" href="logout.php">Log Out</a>

  </div>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>

      
            <div class="container-fluid pt-4">
              
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table text-center">
                              <thead class="bg-dark text-white">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Action</th>
                                
                              </thead>
                              <tbody>
                                <?php 
                                include 'connection.php';
                                
                                $selectquery = "select * from  addmission";
                                $query = mysqli_query($con,$selectquery);
                                while($res = mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                <td><?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['course']; ?></td>
                                <td><?php echo $res['phone']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td>
                                    <i class="fa fa-eye"></i>&nbsp;
                                    <i class="fa fa-pen"></i>&nbsp;
                                    <i class="fa fa-trash"></i>
                                </td>
</tr>
    <?php } ?>                          </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            
                </div>
</div>
       
             
</body>
</html>

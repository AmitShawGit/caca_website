<?php session_start()?>
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
                                <li>Registraion</li>
                                <li>|</li>
                                <li>View Registration</li>
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
                <table class="table-hover text-center table">
<thead class="bg-dark text-white">
    <th>ID</th>
    <th>Name</th>
    
    <th>Phone Number</th>
    <th>Course</th>
    <th>Action</th>
</thead>
<tbody>
    <?php 
    include 'connection.php';
    $selectquery = "select * from studentreg";
    $query = mysqli_query($con,$selectquery);
    while($res=mysqli_fetch_assoc($query)){
    ?>
    <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['phone']; ?></td>
    <td><?php echo $res['course']; ?></td>
    <td>
        <i class="fa fa-eye" data-target="#view<?php echo $res['id']; ?>" data-toggle="modal" type="button"></i>&nbsp;
        <i class="fa fa-pen" data-toggle="modal" data-target="#edit<?php echo $res['id']; ?>" type="button"></i>&nbsp;
        <i class="fa fa-trash" data-toggle="modal" data-target="#delete"></i>
    </td>
    </tr>
    <!-- Modal View-->
<div class="modal fade" id="view<?php echo $res['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <label><b>Name</b></label>
                <p><?php echo $res['name'];?></p>
            </div>
            <div class="col-md-4">
            <label><b>Email</b></label>
                <p><?php echo $res['email'] ?></p>
            </div>
            <div class="col-md-4">
            <label><b>Phone</b></label>
                <p><?php echo $res['phone'];?></p>
            </div>
            <div class="col-md-4">
            <label><b>Interested Course</b></label>
                <p><?php echo $res['course'];?></p>
            </div>
            <div class="col-md-4">
            <label><b>Address</b></label>
                <p><?php echo $res['address'];?></p>
            </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!-- Modal View-->
<div class="modal fade" id="edit<?php echo $res['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post">
       <div class="row">

        <div class="col-md-4">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" value="<?php echo $res['name'];?>">
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <label for="">Phone</label>
          <input type="text" name="phone" id="" class="form-control" value="<?php echo $res['phone'];?>">
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" id="" class="form-control" value="<?php echo $res['email'];?>">
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <label for="">Course</label>
          <input type="text" name="course" id="" class="form-control" value="<?php echo $res['course'];?>">
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="address" id="" class="form-control" value="<?php echo $res['address'];?>">
        </div>
        </div>
       
       </div>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update">Save changes</button>
      </div>
     
      <!-- <?php 
//  if(isset($_POST['update'])){

//    $name = $_GET['name'];
//    $ph = $_GET['phone'];
//    $ema = $_GET['email'];
//    $cou = $_GET['course'];
//    $addr = $_GET['address'];

//    $updatequery = "update studentreg set name='$name',phone='$ph', email='$ema', course='$cou', address='$addr' where name='$name'";
//    $uquery = mysqli_query($con,$updatequery);

//    if($uquery){
//      ?>
//       <script>
//       alert ('data inserted');
//      </script> 
//      <?php
//      }else{
//       ?>
//      <script>
//        alert ('data not inserted');
//       </script>
//       <?php
//      }
//     }

 ?> -->
 </form>
    </div>
  </div>
</div>
    <?php } ?>
</tbody>
                </table>
            </div>
</div>
</div>
</div>
</section>
<!-- Button trigger modal -->




<!-- Modal View-->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php include 'connection.php' ?>

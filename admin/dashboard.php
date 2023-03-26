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
                                <li>Dashboard</li>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </section>

 
      
</body>
</html>

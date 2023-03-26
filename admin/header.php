<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!--bootstrap5 Css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="./styles/style.css">
    <!--FontAwesome 6-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php include 'connection.php' ?>
        <?php include 'links.php' ?>
        
</head>
<body>
<menu>
        <section class="sidebar">
            <div class="vertical-nav bg-dark text-white" id="sidebar">

                <div class="py-2 px-2 align-item-center">
                    <img src="./img/logo1.png" alt="LOGO" width="150">
                    <div class="mediabody my-2 mb-0">
                        <h6>CACA Tech Media </h6>
                       
                    </div>
                </div>
                <ul class="nav flex-column mb-0 minimenu">

                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="fa-solid fa-chart-line mx-1"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="registration.php" class="nav-link">
                            <i class="fa-solid fa-server mx-1"></i>
                           Registration
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="addform.php" class="nav-link">
                            <i class="fa-solid fa-chart-bar mx-1"></i>
                            Addmission
                        </a>
                    </li>




                </ul>
            </div>
        </section>
    </menu>
    
    <!--Bootstrap5 JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--my js-->
        <!-- <script src="./jsfiles/index.js"></script> -->
        <script>

$(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
    });
});

</script>
       
</body>
</html>
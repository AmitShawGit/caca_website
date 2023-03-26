<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>       
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
                                <li>Insert</li>
                            </ul>
                        </div>
                        <div class="right-content mt-3">
                        <select name="" id="" class="form-control">
                                <option value=""><?php echo " Mr " .$_SESSION['username'];?></option>
                                <option><a href="logout.php">Log out</a></option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="card p-2">
                        <form action="" method="POST"  enctype="multipart/form-data">
                            <h3><Center>Add Data</Center></h3>
                            <div class="form-group pt-2">
                                <label for="image">Image</label>
                                <input type="file" name="img" id="image" class="form-control">
                            </div>
                            <div class="form-group pt-2">
                                <label for="Product">Product Name</label>
                                <input type="text" name="pname" id="Product" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group pt-2">
                                <label for="Price">Price</label>
                                <input type="text" name="pprice" id="Price" class="form-control">
                            </div>
                            <div class="form-group pt-2">
                                <label for="Quantity">Quantity</label>
                                <input type="text" name="qty" id="Quantity" class="form-control">
                            </div>
                            
                            
                            <br>
                            <button type="submit" class="btn btn-primary ripple mb-2" name="submit" style="float: right;">Save</button>
                        </form>
                        <?php
                        if(isset($_POST['submit'])){
                            $document = $_FILES["img"]["name"];
                            $tempname = $_FILES["img"]["tmp_name"];   
                            $folder = "img/".$document;
                            $image_move = move_uploaded_file($tempname, $folder);
                        

                            $pname = mysqli_real_escape_string($con,$_POST['pname']);
                            $pprice = mysqli_real_escape_string($con,$_POST['pprice']);
                            $qty = mysqli_real_escape_string($con,$_POST['qty']);

                            $insertquery = "insert into insertfiles(document,pname,pprice,qty) value('$document','$pname','$pprice','$qty')";
                            $insertquery = mysqli_query($con,$insertquery);
                            
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card p-2 preview">
                        <h3><center>Preview</center></h3>
                        <img  alt="" class="img-fluid" id="pimage">
                        <div class="card-text">
                            <p id="pname" class="pname"></p>
                            <p id="pprice"></p>
                            <p id="pstock"></p>
                        </div>
                    </div>
                </div>
 <div class="col-md-4 mt-4">
<div class="card p-2">
    <h3><center>Last Added</center></h3>
    <ul class="recentpost pl-1 mt-2">
        <?php
        $recent = 'select pname , qty , pprice from insertfiles order by id desc limit 5';
        $recentquery = mysqli_query($con,$recent);
        while($rec = mysqli_fetch_array($recentquery)){
        ?>
        <li><label><a href="#"> <?php echo $rec['pname']; ?> </a></label>
            <div class="row">
                <div class="col-md-6"><?php echo $rec['qty']; ?></div>
                <div class="col-md-6">MRP:<?php echo $rec['pprice']; ?></div>
            </div>
        </li>
        <?php
    }
    ?>
    </ul>
</div>
                
                </div>
            </div>
        </div>
    </section>

<script>
    let img = document.getElementById('image');
let pimg = document.getElementById('pimage');

img.addEventListener("change", (event) =>{
    if(event.target.files.length == 0){
        return;
    }
    let tempurl = URL.createObjectURL(event.target.files[0]);
    pimg.setAttribute("src",tempurl);
})

let product = document.getElementById('Product');
let quantity = document.getElementById('Quantity');
let price   = document.getElementById('Price');

product.addEventListener("input", function(){
    
    let ppname = this.value;
    let pname = document.getElementById('pname');
    pname.innerHTML = ppname;
})

quantity.addEventListener("input", function(){
    
    let ppquan = this.value;
    let pquan = document.getElementById('pstock');
    pquan.innerHTML = ppquan;
})

price.addEventListener("input", function(){
    
    let ppprice = this.value;
    let pprice = document.getElementById('pprice');
    pprice.innerHTML = ppprice;
})




</script>
</body>

</html>
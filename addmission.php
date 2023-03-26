<?php include 'navbar.php' ?>

<div class="container newform mt-4 mb-2">
  <!--Top Section-->
  <div class="row d-flex justify-content-center">
    <div class="col-md-3">
      <img src="./images/logo.png" alt="" class="img-fluid">
    </div>
    <div class="col-md-4">
      <div class="addressTax">
        <ul>
          <li>Roy Market, 1st floor, Panagarh Bazar</li>
          <li>Bardhhaman , Pin Code - 713148</li>
          <li>Email : cacahelpyou@gmail.com</li>
          <li><b>Website : www.cacart.com</b></li>
          <li><b>Phone : 7699997999 / 7699997994</b></li>
        </ul>
      </div>

    </div>
    <div class="col-md-5">
      <div class="addressTax" style="text-align: center;">
        <ul>
          <li><b>A UNIT OF</b></li>
          <li><b>CANVAS ART & CULTURAL ACADEMY</b></li>
          <li>(Government RegisterISO 9001 : 2015 Certification)</li>
        </ul>
        
      </div>
    </div>
   
  </div>
  <!--Top section ends-->
  <hr style="background-color: black;">
  <center><h3>Online Admission Form</h3></center>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row pt-4">
 
    <div class="col-md-9">
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <input type="text" name="name" id=""class="form-control inpu">
      <label class="labl">Name</label>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <input type="date" name="dob" id=""class="form-control inpu">
      <label class="lab">Date Of Birth</label>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <select name="gender" id="" class="form-control inpu"> 
        <option value=""></option>
        <option value="Male">Male</option>
        <option value="female">Female</option>
      </select>
      <label class="labl">Gender</label>
    </div>
  </div>
 
  <div class="col-md-4">
  <div class="form-group">
    
    <select name="course" id="sem" class="form-control inpu">
        <option value="0" selected disabled></option>
        <option value="CCA">CCA(career in Computer Application)</option>
        <option value="DCA">DCA(Diploma in Computer Application)</option>
        <option value="Web Design & Development">Web Design & Development</option>
        <option value="Mernstake Developer">Mernstake Development</option>
        <option value="Animation & Motion Graphic">Animation & Motion Graphic</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="Print & Publication">Print & Publication</option>
        <option value="Photoshop">Photoshop</option>
        <option value="Illustration">Illustration</option>
        <option value="2d Animation">2D Animation</option>
        <option value="Java">Java</option>
        <option value="HTML">HTML</option>
        <option value="C & C++">C & C++</option>
        <option value="Python">Python</option>
        <option value="3D Interior & Exrerior Design">3D Interior & Exrerior Design</option>
    </select>
    <label for="" class="labl">Interested Course</label>
</div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <input type="text" name="fatName" id=""class="form-control inpu">
    <label class="labl">Father's Name</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <input type="text" name="motName" id=""class="form-control inpu">
    <label class="labl">Mother's Name</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <input type="text" name="fatOccu" id=""class="form-control inpu">
    <label class="labl">Father Occupation</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <select name="edu" id="" class="form-control inpu"> 
      <option value=""></option>
      <option value="10th">10th</option>
      <option value="12th">12th</option>
      <option value="Graduate">Graduate(Any)</option>
      <option value="Masters">Masters (Any)</option>
    </select>
    <label class="labl">Highest Qualification</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
  <input type="email" name="email" id="" class="form-control inpu">
    <label class="labl">Email</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
  <input type="text" name="phone" id="" class="form-control inpu">
    <label class="labl">Phone No.</label>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
  <textarea name="address" id=""  rows="1" class="form-control inpu"></textarea>
    <label class="labl">Address</label>
  </div>
</div>
</div>
    </div>
    <div class="col-md-3">
      
      <div class="input-file">,
        <label for="input">
          <div class="upload"><i class="fa fa-upload"></i></div>
        </label>
        <input type="file" name="image" id="input" style="display: none;">
      </div>
      <span style="font-size: 12px;"><b>Upload Pic</b></span>
      <button class="btn btn-primary mr-5 mt-5 mb-2"style="float:right;" type="submit" name="submit">Save</button>
    </div>

  </div>
</form>
  

</div>
  


  <?php include 'footer.php' ?>

    <?php include './admin/connection.php' ?>

    <?php if(isset($_POST['submit'])){
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $dob = mysqli_real_escape_string($con,$_POST['dob']);
      $gender = mysqli_real_escape_string($con,$_POST['gender']);
      $course = mysqli_real_escape_string($con,$_POST['course']);
      $fatName = mysqli_real_escape_string($con,$_POST['fatName']);
      $motName = mysqli_real_escape_string($con,$_POST['motName']);
      $fatOccu = mysqli_real_escape_string($con,$_POST['fatOccu']);
      $edu = mysqli_real_escape_string($con,$_POST['edu']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $phone = mysqli_real_escape_string($con,$_POST['phone']);
      $address = mysqli_real_escape_string($con,$_POST['address']);

      $pimage =  $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "imagess/".$pimage;
      $image_move = move_uploaded_file($tempname, $folder);

      $insertquery = "insert into addmission(name,dob,gender,course,fatName,motName,fatOccu,edu,email,phone,address,image)values('$name','$dob','$gender','$course','$fatName','$motName','$fatOccu','$edu','$email','$phone','$address','$pimage')";

      $query = mysqli_query($con,$insertquery);
      if($query){
        ?>
         <script>
         alert ('data inserted');
        </script> 
        <?php
        }else{
         ?>
          <script>
          alert ('data not inserted');
         </script> 
         <?php
        }
    }
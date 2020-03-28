<html>
    <head>
        <title>AfterClass: Find tutors now</title>
        <link rel="stylesheet" href="teacherstyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>

        <!--NAVIGATION BAR--->
        <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="logoimg.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Teacher Login <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>
</nav>
 </section>

<!-----end of nav bar-->

<!----Big div--->




<section id="Cityfilter">
         <div  class="container">
         <h2>Register as a Tution Teacher</h2>
         
        
             
             
         </div>
        </section>
<!----end of big div-->

<!----TEACHER FORM-->

<div class="main" style="padding: 5%;background-color: silver;margin-top: 20px;margin-left: 20px;margin-right: 20px">
    <h5 style="text-align: center;">TEACHER REGISTRATION FORM</h5>
    <p style="text-align: center;">Fill the form and get connected with one or more student of your region</p>


   <!-----to get the confirmation message---->
    <?php if(isset($_GET['msg'])) 
    {


       echo  "<p style='color:white; background-color:green'>" .$_GET['msg']."</p>";    
      
      }
    ?>

    


<form  action="teacherpostregistration.php" style="margin-top: 10px;font-style: bold" method="GET">

<!---NAME TAG--->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"><b>Your Name*</b></label>
      <input type="text" class="form-control"  name="name"  id="inputEmail4" placeholder="Enter Your Name" required>
    </div>
  </div>
 <!--END OF NAME TAG--->


<!--- EMAIL TAG-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"><b>Email id*</b></label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    </div>
<!--END OF EMAIL TAG--->



<!-- PHONE NUMBER TAG--->    
    <div class="form-group col-md-4">
      <label for="inputPassword4"><b>Mobile Number*</b></label>
      <input type="Number" class="form-control" name="phonenumber" id="inputPassword4" placeholder="Phone Number" required>
    </div>
  </div>
<!--END OF PHONE TAG--->


<!--ADDRESS TAG-->
  <div class="form-group">
    <label for="inputAddress"><b>Address*</b></label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" required>
  </div>
<!--END OF ADDRESS TAG-->

<!--CITY TAG-->  
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"><b>City*</b></label>
      <input type="text" class="form-control" name="city" id="inputCity" required>
    </div>
<!--END OF CITY TAG-->

<!--STATE TAG--->    
    <div class="form-group col-md-4">
      <label for="inputState"><b>State*</b></label>
      <select id="inputState" class="form-control" name="state" required>
        <option selected>West Bengal</option>
      </select>
    </div>
<!--END OF STATE TAG--->



<!--ZIP TAG-->
    <div class="form-group col-md-2">
      <label for="inputZip"><b>Zip*</b></label>
      <input type="text" class="form-control"  name="zip" id="inputZip" required>
    </div>
  </div>
<!--END OF ZIP TAG-->



<!--EDUCATION TAG-->  
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"><b>Highest Education Qulification*</b></label>
      <input type="text" class="form-control"  name="qualification"  id="inputEmail4" placeholder="Like Type B.S.C in MATHS" required>
    </div>
    <!--COLLEGE TAG-->
    <div class="form-group col-md-4">
      <label for="inputPassword4"><b>College Name*</b>(Highest Education College)</label>
      <input type="text" class="form-control" name="collegename"  id="inputPassword4" placeholder="college Name" required>
    </div>
    <!--END OF COLLEGE TAG-->
  </div>

<!--END OF EDUCATION TAG-->


<!---class the teacher teach--->
   <div class="form-group">
    <label for="inputAddress"><b>Class you Teach*</b></label>
   <br>
   <!-- Material inline less than class 1-->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="LKG & UKG">
  <label class="form-check-label" for="materialInline1">Class LKG & UKG</label>
</div>

    <!-- Material inline 1 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 1">
  <label class="form-check-label" for="materialInline1">Class 1</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="materialInline2" name="class[]" value="class 2">
    <label class="form-check-label" for="materialInline2">Class 2</label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="materialInline3" name="class[]" value="class 3">
    <label class="form-check-label" for="materialInline3">Class 3</label>
</div>
   <!-- Material inline 4 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 4">
  <label class="form-check-label" for="materialInline1">Class 4</label>
</div>

<!-- Material inline 5 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 5">
  <label class="form-check-label" for="materialInline1">Class 5</label>
</div>

<!-- Material inline 6 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 6">
  <label class="form-check-label" for="materialInline1">Class 6</label>
</div>

<!-- Material inline 7 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 7">
  <label class="form-check-label" for="materialInline1">Class 7</label>
</div>

<!-- Material inline 8 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 8">
  <label class="form-check-label" for="materialInline1">Class 8</label>
</div>


<!-- Material inline 9 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 9">
  <label class="form-check-label" for="materialInline1">Class 9</label>
</div>


<!-- Material inline 10 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 10">
  <label class="form-check-label" for="materialInline1">Class 10</label>
</div>


<!-- Material inline 11 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]" value="class 11">
  <label class="form-check-label" for="materialInline1">Class 11</label>
</div>

<!-- Material inline 12 -->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="class[]"  value="class 12">
  <label class="form-check-label" for="materialInline1">Class 12</label>
</div>
</div>

<!--end of class the teacher teach-->


<!---SUBJECT THE TEACHER TEACH--->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"><b>Subject you Teach*</b></label>
      <input type="text" class="form-control" id="inputEmail4" name="subjectteach" placeholder="Maths,Science,All subject" required>
    </div>
  </div>
  <!---END OF SUBJECT THE TEACHER TEACH-->
  <!---board selection-->
     <div class="form-group">
    <label for="inputAddress"><b>Board Preference*</b></label>
   <br>
   <!--WBSE-->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="board[]" value="WBSE">
  <label class="form-check-label" for="materialInline1">WBSE</label>
</div>
<br>
 <!--CBSE-->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="board[]" value="CBSE">
  <label class="form-check-label" for="materialInline1">CBSE</label>
</div>
<br>
<!--ICSE-->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="board[]" value="ICSE">
  <label class="form-check-label" for="materialInline1">ICSE</label>
</div>
<br>
<!---OTHERS--->
<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" id="materialInline1" name="board[]" value="OTHERS">
  <label class="form-check-label" for="materialInline1">OTHERS</label>
</div>


  <!--end of board selection--->
<br>
<br>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        I agree to the Terms & Conditions and privacy policy and also authorize AfterClass.com to contact me.We accepted that you have provided with a valid <b>Mobile Number</b>.
      </label>
    </div>
  </div>

  <!----end of board selection--->
  <button onclick="Showdiv()" type="submit" id="submit" class="btn btn-primary" style="background-color: green">Submit</button>
</form>
</div>






    </body>
    </html>

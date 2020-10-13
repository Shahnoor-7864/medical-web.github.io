<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
      .mb-5{
          margin-top:200px;
      }

      .loc{
        margin-top:400px;
      }

      .phone , .em , .locat{
        height:300px;
        width:300px;
        
        margin-left:50px;
        text-align:center;

      }
      
      .para p{
        margin-left:35px;
        color:  rgb(172, 166, 166);
      }
      .pee p{
        margin-left:20px;
        color:  rgb(172, 166, 166);
      }
      .par p{
        margin-left:50px;
        color:  rgb(172, 166, 166);
      }
      
      .fa-phone {
        height:150px;
        width:150px;
        border-radius:50%;
        padding-left:0px;
        padding-top:40px;
      }
      .fa-envelope{
        height:150px;
        width:150px;
        border-radius:50%;
        padding-left:0px;
        padding-top:40px;
      }
      .fa-map-marker {
        height:150px;
        width:150px;
        border-radius:50%;
        padding-left:0px;
        padding-top:40px;
      }
      @media(max-width:1199px){
        .phone , .em , .locat{
        height:250px;
        width:250px;
        
        margin-left:40px;
      }
      .para p {
        text-align:left;
      }
      .par p{
        padding-right:50px;
      }
      }
      @media(max-width:991px){
        .phone , .em , .locat{
        height:250px;
        width:210px;
        
        margin-left:5px;
      }
      .pee p {
        font-size:17px;
      }
      }
      @media(max-width:767px){
        .phone , .em , .locat{
        height:250px;
        width:380px;
        
        margin-left:5px;
      }
     .para p{
       padding-left:70px;
     }
      }

      @media(max-width:598px){
        .phone , .em , .locat{
        height:250px;
        width:280px;
        
        margin-left:5px;
      }
      .para p{
       padding-left:20px;
     }
      .nid h1{
    font-size:50px;
    font-weight:bold;
    margin-top:200px;
    margin-bottom:50px;
}
.nid button{
    margin-left:250px;
}

     
      }
      @media(max-width:522px){
        .nid button{
          margin-left:150px;
}
      }
      @media(max-width:392px){
       
      .nid h1{
    font-size:40px;
    font-weight:bold;
    margin-top:200px;
    margin-bottom:50px;
}
.nid button{
    margin-left:100px;
}
      }


  </style>
  </head>
<body>
 
  
    
  
<nav class="navbar navbar-expand-lg navbar-light mt-3 ">
  <a class="navbar-brand text-white " href="#">MEDICALLY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="service.php" target="blank">SERVICES</a>
      </li>
      
    
      <li class="nav-item">
        <a class="nav-link text-white" href="department.php">DEPARTMENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="about.php">ABOUT US</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">CONTACT US</a>
      </li>
  </div>
</nav>


<section class="nid">
    <div class="container">
  <h1 class="text-capitalize text-white text-center">CONTACT US</h1>
  <button type="button" class="btn btn-primary mt-3 text-center ">Get Started</button>
   </div>
</section>

<section class="loc">
<div class="container">
<div class="row ">
  <div class="phone  d-block">
    <i class="fa fa-4x fa-phone bg-primary   text-white " aria-hidden="true"></i>
    <div class="para mt-3">
       <p >Give us a call</p>
        <h4 class="text-primary"> 1999-9999-999</h4>
    </div> 
  </div>

  <div class="em  d-block">
  <i class="fa fa-4x fa-envelope   bg-primary  text-white" aria-hidden="true"></i>
  <div class="pee mt-3">
   <p>Send us a Message</p>
    <h4 class="text-primary ">info@medically.com</h4>
  </div> 
  </div>

  <div class="locat  d-block">
  <i class="fa fa-4x fa-map-marker bg-primary text-white " aria-hidden="true"></i>
  <div class="par mt-3">
   <p >Visit us</p>
    <h4 class="text-primary">1984 Fake Street</h4>
   </div> 
  </div>





</div>
</div>
</section>



<!--contact section start-->
<div class="container mb-5">
<form action="userinfo.php" method="post">
  <div class="form-group w-50 auto">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="user" id="email" placeholder="Enter Your Name">
  </div>
  <div class="form-group w-50 auto">
    <label for="email">E-Mail:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your E-mail">
  </div>
  <div class="form-group w-50 auto">
    <label for="mobile">Mobile:</label>
    <input type="number" class="form-control" name="mobile" id="Mobile" placeholder="Enter Your Mobile Number">
  </div>
  <label for="comment">comments:</label>
  <textarea  id="comment"  class="form-control w-50" name="comment" cols="10" rows="5" placeholder="Enter Your Message">

  </textarea>
  <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
</div>


<!--contact section closed-->

<footer class="bg-primary mb-3">
            <div  class="container">
            <h4 class="text-center text-white pt-5">FOLLOW ME</h4>

                <div class="row  mt-5  icon">
                    
                   <a href="https://www.facebook.com/shahnoor.nadeem.792" target="blank"> <i class=" fa-3x fa fa-facebook PLACE two  text-white" aria-hidden="true"></i></a>
                  <a href="#"><i class=" fa-4x fa fa-instagram PLACE  two text-white" aria-hidden="true"></i></a>
                  <a href="#"><i class=" fa-4x fa fa-twitter PLACE  two text-white" aria-hidden="true"></i></a>
                </div>
            </div>

            <p class="text-center   mt-5 text-white">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved 
               </p>
        </footer>



    <!--footer section closed-->



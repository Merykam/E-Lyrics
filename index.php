<?php
include "gg.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
     background-image: url(best.jpg);
     background-size: cover;
     background-position: center;
     width: 100vw;
     height: 100vh;
     
    }



    .card{
      background-image:linear-gradient(to right, black, #325566) !important;
        border-radius: 2rem !important;
     
        /* box-shadow:  #69B1DD 0px 5px 15px; */
        /* box-shadow: 2px 2px 8px #69B1DD  !important; */
        width: 450px;
        height: 400px;
       

     
          
    } 
    @media (max-width: 768px) {
  .card{
    width: 350px;
  }
  


}
    .btn{
        background-color: white !important;
        color: black;
        font-size: 17px;
        font-weight: bold;
        border-radius: 1rem;
        /* padding: 10px !important; */
        
        /* box-shadow: black  2px 2px !important ; */
    }
    .form-label{
      color: white !important;
        font-weight: bold;
    }
    .text-center{
      font-family: 'Luckiest Guy', cursive;
        font-weight: bold;
        color: white !important;
        font-size: 2rem;
        text-shadow: #1C82AD 2px 2px !important;
        animation: pulse !important;
        animation-duration: 1s !important;
        animation-iteration-count: infinite !important;


    }
    .text-center span{
        color: #1C82AD !important ;
    }
    .login{
      color: white;
      text-align: center;
    }
    .login a{
      color: whitesmoke;
      text-decoration: none;
      font-weight: bold;
      
      
    }


  </style>

  <div class="container  py-5 d-flex justify-content-center align-items-center ">
  
    <div class="gx-lg-5 flex-column mb-5 ">
   
   

      <div class=" mb-lg-0 ">
      

        <div class="card d-flex justify-content-center   ">
          <div class=" px-4 py-5 px-md-5 ">
            <form method="post">
            <!-- <h1 class="text-center"> <span>E</span>-ly<span>r</span>ics <span>M</span>us<span>i</span>c</h1> -->
                <h4 class="fw-bold mt-4 text-center">Sign in</h4>


              <!-- Email input -->
              <div class="form-outline mb-4 mt-5">
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                <input name="Email" placeholder="Enter your name" type="email" id="form3Example3" class="form-control" />
                
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
                <input name="password" placeholder="Enter your Password"  type="password" id="form3Example4" class="form-control" />
               
              </div>



              <!-- Submit button -->
              <div class=" d-flex justify-content-center">

              <div class="d-flex flex-column">

             
             
              <button name="login" type="submit" class="btn btn-block mb-4 ">
                Sign in
              </button>

              <span class="login">Don't have account ? <a href="Sign-up.php">Register here</a></span>

              </div>
             
              </div>
             

                </button>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
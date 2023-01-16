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
        background-color:  white !important;
        border-radius: 2rem !important;
     
        /* box-shadow:  #69B1DD 0px 5px 15px; */
        /* box-shadow: 2px 2px 8px #69B1DD  !important; */
        width: 450px;
        height: 430px;
       

     
          
    }  
    .btn{
        background-color: #69B1DD !important;
        color: white;
        font-weight: bold;
        border-radius: 1rem;
        padding: 8px !important;
    }
    .form-label{
        color: #1C82AD !important;
        font-weight: bold;
    }
    .text-center{
        font-family: 'Luckiest Guy', cursive;
        font-weight: bold;
        color: black !important;
        font-size: 2rem;
        text-shadow: #1C82AD 2px 2px !important;
        animation: pulse !important;
        animation-duration: 1s !important;
        animation-iteration-count: infinite !important;


    }
    .text-center span{
        color: #1C82AD !important ;
    }
/* 
    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    } */

    /* #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    } */

    /* .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    } */
  </style>

  <div class="container  py-5 d-flex justify-content-center  ">
  
    <div class="gx-lg-5 flex-column mb-5">
   
   

      <div class=" mb-lg-0">
        <!-- <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div> -->

        <div class="card d-flex justify-content-center   ">
          <div class=" px-4 py-5 px-md-5 ">
            <form>
            <h1 class="text-center"> <span>E</span>-ly<span>r</span>ics <span>M</span>us<span>i</span>c</h1>
                <h4 class="fw-bold mt-4">Sign in</h4>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <!-- <div class="row"> -->
                <!-- <div class="col-md-6 mb-4"> -->
                  <!-- <div class="form-outline mt-4">
                    <label class="form-label" for="form3Example1">First name</label>
                    <input type="text" id="form3Example1" class="form-control" />
                  
                  </div> -->
                <!-- </div> -->
                <!-- <div class="col-md-6 mb-4 mt-4"> -->
                  <!-- <div class="form-outline">
                   <label class="form-label" for="form3Example2">Last name</label>
                    <input type="text" id="form3Example2" class="form-control" />
                    
                  </div> -->
                <!-- </div> -->
              <!-- </div> -->

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" id="form3Example3" class="form-control" />
                
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control" />
               
              </div>

              <!-- Checkbox -->
              <!-- <div class="form-check d-flex justify-content-center mb-4"> -->
                <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked /> -->
                <!-- <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label> -->
              <!-- </div> -->

              <!-- Submit button -->
              <div class=" d-flex justify-content-center">

             
              <button type="submit" class="btn btn-block mb-4 ">
                Sign in
              </button>
              </div>

              <!-- Register buttons -->
              <!-- <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div> -->
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
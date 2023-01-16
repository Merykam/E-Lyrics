<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    
  />
  <link rel="stylesheet" href="dash.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <!-- <a
          href="#"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <span>Main dashboard</span> -->
        <!-- </a> -->
        <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
        </a> -->
        <a href="#" class="fw-bold fs-5 text-decoration-none text-dark py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Home</span></a
        >
        <a href="#" class="fw-bold fs-5 text-decoration-none text-dark py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Statistique</span></a
        >
        <a href="#" class="fw-bold fs-5 text-decoration-none text-dark py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Music lyrics</span></a
        >
       
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <!-- <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button> -->

      <!-- Brand -->
      <h1 class="text-center"> <span>E</span>-ly<span>r</span>ics <span>M</span>us<span>i</span>c</h1>
      <!-- <a class="navbar-brand" href="#">
            
      </a> -->
      <!-- Search form -->
      <form class="ms-5 d-none d-md-flex  w-auto my-auto">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search lyrics'
          style="min-width: 225px;"
        />
        <span class="input-group-text border-0"><i class="bi bi-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="ms-auto">
        <!-- Notification dropdown -->
        <!-- <li class="nav-item dropdown">
          <a
            class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a> -->
            <!-- </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li> -->

        <!-- Icon -->
        <!-- <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li> -->
        <!-- Icon -->
        <!-- <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a> -->
        <!-- </li> -->

        <!-- Icon dropdown -->
        <!-- <li class="nav-item dropdown">
          <a
            class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="flag-united-kingdom flag m-0"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#"
                ><i class="flag-united-kingdom flag"></i>English
                <i class="fa fa-check text-success ms-2"></i
              ></a>
            </li> -->
            <!-- <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li> -->
          <!-- </ul>
        </li> -->

        <!-- Avatar -->
        <!-- <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
              class="rounded-circle"
              height="22"
              alt="Avatar"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li> -->
              <!-- <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul> -->
        <!-- </li>
      </ul> -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<!-- <main style="margin-top: 58px;">
  <div class="container pt-4"></div>
</main> -->
<!--Main layout-->
<main>
<div class="d-flex justify-content-around">



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    
  </div>
</div>

</div>
</main>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>
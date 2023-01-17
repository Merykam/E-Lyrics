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
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
       
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
  <nav id="main-navbar d-flex align-items-center" class="navbar navbar-expand-lg fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      

      <!-- Brand -->
      <h1 class="text-center"> <span>E</span>-ly<span>r</span>ics <span>M</span>us<span>i</span>c</h1>
    
      <!-- Search form -->
      <!-- <form class="ms-5 d-md-flex  w-auto ">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder='Search lyrics'
          style="min-width: 225px;"
        />
        <span class="input-group-text border-0"><i class="bi bi-search"></i></span>
      </form> -->
      <div class="d-flex flex-center">
      <i class="bi bi-person-fill mydimensions"></i>
      <div class="dropdown">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
       Mariem kamaych
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item fw-bold " href="#">Log out</a></li>
        
      </ul>
      </div>

      </div>
    

      <!-- Right links -->
      <!-- <ul class="ms-auto">
       
        </li>  -->
       
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<main class="main1"> 
<div class="d-flex justify-content-around">



<div class="card shadow-lg" style="width: 18rem;">
  <div class="card-body d-flex justify-content-center align-items-center">
    <div class="flex-column">

 
    <h5 class="card-title">Total des artistes</h5>
    <h1 class="text-white">0</h1>
    </div>
    
  </div>
</div>

<div class="card shadow-lg" style="width: 18rem;">
  <div class="card-body d-flex justify-content-center align-items-center">
    <div class="flex-column">

 
    <h5 class="card-title">Total des titres</h5>
    <h1 class="text-white">0</h1>
    </div>
    
  </div>
</div>

<div class="card shadow-lg" style="width: 18rem;">
  <div class="card-body d-flex justify-content-center align-items-center">
    <div class="flex-column">

 
    <h5 class="card-title">Total des admines</h5>
    <h1 class="text-white">0</h1>
    </div>
    
  </div>
</div>
</main>
<main class="tab">
  <!-- Modal -->
  <div class="ms-auto">
				<a href="#modal-task" data-bs-toggle="modal" class="btn btn-dark btn-rounded px-4 rounded-pill"  onclick="addTask()"><i class="bi bi-plus-lg text-white"></i> Add new Lyrics</a>
		</div>
  <div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Add Lyrics</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="task-id" name="task-id">
							<div class="mb-3">
								<label class="form-label">Song title</label>
								<input type="text" class="form-control" id="task-title" name="title" />
							</div>
              <div class="mb-3">
								<label class="form-label">Singer name</label>
								<input type="text" class="form-control" id="task-title" name="title" />
							</div>
			
							<div class="mb-3">
								<label class="form-label">Date of creation</label>
								<input type="datetime-local" class="form-control" id="task-date" name="date"/>
							</div>
              <div class="mb-0">
								<label class="form-label">Lyrics</label>
								<textarea class="form-control" rows="5" id="task-description" name="description"></textarea>
							</div>
						
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
	
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- End Modal -->


<!-- <table class="table" >
  <thead>
    <tr>
    
      <th scope="col">Song title</th>
      <th scope="col">Artist name</th>
      <th scope="col">Lyrics</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td>gggg</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td class="d-flex">
        <form action="post">
          <input class="update" type="submit" value="Update">
        </form>


       
        <a class="delet" href="">Delet</a>

      </td>
    </tr>
   
  </tbody>
</table> -->

<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Time</th>
                    <th>Lyrics</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr class="odd">
                        <td class="sorting_1">ff</td>
                        <td class="">gg</td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td>
                            <div class="d-flex fs-3">
                                <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editSong()"><i class="bi bi-pencil-square users-icon"></i></a>
                                <a href="" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
</main>

   
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $("#data-table").DataTable({
            scrollX: true,
            info: false,
            responsive: true,
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>
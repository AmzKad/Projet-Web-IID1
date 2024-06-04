<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - eCommerce Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="./output.css" rel="stylesheet">

  <style>
    /* ====================================================> Navbar Section */
.navContainer {
    background-color:rgba(85, 85, 85, 0.05); 
    z-index: 10;
}
.navContainer:hover{
    background-color:rgba(85, 85, 85, 0.5); 
    box-shadow: 0 0 20px 2px rgba(58, 58, 60, 0.3);
}
.py-6 {
    padding-top: 1.5rem!important;
    padding-bottom: 1.5rem!important;
}
.logo:hover{
    transition: all 0.3s;
    color: #25A8E0;
}
.navChoix{
    font-size: 15px;
    color: #F1F1F1;
    font-family: 'Poppins', sans-serif;
    gap: 8px;
    transition: all 0.3s;
}
.navChoix:hover{
    color: #25A8E0;
}
.navChoix ion-icon {
    font-size: 20px;
    color: #25A8E0;
}

.NavIcon{
    width: 30px;
    transition: all 0.3s;
}
.NavIcon:hover{
    color: #25A8E0;
}
    body {
      background-color: black;
      color: white;
    }
    .social-icon {
      font-size: 30px;
      color: white; /* Set icon color to white */
      margin-left: 10px;
    }
    .login-container {
      margin-top: 150px;
      border: 2px solid rgb(69, 216, 253); /* Adding border */
      border-radius: 10px; /* Adding border radius */
      height: 500px;
    }
    .form-group {
     margin-left: 80px;
    }
    .login-container {
      height: 500px;
      width: 600px;
    }
    .login-container .btn {
      background-color: rgb(69, 216, 253);
      color: black;
      border-color: rgb(69, 216, 253);
    }
    .login-container .btn:hover {
      background-color: black;
      color: rgb(69, 216, 253);
    }
    /* Adjust the color of Font Awesome icons */
    .fab {
      color: white;
    }
    .container{margin-left: 200px;
    }
  </style>
</head>
<body>
     
  <nav class="navContainer position-relative ">
    <div class="flex flex-wrap">
    <section class="relative mx-auto">
        <nav class="flex justify-between text-white w-screen navbarStyle">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a class="logo text-3xl font-bold font-heading" href="index.html"> Samzi. </a>

            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a class="navChoix flex items-center" href="index.html"><ion-icon name="home"></ion-icon>Home</a></li>
            <li><a class="navChoix flex items-center" href="#"><ion-icon name="copy"></ion-icon> Catagory</a></li>
            <li><a class="navChoix flex items-center" href="#"><ion-icon name="cart"></ion-icon> Products</a></li>
            <li><a class="navChoix flex items-center" href="#"><ion-icon name="mail"></ion-icon> Contact Us</a></li>
            </ul>
            <!-- Header Icons -->
            <div class="hidden xl:flex items-center space-x-5 ">
            <a class="" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </a>
            <a class="flex items-center" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="flex absolute -mt-5 ml-4">
                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full opacity-75" style="background-color: #25A8E0;"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 " style="background-color: #25A8E0 !important;"></span>
                </span>
            </a>

            <a class="flex items-center NavIcon" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            
            </div>
        </div>

        </nav>
        
    </section>
    </div>
</nav>
  
</section>
</div>
</nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card border-0">
          <!-- Model Viewer -->
          <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
          <model-viewer 
              src="scene (3).glb"
              alt="Une voiture noire en 3D"
              camera-controls="false"
              autoplay
              style="width: 850px; height: 850px; background-color: black;"
              > 
          </model-viewer>
        </div>
      </div>
      <div class="col-md-6 p-5">
        <div class="login-container">
          <h2 class="text-center mb-4" style="margin-top:30px;">Login to your account</h2>
          <form>
            <div class="form-group" style="margin-top:40px" >
              <label for="email">Email address</label>
              <input type="email" class="form-control marg" id="email" aria-describedby="emailHelp" placeholder="Enter email" style="width: 400px; ">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" style="width: 400px; ">
            </div>
            <button type="submit" class="btn btn-block" style="width:400px;margin-top:40px; margin-left:80px;" >Login</button>
          </form>
          <p class="mt-3 text-center">Don't have an account? <a href="#">Register here</a></p>
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="#" class="social-icon text-primary"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon text-danger"><i class="fab fa-google"></i></a>
                <a href="#" class="social-icon text-info"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php echo $__env->yieldContent('mainContent'); ?>
  </body>
</html>
<?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/frontend/master.blade.php ENDPATH**/ ?>
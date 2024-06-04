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
  <link href="\storage\static\css\nav.css" rel="stylesheet">

</head>
<body>
     
  <nav class="navContainer position-relative ">
    <div class="flex flex-wrap">
    <section class="relative mx-auto">
        <nav class="flex justify-between text-white w-screen navbarStyle">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
            <a class="logo text-3xl font-bold font-heading" href="index.html"> Samzi. </a>

            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="navChoix flex items-center" href="/landing"><ion-icon name="home"></ion-icon>Home</a></li>
                    <li><a class="navChoix flex items-center" href="/client"><ion-icon name="copy"></ion-icon> sign up</a></li>
                    <li><a class="navChoix flex items-center" href="#"><ion-icon name="cart"></ion-icon> Products</a></li>
                    <li><a class="navChoix flex items-center" href="#foot"><ion-icon name="mail"></ion-icon> Contact Us</a></li>
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
  
    <?php echo $__env->yieldContent('mainContent'); ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
<?php /**PATH C:\Users\HP\OneDrive\Bureau\projet\projetelbennaylaravel\samzi\resources\views/products/nav.blade.php ENDPATH**/ ?>
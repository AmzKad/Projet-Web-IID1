
<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/storage/static/css/libs.bundle.css" />
    <link rel="stylesheet" href="\storage\static\css\theme.bundle.css" />

    <link href="\storage\static\css\output.css" rel="stylesheet">
    <link href="\storage\static\css\style.css" rel="stylesheet">
    <link href="\storage\static\css\product.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .card-body {
            padding: 15px;
        }

        .card-body p, .card-body .btn {
            margin: 5px 0;
        }

        .Buybtn {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            border-radius: 4px;
        }
    </style>
    <title>Siamz | Product Page</title>
    
</head>
<body >

    <nav class="navContainer position-relative bg-dark">
        <div class="flex flex-wrap">
        <section class="relative mx-auto">
            <nav class="flex justify-between text-white w-screen navbarStyle">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="logo text-3xl font-bold font-heading" href="index.html"> Samzi. </a>

                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="navChoix flex items-center" href="/landing"><ion-icon name="home"></ion-icon>Home</a></li>
                    <li><a class="navChoix flex items-center" href="/signup"><ion-icon name="copy"></ion-icon> sign up</a></li>
                    <li><a class="navChoix flex items-center" href="/items"><ion-icon name="cart"></ion-icon> Products</a></li>
                    <li><a class="navChoix flex items-center" href="#foot"><ion-icon name="mail"></ion-icon> Contact Us</a></li>
                    </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
                <a class="" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a class="flex items-center" href="/cart">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full opacity-75" style="background-color: #25A8E0;"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 " style="background-color: #25A8E0 !important;"></span>
                    </span>
                </a>

                <a class="flex items-center NavIcon" href="/login">
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

    <section class=" OurLastedDeals" data-aos="fade-up">

        <div class="container">
            <div class="ProductsConainer">
                <ul class="list-group sideBarCategory" style="color: #F1F1F1; width: 300px;" >
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        All Category
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        gaming Console
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Smartphone
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Smartphone
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Watch
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </ul>
                <div>
                    <div class="mb-5">
                        <h2 class="OPTitle text-center display-5 fw-bold mb-3" style="margin-top:50px;"><span>Our </span>  Products</h2>
                        
                    </div>

                    <!-- <div class="swiper-container overflow-visible SWC" style="width: 1000px;"
                        data-swiper
                        data-options='{
                        "spaceBetween": 25,
                        "cssMode": true,
                        "roundLengths": true,
                        "scrollbar": {
                            "el": ".swiper-scrollbar",
                            "hide": false,
                            "draggable": true
                        },      
                        "navigation": {
                            "nextEl": ".swiper-next",
                            "prevEl": ".swiper-prev"
                        },
                        "breakpoints": {
                            "576": {
                            "slidesPerView": 1
                            },
                            "768": {
                            "slidesPerView": 2
                            },
                            "992": {
                            "slidesPerView": 3
                            },
                            "1200": {
                                "slidesPerView": 4
                            }        
                        }
                        }'>
                        <div class="swiper-wrapper pb-5 pe-1"> -->
                        <div class="products-grid">
                        <?php include public_path('fetch_products.php'); ?>
                    </div>
                        </div>
                    
                        <!-- Buttons-->
                        <div class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4"><i class="ri-arrow-left-s-line ri-lg"></i></div>
                        <div class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
                    
                        <!-- Add Scrollbar -->
                        <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    </div>
                <!-- / Swiper Latest-->            
                </div>
        </div>
    </section>


    
    




    <script src="\storage\static\js\vendor.bundle.js"></script>
    <script src="\storage\static\js\theme.bundle.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/products/items.blade.php ENDPATH**/ ?>
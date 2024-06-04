<!-- resources/views/products/items.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
</head>
<body>
<!doctype html>
<html lang="en">
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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
<body>

    <nav class="navContainer position-relative bg-dark">
        <div class="flex flex-wrap">
        <section class="relative mx-auto">
            <nav class="flex justify-between text-white w-screen navbarStyle">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="logo text-3xl font-bold font-heading" href="index.html"> Samzi. </a>

                <ul class="hidden md:flex px4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="navChoix flex items-center" href="/landing"><ion-icon name="home"></ion-icon>Home</a></li>
                    <li><a class="navChoix flex items-center" href="/signup"><ion-icon name="copy"></ion-icon> sign up</a></li>
                    <li><a class="navChoix flex items-center" href="/items"><ion-icon name="cart"></ion-icon> Products</a></li>
                    <li><a class="navChoix flex items-center" href="#foot"><ion-icon name="mail"></ion-icon> Contact Us</a></li>
                    </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 ">
                <a class="" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 006.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
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

    <div class="container mt-5">
        <form action="<?php echo e(url('/set_category')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="categorySelect">Select Category:</label>
                <select name="category" id="categorySelect" class="form-control">
                    <option value="All Category" <?php echo e($category == 'All Category' ? 'selected' : ''); ?>>All Category</option>
                    <option value="Gaming Console" <?php echo e($category == 'Gaming Console' ? 'selected' : ''); ?>>Gaming Console</option>
                    <option value="Smartphone" <?php echo e($category == 'Smartphone' ? 'selected' : ''); ?>>Smartphone</option>
                    <option value="Laptops" <?php echo e($category == 'Laptops' ? 'selected' : ''); ?>>Laptops</option>
                    <option value="Watch" <?php echo e($category == 'Watch' ? 'selected' : ''); ?>>Watch</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

        <div class="mt-5">
        <h2 class="OPTitle text-center display-5 fw-bold mb-3" style="margin-top:50px;"><span>Our </span> Products</h2>
            <div class="products-grid">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-card">
                        <div class="card">
                            <div class="position-relative overflow-hidden d-block bg-light">
                                <img class="w-100 img-fluid" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->nomProduit); ?>">
                            </div>
                            <div class="card-body text-center">
                                <p><?php echo e($product->nomProduit); ?></p>
                                <p>$<?php echo e($product->Prix); ?></p>
                                <a href="#" class="btn Buybtn btn-secondary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div><script src="\storage\static\js\vendor.bundle.js"></script>
    <script src="\storage\static\js\theme.bundle.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
</body>
</html>
<?php /**PATH C:\Users\HP\OneDrive\Bureau\projet\projetelbennaylaravel\samzi\resources\views/Products/items.blade.php ENDPATH**/ ?>
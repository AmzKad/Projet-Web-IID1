
<?php $__env->startSection('mainContent'); ?>
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
          <form method="POST" action="login">
            <?php echo csrf_field(); ?>
            <div class="form-group" style="margin-top:40px" >
              <label for="email">Email address</label>
              <input type="email" class="form-control marg" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" style="width: 400px; ">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="width: 400px; ">
            </div>
            <button type="submit" class="btn btn-block" style="width:400px;margin-top:40px; margin-left:80px;" >Login</button>
          </form>
          <p class="mt-3 text-center">Don't have an account? <a href="/signup">Register here</a></p>
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
</body>
</html>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php echo $__env->make('products.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/landing/login.blade.php ENDPATH**/ ?>
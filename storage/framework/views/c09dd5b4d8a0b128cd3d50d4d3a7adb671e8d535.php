
<?php $__env->startSection('mainContent'); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
	<!-- Ajout de l'espace pour l'image insérée -->
	

	<!-- Modification du formulaire pour inclure le prénom et le nom sur la même ligne -->
	<div class="login-container">
		
		<h2 class="text-center mb-4" style="font-weight:bold;font-size:40px; ">Sign Up Form</h2>
	<form class="form-horizontal" method="post" action="client">
		<?php echo csrf_field(); ?>
		<fieldset>
        <legend></legend>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="firstname" name="first_name" placeholder="Enter first name">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name"name="last_name" placeholder="Enter last name">
                </div>
              </div>
            </div>
            <!-- Reste des champs du formulaire ici -->
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-row">
              <div class="col">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <!-- <div class="col">
                <div class="form-group">
                  <label for="id">id</label>
                  <input type="password" class="form-control" id="id" name="id" placeholder="id">
                </div>
              </div> -->
            </div>
           
            <div class="form-group">
              <label for="delivery_address">Delivery Address</label>
              <textarea class="form-control" id="delivery_address" name="delivery_address" rows="1" placeholder="Enter delivery address"></textarea>
            </div>
           <button type="submit" class="btn btn-block mt-4">Submit</button>
           </fieldset>
	    </form>
			<p class="mt-3 text-center" style="margin-top:30px;margin-bottom:20px;font-size:20px;font-weight:bold;">Already have an account?<a href="/login">Login here</a></p>
          <div class="text-center" style="margin-top:20px;margin-bottom:30px;">
            <p>Or Sign Up with</p>
            <a href="#" class="social-icon text-primary"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon text-danger"><i class="fab fa-google"></i></a>
            <a href="#" class="social-icon text-info"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
        
		<?php if($errors->any()): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		
		

<?php $__env->stopSection(); ?>  
<?php echo $__env->make('products.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/Products/client.blade.php ENDPATH**/ ?>
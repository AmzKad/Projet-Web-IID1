<?php $__env->startSection('title'); ?>
Create a new product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
	<h2>Create product</h2>
	<form class="form-horizontal" method="post" action="products">
		<?php echo csrf_field(); ?>
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="numeroProduit">numeroProduit</label>  
			  <div class="col-md-4">
			  <input id="numeroProduit" name="numeroProduit" type="text" placeholder="Enter numeroProduit" class="form-control input-md">
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nomProduit">nomProduit</label>  
			  <div class="col-md-4">
			  <input id="nomProduit" name="nomProduit" type="text" placeholder="Enter nomProduit" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="quantite">quantite</label>  
			  <div class="col-md-4">
			  <input id="quantite" name="quantite" type="text" placeholder="Enter quantite" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Prix">Prix</label>  
			  <div class="col-md-4">
			  <input id="Prix" name="Prix" type="text" placeholder="Enter Prix " class="form-control input-md">
			    
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="updated_at">updated_at</label>  
			  <div class="col-md-4">
			  <input id="updated_at" name="updated_at" type="text" placeholder="Enter updated_at " class="form-control input-md">
			    
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="created_at">created_at</label>  
			  <div class="col-md-4">
			  <input id="created_at" name="created_at" type="text" placeholder="Enter created_at " class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>
		
			</fieldset>
		</form>

		<?php if($errors->any()): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		
		<div>
			<a href="/product">Show products</a>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/Products/create.blade.php ENDPATH**/ ?>
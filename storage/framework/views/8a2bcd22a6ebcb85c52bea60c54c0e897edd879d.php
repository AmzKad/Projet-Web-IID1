
<?php $__env->startSection('mainContent'); ?>
<h1>Show single  product</h1>
	<div >
		<h1><?php echo e($product->numeroProduit); ?></h1>
	</div>
	<p>
		<strong><?php echo e($product->nomProduit); ?></strong>
	</p>
  <p><strong><?php echo e($product->Prix); ?></strong></p>
	<a href="<?php echo e($product->numeroProduit); ?>/edit">Edit product</a>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('Products.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/Products/singleproduct.blade.php ENDPATH**/ ?>
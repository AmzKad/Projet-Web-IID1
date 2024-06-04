
<?php $__env->startSection('mainContent'); ?>
  <h1>show product</h1>
  <table class="table table-striped">
    <thread>
        <tr>
          <th>Name</th>
        <tr>
    </thread>
    <tbody>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><a href="show/<?php echo e($product->numeroProduit); ?>"><?php echo e($product); ?></a></td>
        </tr>
    </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('Products.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet bennay\projetelbennaylaravel\samzi\resources\views/products/show.blade.php ENDPATH**/ ?>
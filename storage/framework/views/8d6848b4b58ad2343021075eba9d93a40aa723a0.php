

<?php $__env->startPush('title'); ?>Store List <?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h3>Store List</h3>
		  </div>
		  <div class="col-sm-6 text-right mt-2">
			<div class="card-tools">
				<a href="<?php echo e(route('store.create')); ?>" class="btn btn-primary">Add New</a>
			</div>
		  </div>
		</div>

		<div class="card card-outline card-primary">
			<div class="card-header">
				<h3 class="card-title">Store List</h3>
			</div>		 
			<div class="card-body">				
				<table id="stores-tbl" class="table dt-responsive table-striped nowrap"  style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>No of Products</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			 </div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
	<?php if(session('message')): ?>
		<script>
			window.setTimeout(function(){
				Swal.fire({
				  "icon": "<?php echo e(session('message')['icon']); ?>",
				  "title": "<?php echo e(session('message')['title']); ?>",
				  "text": "<?php echo e(session('message')['text']); ?>",
				  "confirmButtonColor": "#174891",
				});
			},0);
		</script>
	<?php endif; ?>	
	<script src="<?php echo e(asset('js/admin/store/index.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/store/index.blade.php ENDPATH**/ ?>
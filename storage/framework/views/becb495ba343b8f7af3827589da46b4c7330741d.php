

<?php $__env->startPush('title'); ?>Add Store <?php $__env->stopPush(); ?>

<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">		
			<div class="col-sm-6">
				<h3>Add New Store</h3>
			</div>
			<div class="col-sm-6 text-right mt-2">
				<div class="card-tools">
					<a href="<?php echo e(route('store.list')); ?>" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
		<div class="card card-outline card-primary">
			<form action="<?php echo e(route('store.store')); ?>" id="storeFrm" name="storeFrm" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>			
				<div class="card-header">
					<h3 class="card-title">Create New Store</h3>
				</div>		 
				<?php echo $__env->make('admin.store.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>				
				<div class="card-footer">					
					<button type="button" id="btn-form-submit" onclick="Create.formsubmited();" class="btn btn-primary">Save</button>
					<a href="<?php echo e(route('store.list')); ?>" class="btn btn-danger">Cancel</a>
				</div>
			</form>
			<?php echo $__env->make('admin.common.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
	<script src="<?php echo e(asset('js/admin/store/create.js')); ?>"></script>
	<?php echo $__env->make("admin.common.googleAutocompleteAddress", ["frmId" => "storeFrm", "addressBoxId" => "address"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/store/create.blade.php ENDPATH**/ ?>
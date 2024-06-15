

<?php $__env->startPush('page_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/public/aboutus.css')); ?>" type="text/css"/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<main>
		<div id="about-us">
			<?php if(!empty($cmsObj->description)): ?>
				<?php echo filterEditorContent($cmsObj->description); ?>

			<?php endif; ?>
		</div>
	</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/about_us.blade.php ENDPATH**/ ?>
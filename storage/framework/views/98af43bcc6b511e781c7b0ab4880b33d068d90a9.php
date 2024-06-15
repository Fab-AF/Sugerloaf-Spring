<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('app.name')); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="shortcut icon" href="<?php echo e(url('/')); ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo e(asset('css/public/global.css')); ?>" type="text/css"/>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />	
    <?php echo $__env->yieldContent('third_party_stylesheets'); ?>
    <?php echo $__env->yieldPushContent('page_css'); ?>
</head>

<body>
	<div class="maincontainer">
		<?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="<?php echo e(asset('js/public/main.js')); ?>"></script>
	<script src="<?php echo e(asset('js/public/global.js')); ?>"></script>
	<?php echo $__env->yieldContent('third_party_scripts'); ?>
	<?php echo $__env->yieldPushContent('page_scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Sugerloaf-Spring\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>
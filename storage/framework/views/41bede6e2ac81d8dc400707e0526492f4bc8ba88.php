<?php $__env->startPush('title'); ?> <?php echo e(config('app.name')); ?> Dashboard <?php $__env->stopPush(); ?>

<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">			
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo e($data['totalCmsCnt'] ?? 0); ?></h3>
							<p>Total CMS Pages</p>
						</div>
						<div class="icon">
							<i class="fas fa-book"></i>
						</div>
						<a href="<?php echo e(route('cms.list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?php echo e($data['publishedCmsCnt'] ?? 0); ?></h3>
							<p>Published CMS Pages</p>
						</div>
						<div class="icon">
							<i class="fas fa-check"></i>
						</div>
						<a href="<?php echo e(route('cms.list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>				
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?php echo e($data['blockedCnt'] ?? 0); ?></h3>
							<p>Blocked CMS Pages</p>
						</div>
						<div class="icon">
							<i class="fas fa-unlink"></i>
						</div>
						<a href="<?php echo e(route('cms.list')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<span>Last updated:</span>
							<h5><?php echo e(Auth::user()->updated_at->format('d M, Y')); ?></h5>
							<p>My Profile</p>
						</div>
						<div class="icon">
							<i class="fas fa-user"></i>
						</div>
						<a href="<?php echo e(route('admin.profile')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sugerloaf-Spring\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>
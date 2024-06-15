<li class="nav-item">
    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php if(in_array(Request::route()->getName(),['home','dashboard.list'])): ?> active <?php endif; ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
	<a href="<?php echo e(route('admin.profile')); ?>" class="nav-link <?php if(in_array(Request::route()->getName(),['admin.profile'])): ?> active <?php endif; ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>My Profile</p>
    </a>
</li>

<li class="nav-item">
	<a href="<?php echo e(route('cms.list')); ?>" class="nav-link <?php if(in_array(Request::route()->getName(),['cms.list','cms.create','cms.edit'])): ?> active <?php endif; ?>">
        <i class="nav-icon fas fa-book"></i>
        <p>Pages</p>
    </a>
</li>
<?php /**PATH C:\xampp\htdocs\listingpix_backend\resources\views/layouts/menu.blade.php ENDPATH**/ ?>
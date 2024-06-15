<header>
<nav class="navbar navbar-expand-lg bgcolor">
  <div class="container">
	<a class="w-min" href="/"
	  ><img class="logo" src="/images/logo.svg" alt="<?php echo e(config('app.name')); ?>"
	/></a>
	<button
	  class="navbar-toggler hamburgurmenu"
	  type="button"
	  data-bs-toggle="collapse"
	  data-bs-target="#navbarSupportedContent"
	  aria-controls="navbarSupportedContent"
	  aria-expanded="false"
	  aria-label="Toggle navigation"
	>
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div
	  class="collapse navbar-collapse menulinkbuttonparent"
	  id="navbarSupportedContent"
	>
	  <ul class="navbar-nav mx-auto mb-2 mb-lg-0 menulinkparent">
		<li class="nav-item">
		  <a
			class="nav-link <?php if(Route::currentRouteName() == 'home'): ?> active <?php endif; ?>"
			aria-current="page"
			href="/"
			>Home</a
		  >
		</li>

		<li class="nav-item">
		  <a class="nav-link <?php if(Route::currentRouteName() == 'store-locator'): ?> active <?php endif; ?>" href="<?php echo e(route('store-locator')); ?>">Store locator</a>
		</li>		
		<li class="nav-item dropdown">
		  <a
			class="nav-link dropdown-toggle <?php if(in_array(Route::currentRouteName(),['nectr-beverages','sugerloaf-springs'])): ?> active <?php endif; ?>"
			href="javascript:void(0);"
			role="button"
			data-bs-toggle="dropdown"
			aria-expanded="false"
		  >
			Products
		  </a>
		  <ul class="dropdown-menu">
			<li>
			  <a
				class="dropdown-item"
				href="<?php echo e(route('nectr-beverages')); ?>"
				>Nectr</a
			  >
			</li>
			<li>
			  <a
				class="dropdown-item"
				href="<?php echo e(route('sugerloaf-springs')); ?>"
				>Sugerloaf Springs</a
			  >
			</li>
		  </ul>
		</li>
		<li class="nav-item">
		  <a class="nav-link <?php if(Route::currentRouteName() == 'about-us'): ?> active <?php endif; ?>" href="<?php echo e(route('about-us')); ?>">About us</a>
		</li>
	  </ul>
	  <a href="<?php echo e(route('contact-us')); ?>">
		<button class="btn btn-success" type="button">
		  Contact us
		</button></a
	  >
	</div>
  </div>
</nav>
</header><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/layouts/front/header.blade.php ENDPATH**/ ?>
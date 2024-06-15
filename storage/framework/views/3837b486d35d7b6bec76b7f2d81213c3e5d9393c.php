<?php if ($__env->exists('admin.editor.extra.'.$type)) echo $__env->make('admin.editor.extra.'.$type, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="component-properties">
  <ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
	 <li class="nav-item content-tab">
		<a class="nav-link active" data-bs-toggle="tab" href="#content-tab" role="tab" aria-controls="components" aria-selected="true">
		   <i class="la la-lg la-sliders-h"></i> 
		   <div><span>Content</span></div>
		</a>
	 </li>
	 <li class="nav-item style-tab">
		<a class="nav-link" data-bs-toggle="tab" href="#style-tab" role="tab" aria-controls="blocks" aria-selected="false">
		   <i class="la la-lg la-paint-brush"></i> 
		   <div><span>Style</span></div>
		</a>
	 </li>
	 <li class="nav-item advanced-tab">
		<a class="nav-link" data-bs-toggle="tab" href="#advanced-tab" role="tab" aria-controls="blocks" aria-selected="false">
		   <i class="la la-lg la-tools"></i> 
		   <div><span>Advanced</span></div>
		</a>
	 </li>
  </ul>
  <div class="tab-content">
	 <div class="tab-pane fade show active" id="content-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
		<div class="alert alert-dismissible fade show alert-light m-3" role="alert" style="">		  
		   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>		  
		   <strong>No selected element!</strong><br> Click on an element to edit.		
		</div>
	 </div>
	 <div class="tab-pane fade show" id="style-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
	 </div>
	 <div class="tab-pane fade show" id="advanced-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
	 </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/editor/right/index.blade.php ENDPATH**/ ?>
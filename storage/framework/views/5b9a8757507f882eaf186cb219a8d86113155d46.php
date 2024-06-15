<div class="custome-properties" style="overflow-y: auto; max-height:350px;">
	<label class="header" onClick="$('#post_content_info').toggle();adjustCustomeHeight($('.component-properties >.tab-content'))"><span>Page Info</span><div class="header-arrow"></div></label>
	<div class="m-2 row" id="post_content_info">
		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Title</label>
			<div class="input">
				<input id="custome-assign-title" type="text" value="<?php echo e($page->title); ?>" class="form-control">
			</div>
		</div>		
		
		<div class="mb-3 col-sm-12">
			<label class="form-label" for="input-model">Status</label>
			<div class="input">
				<select class="form-select" id="custome-assign-status">
					<?php $__currentLoopData = config('constants.publish'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($key); ?>" <?php if($page->status == $key): ?> selected <?php endif; ?>><?php echo e($val); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
				</select>
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_title">SEO Title</label>
			<div class="input">
				<input id="seo_title" name="seo_title" type="text" value="<?php echo e($page->seo_title ?? ''); ?>" class="form-control" placeholder="Enter SEO Title">
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_keyword">SEO Keywords</label>
			<div class="input">
				<input id="seo_keyword" name="seo_keyword" type="text" value="<?php echo e($page->seo_keyword ?? ''); ?>" class="form-control" placeholder="Enter SEO Keywords">
			</div>
		</div>

		<div class="mb-3 col-sm-12">
			<label class="form-label" for="seo_description">SEO Description</label>
			<textarea class="form-control" row="5" style="height:80px;" id="seo_description" name="seo_description" placeholder="Enter SEO Keywords"><?php echo e($page->seo_description ?? ''); ?></textarea>
		</div>
	</div>
</div><?php /**PATH C:\xampp\htdocs\Sugerloaf-Spring\resources\views/admin/editor/extra/page.blade.php ENDPATH**/ ?>
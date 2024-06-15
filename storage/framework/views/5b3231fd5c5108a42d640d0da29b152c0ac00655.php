<div class="modal fade" id="newpage-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
	  <div class="modal-content">
		 <div class="modal-header">
			<p class="modal-title"><i class="la la-lg la-save"></i>Create New Page</p>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
		 </div>
		 <form action="<?php echo e(route('cms.create')); ?>" method="post">
			<?php echo csrf_field(); ?>
			 <div class="modal-body">
				<label>Enter Page Name <span class="text-danger">*</span></label>
				<input type="text" name="newpage" class="form-control" required/>
			 </div>
			 <div class="modal-footer">
				  <button type="submit" name="submit "class="btn btn-primary">Save</button>
				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 </div>
		 </form>
	  </div>
   </div>
</div><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/cms/createpage.blade.php ENDPATH**/ ?>
<div class="card-body">				
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Store Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="name" name="name" value="<?php echo e($obj->name ?? ''); ?>" placeholder="Store full name" required maxlength="191"/>
				<div class="error"><?php echo e($errors->first('name')); ?></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo e($obj->email??''); ?>" placeholder="Enter Email" required>
				<?php echo $errors->first('email','<span class="text-danger">:message</span>'); ?>

			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Phone <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($obj->phone ?? ''); ?>" placeholder="Ex: 123-456-7890" onkeyup="Global.autoPhoneNoFormat(this.id);" required maxlength="12">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Address <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="address" name="address" value="<?php echo e($obj->address ?? ''); ?>" placeholder="Type and select from auto-suggestion" required/>
				<div class="error"><?php echo e($errors->first('address')); ?></div>
				<input type="hidden" name="latitude" id="latitude" value="<?php echo e($obj->latitude ?? ''); ?>" />
				<input type="hidden" name="longitude" id="longitude" value="<?php echo e($obj->longitude ?? ''); ?>" />
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label>No of Products Available</label>
				<input type="number" name="available_products" id="available_products" class="form-control" value="<?php echo e($obj->available_products ?? ''); ?>" min="1" placeholder="EX: 25">
				<div class="error"><?php echo e($errors->first('available_products')); ?></div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label>Status <span class="text-danger">*</span></label>
				<select class="form-control" id="status" name="status">
					<?php $__currentLoopData = config('constants.status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($key); ?>" <?php if(isset($obj) && $obj->status == $key): ?> selected <?php endif; ?>><?php echo e($val); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
				<div class="error"><?php echo e($errors->first('status')); ?></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Store Photo</label>
				<ul class="users-list">
					<li>
						<img src='<?php echo e($obj->store_photo??"/images/default_store.webp"); ?>' alt="Photo Preview" id="photo-preview"/>
					</li>
				</ul>
				<div class="input-group">
					<div class="form_link">
						<a href="javascript:void(0);" onclick="$('#photo').trigger('click');"><i class="icn icon-upload"></i>Upload Photo</a>
						<input type="file" name="photo" id="photo" placeholder="Upload Photo" onchange="Create.loadPhoto(event)" style="display:none;"/>
					</div>								
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/store/form.blade.php ENDPATH**/ ?>
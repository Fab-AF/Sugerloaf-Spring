<div class="card-body">				
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Store Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="name" name="name" value="{{$obj->name ?? ''}}" placeholder="Store full name" required maxlength="191"/>
				<div class="error">{{ $errors->first('name') }}</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control" id="email" name="email" value="{{$obj->email??''}}" placeholder="Enter Email" required>
				{!! $errors->first('email','<span class="text-danger">:message</span>') !!}
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Phone <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="phone" name="phone" value="{{$obj->phone ?? ''}}" placeholder="Ex: 123-456-7890" onkeyup="Global.autoPhoneNoFormat(this.id);" required maxlength="12">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Address <span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="address" name="address" value="{{$obj->address ?? ''}}" placeholder="Type and select from auto-suggestion" required/>
				<div class="error">{{ $errors->first('address') }}</div>
				<input type="hidden" name="latitude" id="latitude" value="{{$obj->latitude ?? ''}}" />
				<input type="hidden" name="longitude" id="longitude" value="{{$obj->longitude ?? ''}}" />
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label>No of Products Available</label>
				<input type="number" name="available_products" id="available_products" class="form-control" value="{{$obj->available_products ?? ''}}" min="1" placeholder="EX: 25">
				<div class="error">{{ $errors->first('available_products') }}</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label>Status <span class="text-danger">*</span></label>
				<select class="form-control" id="status" name="status">
					@foreach(config('constants.status') as $key => $val)
						<option value="{{$key}}" @if(isset($obj) && $obj->status == $key) selected @endif>{{$val}}</option>
					@endforeach
				</select>
				<div class="error">{{ $errors->first('status') }}</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label>Store Photo</label>
				<ul class="users-list">
					<li>
						<img src='{{$obj->store_photo??"/images/default_store.webp"}}' alt="Photo Preview" id="photo-preview"/>
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

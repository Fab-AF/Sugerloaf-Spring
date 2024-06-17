@extends('layouts.app')

@push('title')My Profile @endpush

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3>My Profile</h3>
			</div>
			<div class="col-sm-6 text-right mt-2">
				<div class="card-tools">
					<a href="{{route('home')}}" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
		<div class="card card-outline card-primary">
			<form action="{{route('admin.updateprofile', $userObj->id)}}" id="edit-users" name="edit-users" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="card-header">
					<h3 class="card-title">Edit Profile</h3>
				</div>		 
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 mt-2">
							<h5>Login Information</h5>
							<hr/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="email" name="email" value="{{$userObj->email}}" placeholder="Enter Email" required>
								<small class="form-text text-muted">This is your username to log into the system</small>
								{!! $errors->first('email','<span class="text-danger">:message</span>') !!}
							</div>
						</div>
						<div class="col-sm-4">
						  <div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" id="password" name="login_password" value="" placeholder="Enter New Password">
						  </div>
						</div>
						<div class="col-sm-4">
						  <div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" placeholder="Enter Password Again">
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 mt-2">
							<h5>User Information</h5>
							<hr/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label>Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="name" name="name" value="{{$userObj->name}}" placeholder="Enter First Name" required>
							</div>
						</div>						
						<div class="col-sm-3">
							<div class="form-group">
								<label>Phone <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="phone" name="phone" value="{{$userObj->phone}}" placeholder="Enter Phone" required>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label>Profile Image</label>
								<ul class="users-list">
									<li>
										<img src='{{$userObj->user_photo}}' alt="Photo Preview" id="photo-preview"/>
									</li>
								</ul>
								<div class="input-group">
									<div class="form_link">
										<a href="javascript:void(0);" onclick="$('#photo').trigger('click');"><i class="icn icon-upload"></i>Upload Photo</a>
										<input type="file" name="photo" id="photo" placeholder="Upload Photo" onchange="Profile.loadPhoto(event)" style="display:none;"/>
									</div>								
								</div>
							</div>
						</div>

					</div>
				 </div>
				 <div class="card-footer">
					<button type="button" id="btn-form-submit" onclick="Profile.formsubmited();" class="btn btn-primary">Save</button>
					<a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
			@include("admin.common.loader")
		</div>
	</div>
</div>
@endsection
@push('page_scripts')
	@if(session('message'))
		<script>
			Swal.fire({
			  "icon": "{{session('message')['icon']}}",
			  "title": "{{session('message')['title']}}",
			  "text": "{{session('message')['text']}}",
			  "confirmButtonColor": "#174891",
			});
		</script>
	@endif	
	<script src="{{ asset('js/admin/profile.js') }}"></script>
@endpush
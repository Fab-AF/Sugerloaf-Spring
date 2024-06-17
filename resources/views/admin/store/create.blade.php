@extends('layouts.app')

@push('title')Add Store @endpush

@push('page_css')
@endpush

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">		
			<div class="col-sm-6">
				<h3>Add New Store</h3>
			</div>
			<div class="col-sm-6 text-right mt-2">
				<div class="card-tools">
					<a href="{{route('store.list')}}" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
		<div class="card card-outline card-primary">
			<form action="{{route('store.store')}}" id="storeFrm" name="storeFrm" method="post" enctype="multipart/form-data">
				@csrf			
				<div class="card-header">
					<h3 class="card-title">Create New Store</h3>
				</div>		 
				@include('admin.store.form')				
				<div class="card-footer">					
					<button type="button" id="btn-form-submit" onclick="Create.formsubmited();" class="btn btn-primary">Save</button>
					<a href="{{route('store.list')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
			@include('admin.common.loader')
		</div>
	</div>
</div>
@endsection

@push('page_scripts')
	<script src="{{ asset('js/admin/store/create.js') }}"></script>
	@include("admin.common.googleAutocompleteAddress", ["frmId" => "storeFrm", "addressBoxId" => "address"])
@endpush
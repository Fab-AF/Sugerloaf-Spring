@extends('layouts.app')

@push('title')CMS Pages @endpush

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h3>CMS Pages</h3>
		  </div>
		  <div class="col-sm-6 text-right mt-2">
			<div class="card-tools">
				<a href="javascript:void(0);" data-toggle="modal" data-target="#newpage-modal" class="btn btn-primary">Add New</a>
			</div>
		  </div>
		</div>

		<div class="card card-outline card-primary">
			<div class="card-header">
				<h3 class="card-title">CMS Contents</h3>
			</div>		 
			<div class="card-body">				
				<table id="cms-tbl" class="table dt-responsive table-striped nowrap"  style="width:100%">
					<thead>
						<tr>
							<th>Title</th>
							<th>Slug</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			 </div>
		</div>
	</div>
</div>
@include('admin.cms.createpage')
@endsection
@push('page_scripts')
	@if(session('message'))
		<script>
			window.setTimeout(function(){
				Swal.fire({
				  "icon": "{{session('message')['icon']}}",
				  "title": "{{session('message')['title']}}",
				  "text": "{{session('message')['text']}}",
				  "confirmButtonColor": "#174891",
				});
			},0);
		</script>
	@endif	
	<script src="{{ asset('js/admin/cms/index.js') }}"></script>
@endpush
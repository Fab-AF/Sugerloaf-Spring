@extends('layouts.front.app')

@push('page_css')
<link rel="stylesheet" href="{{ asset('css/public/category.css') }}" type="text/css"/>
@endpush

@section('content')
	<main>
		<div class="categorypagecontainer container">
			<div class="blackheadingfont" id="beverageTitle" data-template="Sugerloaf Spring {flag} Beverages">Sugerloaf Spring Medical Beverages</div>
			<div class="medicalBtn">
				<button class="btn btn-outline-success medicalbutton selected" id="medicalBtn" onclick="showHideBeverages('medical')">
					Medical
				</button>
				<button class="btn btn-outline-success medicalbutton" id="recreationalBtn" onclick="showHideBeverages('recreational')" >
					Recreational
				</button>
			</div>
			<div id="medicalContent" class="productcatcardcontainer">
				@if(!empty($medicalObj->description))
					{!! filterEditorContent($medicalObj->description) !!}
				@endif
			</div>
			<div id="recreationalContent" class="productcatcardcontainer" style="display: none">
				@if(!empty($recreationalObj->description))
					{!! filterEditorContent($recreationalObj->description) !!}
				@endif
			</div>
		</div>
	</main>
@endsection

@push('page_scripts')
<script src="{{ asset('js/public/product_beverages.js') }}"></script>
@endpush
@extends('layouts.front.app')

@push('page_css')
<link rel="stylesheet" href="{{ asset('css/public/aboutus.css') }}" type="text/css"/>
@endpush

@section('content')
	<main>
		<div id="about-us">
			@if(!empty($cmsObj->description))
				{!! filterEditorContent($cmsObj->description) !!}
			@endif
		</div>
	</main>
@endsection

@push('page_scripts')
@endpush
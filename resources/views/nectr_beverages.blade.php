@extends('layouts.front.app')

@push('page_css')
<link rel="stylesheet" href="{{ asset('css/public/category.css') }}" type="text/css" />
@endpush

@section('content')
<main>
    <div class="categorypagecontainer container">
        <div class="blackheadingfont" id="beverageTitle" data-template="Nectr {flag} Beverages">Nectr Medical Beverages
        </div>
        <div class="categorybutton">
            <div class="categorybutton">
                <button id="medicalBtn" class="btn btn-outline-success medicalbutton selected"
                    onclick="showHideBeverages('medical')">
                    Medical
                </button>
                <button id="recreationalBtn" class="btn btn-outline-success medicalbutton"
                    onclick="showHideBeverages('recreational')">
                    Recreational
                </button>
            </div>
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
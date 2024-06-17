<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&sensor=false&libraries=places&language=en-AU"></script>
<script src="{{ asset('js/admin/autocomplete.js') }}"></script>
<script> autocompleteInit("{{$frmId}}","{{$addressBoxId}}"); </script>
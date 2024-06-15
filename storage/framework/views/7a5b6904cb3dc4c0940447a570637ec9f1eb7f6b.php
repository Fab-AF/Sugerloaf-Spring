

<?php $__env->startPush('page_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/public/storelocator.css')); ?>" type="text/css" />
<?php $__env->stopPush(); ?>
<style>
.gm-style-iw-d {
    padding: bottom 1rem !important;
}
</style>

<?php $__env->startSection('content'); ?>
<main>
    <div class="storelocatorcontainer">
        <div class="lfooterrow1 container">
            <p class="blackheadingfont m-0">Find your nearest store locator</p>

            <form action="javascript:void(0);" id="storeSrcFrm" name="storeSrcFrm" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name='page' id='page' value="1" />
                <input type="hidden" name='limit' id='limit' value="25" />
                <input type="hidden" name='latitude' id='latitude' value="" />
                <input type="hidden" name='longitude' id='longitude' value="" />
                <div class="inpdropbutton">
                    <input type="text" style="padding: 0.7rem 1rem;
    border: 1px solid #c9c9c9;
    border-radius: 0.3rem;
    outline: none;
    width: 100%;" class="locatorinput" name="location" id="location" placeholder="Enter your location" />

                    <select class="dropdownstorelocator" name="mile" id="mile">
                        <option value="">Choose Mile</option>
                        <option value="1">1 Mile</option>
                        <option value="2">2 Miles</option>
                        <option value="3">3 Miles</option>
                        <option value="4">4 Miles</option>
                        <option value="5">5 Miles</option>
                        <option value="6">6 Miles</option>
                        <option value="7">7 Miles</option>
                        <option value="8">8 Miles</option>
                        <option value="9">9 Miles</option>
                        <option value="10">10 Miles</option>
                        <option value="15">15 Miles</option>
                        <option value="20">20 Miles</option>
                        <option value="25">25 Miles</option>
                        <option value="30">30 Miles</option>
                        <option value="40">40 Miles</option>
                        <option value="50">50 Miles</option>
                    </select><button class="findnow" onclick="getPageData(1);">Find
                        now</button>
                </div>
            </form>

            <div class="mapcontainer container w-100">
				<div class="loader text-center" id="loader" style="display:none;"></div>
                <div id="store-result" class="leftaddress"></div>
                <div id="mapDiv" class="map" data-vssar="<?php echo e(base64_encode(config('app.google_api_key'))); ?>"
                    style="height:500px;"></div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
<?php echo $__env->make("googleAutocompleteAddress", ["frmId" => "storeSrcFrm", "addressBoxId" => "location"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/public/storelocator.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sugerloaf-Spring\resources\views/store_locator.blade.php ENDPATH**/ ?>
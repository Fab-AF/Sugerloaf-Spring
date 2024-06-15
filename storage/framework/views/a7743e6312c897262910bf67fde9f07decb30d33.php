

<?php $__env->startPush('page_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/public/category.css')); ?>" type="text/css" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
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
            <?php if(!empty($medicalObj->description)): ?>
            <?php echo filterEditorContent($medicalObj->description); ?>

            <?php endif; ?>
        </div>
        <div id="recreationalContent" class="productcatcardcontainer" style="display: none">
            <?php if(!empty($recreationalObj->description)): ?>
            <?php echo filterEditorContent($recreationalObj->description); ?>

            <?php endif; ?>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
<script src="<?php echo e(asset('js/public/product_beverages.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/nectr_beverages.blade.php ENDPATH**/ ?>
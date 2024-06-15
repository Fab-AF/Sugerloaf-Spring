

<?php $__env->startPush('page_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/public/contactus.css')); ?>" type="text/css" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<main>
    <div class="contactuscontainer">
        <div class="contactcontent container position-relative">
            <img src="/images/dottedarrow.svg" class="dottedarrow" alt="" />
            <div class="contactleft" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
                <div class="blackheadingfont text-start">
                    To hear from our friends
                </div>
                <div class="subheadingfont">
                    Thank you for getting in touch! Kindly. Fill the form, have a
                    great day!
                </div>
            </div>

            <form id="contactUsFrm" method="post" action="javascript:void(0);">
                <?php echo csrf_field(); ?>
                <input type='hidden' name='fromPage' id='fromPage' value="contact-us" />
                <div class="contactform" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">
                    <div class="inputparent">
                        <div class="d-flex flex-column errorparent ">
                            <input class="inputtext" type="text" placeholder="Your Name" id="name" name="name"
                                required />
                        </div>
                        <div class="d-flex flex-column errorparent "> <input class="inputtext" type="email"
                                placeholder="Your Email" id="email" name="email" required />
                        </div>
                    </div>
                    <div class="inputparent">
                        <div class="d-flex flex-column errorparent ">
                            <input class="inputtext" type="text" id="phone" name="phone" placeholder="Ex: 123-456-7890"
                                onkeyup="autoPhoneNoFormat(this.id);" maxlength="12" required />
                        </div>
                        <div class="d-flex flex-column errorparent ">
                            <input class="inputtext" type="text" placeholder="Country " id="country" name="country"
                                required />
                        </div>
                    </div>
                    <div class="inputparent">
                        <div class="d-flex flex-column errorparent ">
                            <input class="inputtext" type="text" placeholder="Company Name" id="company_name"
                                name="company_name" required />
                        </div>
                        <div class="d-flex flex-column errorparent ">
                            <input class="inputtext" type="text" placeholder="Interested in" id="interested_in"
                                name="interested_in" required />
                        </div>
                    </div>
                    <div class="d-flex flex-column errorparent ">
                        <input class="inputtext w-100" type="text" placeholder="Message" id="message" name="message"
                            required />
                    </div>
                    <div class="loader text-center" id="loader" style="display:none;"></div>
                    <button class="btn btn-success mt-4 successbutton frm-btn" id="submitContactBtn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('third_party_scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/contact_us.blade.php ENDPATH**/ ?>
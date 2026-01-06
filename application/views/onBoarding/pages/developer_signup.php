



<!-- Signup FORM -->
<form method="POST" action="register.php" class="contact-form">

    <!-- USER ID -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_bottom">
        <label>Register ID <sup>*</sup></label>
        <input type="text" name="user_id" class="bg-transparent w-100 p-1 text-white" placeholder="Enter your user id"
            style="border-radius:5px;" required>
    </div>

    <!-- EMAIL -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_right">
        <label>Email <sup>*</sup></label>
        <input type="email" name="email" class="bg-transparent w-100 p-1 text-white" placeholder="Enter your email"
            style="border-radius:5px;" required>
    </div>

    <!-- PASSWORD -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_left">
        <label>Password <sup>*</sup></label>
        <input type="password" name="password" class="bg-transparent w-100 p-1 text-white"
            placeholder="Enter your password" style="border-radius:5px;" required>
    </div>

    <!-- REMEMBER + FORGOT -->
    <div class="input-group d-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center scroll-animation" data-animation="fade_from_bottom">
            <label style="margin:0;">Already have an account? </label>
        </div>

        <a href="<?= base_url('onBoarding'); ?>" class="project-btn scroll-animation"
            data-animation="fade_from_bottom">
            Login
        </a>
    </div>

    <!-- BUTTONS -->
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="input-group submit-btn-wrap">
                <a href="<?php echo base_url(); ?>" class="theme-btn w-100 scroll-animation"
                    data-animation="fade_from_left"
                    style="background:transparent;color:var(--text-color);border:1px solid #565656;">
                    Cancel
                </a>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="input-group submit-btn-wrap">
                <button type="submit" class="theme-btn w-100 scroll-animation" data-animation="fade_from_right"
                    style="background:transparent;color:var(--text-color);border:1px solid #565656;">
                    Register
                </button>
            </div>
        </div>
    </div>

</form>





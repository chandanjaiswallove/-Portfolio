<!-- Header section ui_Header  -->
<?php
$this->load->view('onBoarding/layouts/authHeader');
?>




<form method="POST" action="<?= base_url('auth/send_otp'); ?>" class="contact-form">

    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_right">
        <label>Email <sup>*</sup></label>
        <input type="email" name="email"
            class="bg-transparent w-100 p-1 text-white"
            placeholder="Enter your email"
            style="border-radius:5px;" required>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="input-group submit-btn-wrap">
                <button type="submit"
                    class="theme-btn w-100 scroll-animation"
                    data-animation="fade_from_right"
                    style="background:transparent;color:var(--text-color);border:1px solid #565656;">
                    Send OTP
                </button>
            </div>
        </div>
    </div>

</form>







<!-- Header section ui_Footer  -->
<?php
$this->load->view('onBoarding/layouts/authFooter');
?>
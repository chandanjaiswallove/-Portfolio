<main class="drake-main">


    <form method="POST" action="<?= base_url('auth/update_password'); ?>" class="contact-form">

        <div class="input-group mb-3 scroll-animation" data-animation="fade_from_left">
            <label>New Password <sup>*</sup></label>
            <input type="password" name="password" class="bg-transparent w-100 p-1 text-white"
                placeholder="New password" style="border-radius:5px;" required>
        </div>

        <div class="input-group mb-3 scroll-animation" data-animation="fade_from_right">
            <label>Confirm Password <sup>*</sup></label>
            <input type="password" name="confirm_password" class="bg-transparent w-100 p-1 text-white"
                placeholder="Confirm password" style="border-radius:5px;" required>
        </div>

        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="input-group submit-btn-wrap">
                    <button type="submit" class="theme-btn w-100 scroll-animation" data-animation="fade_from_right">
                        Update Password
                    </button>
                </div>
            </div>
        </div>

    </form>



</main>
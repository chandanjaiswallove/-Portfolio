
        <!-- signup page -->

<form method="POST" action="<?= base_url('useronWay'); ?>" class="contact-form">

    <!-- EMAIL -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_top">
        <label>Email <sup>*</sup></label>
        <input type="email" id="email" name="email" class="bg-transparent w-100 p-1 text-white rounded-end"
            placeholder="Enter your email" onkeyup="generateUserId();" required>
    </div>

    <!-- AUTO USER ID -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_right">
        <label>Register ID <sup>*</sup></label>
        <input type="text" id="user_id" name="user_id" class="bg-transparent w-100 p-1 text-white rounded-end"
            placeholder="Your register id" readonly required>
    </div>

    <!-- PASSWORD -->
    <label>Password <sup>*</sup></label>
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_left">
        <input type="password" id="password" name="password" class="form-control bg-transparent text-white"
            placeholder="Enter password" required>

        <button type="button" class="btn btn-outline-secondary rounded-end" onclick="togglePassword('password', this)">
            Show
        </button>
    </div>

    <!-- CONFIRM PASSWORD -->
    <label>Confirm Password <sup>*</sup></label>
    <div class="input-group mb-3">
        <input type="password" id="confirm_password" name="confirm_password"
            class="form-control bg-transparent text-white" placeholder="Confirm password" required>


        <button type="button" class="btn btn-outline-secondary rounded-end"
            onclick="togglePassword('confirm_password', this)">
            Show
        </button>
    </div>

    <!-- SUBMIT -->
    <button type="submit" name="submitData" class="theme-btn w-100 mb-3">
        Register
    </button>

    <!-- LOGIN REDIRECT ROW -->

    <div class="d-flex justify-content-between align-items-center">
        <small class="text-muted">
            Already registered?

        </small>

        <a href="<?= base_url('onBoarding'); ?>" class="project-btn">
            Login
        </a>
    </div>




</form>

<script>
function generateUserId() {
    const email = document.getElementById("email").value.trim();
    if (email.length > 0) {
        const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let id = "";
        for (let i = 0; i < 8; i++) {
            id += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById("user_id").value = id;
    }
}

function togglePassword(inputId, btn) {
    const input = document.getElementById(inputId);

    if (input.type === "password") {
        input.type = "text";
        btn.innerText = "Hide";
    } else {
        input.type = "password";
        btn.innerText = "Show";
    }
}
</script>
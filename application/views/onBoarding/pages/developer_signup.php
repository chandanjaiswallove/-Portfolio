


<form method="POST" action="<?= base_url('userOnBoard'); ?>" class="contact-form"
    onsubmit="return validatePasswordMatch()">


    <!-- EMAIL -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_top">
        <label>Email <sup>*</sup></label>
        <input type="email" id="email" name="email"
            class="bg-transparent w-100 p-1 text-white rounded-end"
            placeholder="Enter your email"
            onkeyup="generateUserId();checkEmailExist();"
            required>
    </div>

    <!-- AUTO USER ID -->
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_right">
        <label>Register ID <sup>*</sup></label>
        <input type="text" id="user_id" name="user_id"
            class="bg-transparent w-100 p-1 text-white rounded-end"
            placeholder="Your register id"
            readonly required>
    </div>

    <!-- PASSWORD -->
    <label>Password <sup>*</sup></label>
    <div class="input-group mb-3 scroll-animation" data-animation="fade_from_left">
        <input type="password" id="password" name="password"
            class="form-control bg-transparent text-white"
            placeholder="Enter password" required>

        <button type="button"
            class="btn btn-outline-secondary rounded-end"
            onclick="togglePassword('password', this)">
            Show
        </button>
    </div>

    <!-- CONFIRM PASSWORD -->
    <label>Confirm Password <sup>*</sup></label>
    <div class="input-group mb-1">
        <input type="password" id="confirm_password"
            class="form-control bg-transparent text-white"
            placeholder="Confirm password"
            onkeyup="checkPasswordMatch()" required>

        <button type="button"
            class="btn btn-outline-secondary rounded-end"
            onclick="togglePassword('confirm_password', this)">
            Show
        </button>
    </div>

    <small id="password_error" style="color:red;display:none;">
        Password mismatch
    </small>

    <!-- LOGIN REDIRECT ROW -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <small class="text-muted">
            Already registered?
        </small>

        <a href="<?= base_url('onBoarding'); ?>"
            class="btn btn-link p-0"
            style="text-decoration:none;">
            Login
        </a>
    </div>

    <!-- SUBMIT -->
    <button type="submit" class="theme-btn w-100">
        Register
    </button>


</form>


<script>
    function generateUserId() {
        let email = document.getElementById("email").value;
        if (email.length > 0) {
            let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            let id = "";
            for (let i = 0; i < 8; i++) {
                id += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("user_id").value = id;
        }
    }

    function togglePassword(inputId, btn) {
        let input = document.getElementById(inputId);

        if (input.type === "password") {
            input.type = "text";
            btn.innerText = "Hide";
        } else {
            input.type = "password";
            btn.innerText = "Show";
        }
    }

    function checkPasswordMatch() {
        let pass = document.getElementById("password").value;
        let confirm = document.getElementById("confirm_password").value;
        let error = document.getElementById("password_error");

        if (confirm !== "" && pass !== confirm) {
            error.style.display = "block";
            return false;
        } else {
            error.style.display = "none";
            return true;
        }
    }

    function validatePasswordMatch() {
        if (!checkPasswordMatch()) {
            alert("Password mismatch!");
            return false;
        }
        return true;
    }

    /* ===== EMAIL ALREADY REGISTERED CHECK ===== */
    function checkEmailExist() {
        let email = document.getElementById("email").value;
        if (email.length < 5) return;

        fetch("check_email.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "email=" + encodeURIComponent(email)
            })
            .then(res => res.text())
            .then(data => {
                if (data === "exists") {
                    alert("Email already registered! Redirecting to login...");
                    window.location.href = "login.php";
                }
            });
    }
</script>
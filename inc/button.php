<div class="container">
    <div class="modal-body">
        <?php if (!empty($error)) { ?>
        <script>
        window.onload = function() {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
            var modalBody = document.querySelector('#loginModal .modal-body');
            modalBody.innerHTML = '<div class="alert alert-danger">Incorrect username or password.</div>' +
                modalBody.innerHTML;
        };
        </script>
        <?php } ?>
    </div>
</div>

<div id="loginModal" class="modal fade" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input name="user_name" type="text" class="form-control shadow-none" id="emailaddress">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="user_pass" type="password" class="form-control shadow-none" id="password_login">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none" id="button_login">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none ">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button Register -->

<div class="modal fade" id="registerModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="./inc/reginster.php" method="POST" onsubmit="return validateForm()">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge text-bg-light mb-3 text-wrap lh-base note-font">
                    Note: Thông tin của bạn phải đúng với giấy tờ (CCCD, CMND, GPLX, etc...) vì sẽ được kiểm tra.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Username</label>
                                <input name="user_name" type="text" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="tel" type="text" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control shadow-none" rows="1" required></textarea>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">CID</label>
                                <input name="cid" type="text" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input name="user_pass" type="password" class="form-control shadow-none" id="password" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" id="retype_password" required>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("retype_password").value;

    if (password !== confirmPassword) {
        alert("Error: Passwords do not match.");
        return false;
    }

    return true;
}
</script>
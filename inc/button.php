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
                        <label class="form-label">Email address</label>
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
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge text-bg-light mb-3 text-wrap lh-base note-font">
                        Note: Thông tin của bạn phải đúng với giấy tờ (CCCD, CMND, GPLX, etc...) vì sẽ được kiểm tra
                        lại lúc check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="password"
                                    onchange="check_pass();">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" id="retype_password"
                                    onchange="check_pass();">
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="summit" class="btn btn-dark shadow-none" id="submit" disabled
                                value="registration">REGISTER</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 08:50:22 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>SR Group</title>
</head>

<body class="bg-lock-screen">
<!-- wrapper -->
<div class="wrapper">
    <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
        <div class="card  shadow-none bg-transparent">
            <div class="card-body p-md-5 text-center">
<!--                <h2 class="text-white">10:53 AM</h2>-->
<!--                <h5 class="text-white">Tuesday, January 14, 2021</h5>-->
                <div class="">
                    <img src="assets/images/icons/user.png" class="mt-5" width="120" alt="" />
                </div>
                <p class="mt-2 text-white">SIGN IN</p>
                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                    <div class="text-white">Wrong Password!</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" name="nic" class="form-control" placeholder="SRID / Email" />
                </div>
                <div class="mb-3 mt-3" id="show_hide_password">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text "><i class='bx bx-hide'></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label style="font-size: 11px;" class="form-check-label text-white" for="flexSwitchCheckChecked">Remember Me</label>
                        </div>
                    </div>
                    <div class=" text-end" style="font-size: 11px;">	<a href="#">Forgot Password ?</a>
                    </div>
                </div>
                <div class="d-grid mt-2">
                    <button type="button" class="btn btn-secondary">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="../assets/js/app.js"></script>
</body>
<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 08:50:23 GMT -->
</html>
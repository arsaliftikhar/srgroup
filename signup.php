
<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 08:50:22 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-lock-screen">
<!--wrapper-->
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-5 text-center">
<!--                        <img src="assets/images/logo-img.png" width="180" alt="" />-->
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign Up</h3>
                                    <p>Already have an account? <a href="authentication-signin.html">Sign in here</a>
                                    </p>
                                </div>
                                <div class="login-separater text-center mb-4"> <span>ENTER DETAILS BELOW</span>
                                    <hr/>
                                </div>
                                <div class="form-body">
<!--                                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">-->
<!--                                        <div class="d-flex align-items-center">-->
<!--                                            <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>-->
<!--                                            </div>-->
<!--                                            <div class="ms-3">-->
<!--                                                <h6 class="mb-0 text-white">Danger Alerts</h6>-->
<!--                                                <div class="text-white">A simple danger alert—check it out!</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
<!--                                    </div>-->
                                    <form class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="inputFirstName" class="form-label">Sponsor Id</label>
                                            <input type="text" class="form-control" id="inputFirstName" value="SR0001" placeholder="Enter Sponsor ID">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputLastName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputLastName" placeholder="Enter Full Name">
                                        </div>
                                        <div class="col-6">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
                                        </div>
                                        <div class="col-6">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="inputSelectCountry" class="form-label">Country</label>
                                            <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                                                <option selected>India</option>
                                                <option value="1">United Kingdom</option>
                                                <option value="2">America</option>
                                                <option value="3">Dubai</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="inputEmailAddress" class="form-label">Phone</label>
                                            <div class="input-group mb-3 align-items-center">
<!--                                                <span class="input-group-text">-->
<!---->
<!--                                                </span>-->
                                                <div>
                                                    <img style="border-radius: 8px" height="35" class="p-1" src="https://infinitetradegroup.com/data/images/flags/np.svg" alt="">
                                                </div>
                                                <span class="input-group-text">+92 </span>
                                                <input type="text" class="form-control" placeholder="Mobile" aria-label="Dollar amount (with dot and two decimal places)">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn bg-gradient-ibiza text-white"><i class='lni lni-user'></i>Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
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
<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 08:50:22 GMT -->
</html>
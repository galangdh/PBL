
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css'); ?>">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/pages/waves/css/waves.min.css'); ?>" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/themify-icons/themify-icons.css'); ?>">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css'); ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/font-awesome/css/font-awesome.min.css'); ?>">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body themebg-pattern="theme1">
<!-- Pre-loader start -->
<?php $this->load->view($loader); ?>
<!-- Pre-loader end -->

<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                
                    <form class="md-float-material form-material">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="nip" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">NIP</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="forgot-phone">
                                            <a href="#" class="text-right f-w-600">Don't have accout?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery/jquery.min.js'); ?>"></script>     
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui/jquery-ui.min.js '); ?>"></script>     
<script type="text/javascript" src="<?php echo base_url('assets/js/popper.js/popper.min.js'); ?>"></script>     
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap/js/bootstrap.min.js'); ?> "></script>
<!-- waves js -->
<script src="<?php echo base_url('assets/pages/waves/js/waves.min.js'); ?>"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-slimscroll/jquery.slimscroll.js'); ?> "></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/SmoothScroll.js'); ?>"></script>     
<script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js '); ?>"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/common-pages.js'); ?>"></script>
</body>

</html>

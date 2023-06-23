<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign in Healing.id</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>
registerCSS/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>
registerCSS/css/style.css">
</head>
<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?php echo base_url() ?>
registerCSS/images/signin-image.jpg" alt="sing up image"></figure>
                <a href="<?= base_url()?>index.php/AuthLogin/register" class="signup-image-link">Create an
                    account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign in</h2>

                <?php 
				if($this->session->flashdata('message_login_error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('message_login_error');
					echo '</div>';
				}
				?>

                <?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>

                <form method="POST" class="register-form" id="login-form"
                    action="<?php echo base_url(); ?>AuthLogin/login">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" id="email" placeholder="Your email" />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                            me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JS -->
<script src="<?php echo base_url() ?>
registerCSS/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>
registerCSS/js/main.js"></script>
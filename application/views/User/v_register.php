<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?php 
				            if($this->session->flashdata('error') !='')
				            {
					            echo '<div class="alert alert-danger" role="alert">';
					            echo $this->session->flashdata('error');
					            echo '</div>';
				            }
				        ?>
                        <form method="POST" class="register-form" id="register-form"
                            action="<?php echo base_url(); ?>Register/proses">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re_password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_password"
                                    placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url() ?>registerCSS/images/signup-image.jpg"
                                alt="sing up image"></figure>
                        <div class="social-login">
                            <span class="social-label">Already registered?</span>
                            <ul class="socials">
                                <li>
                                    <a href="http://localhost/project-Healing/Login/index"
                                        class="signup-image-link">Login</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <p>already registered?
                            <a href="http://localhost/project-Healing/User/login/" class="signup-image-link">Login</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </section>



    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php Chunk::get('header'); ?>
<div id="fullpage">
    <div class="container-wide section" id="riddles" data-anchor="da-riddles">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="riddles_carousel" class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <h3>Hi There!</h3>
                                <h1>Glad you found your way here. <br/>Have fun exploring!</h1>
                                <div class="scroll_down_cta">
                                    <a class="scroll_section_down">
                                        <h6>scroll down</h6>
                                        <i class='glyphicon glyphicon-chevron-down'></i>
                                    </a>
                                </div>  
                            </div>
                            <div class="swiper-slide riddle">
                                <div class="question">
                                    <h5>Riddle #1</h5>
                                    <h3>I become whiter while going dirtier. What am I?</h3>
                                    <a class="btn green_btn reveal_answer_btn">reveal answer</a>
                                </div>
                                <div class="answer">
                                    <h1>a Chalk Board</h1> 
                                    <div id="chalk_container">
                                        <img src="<?php echo Site::url(); ?>/public/assets/img/welcome/chalkboard.png" alt="" id="chalk_bg"/>

                                        <div id="chalkboard">
                                            <img src="<?php echo Site::url(); ?>/public/assets/img/welcome/chalk/chalk_white.png" alt="" id="chalk_base"/>
                                            <img class="swiper-no-swiping" src="<?php echo Site::url(); ?>/public/assets/img/welcome/chalk/chalk_black.png" alt="" id="chalk_overlay"/>
                                        </div>
                                        <div class="btn" id="resetBtn">Reset</div>
                                    </div>                           
                                </div>  
                            </div>
                        </div>
                    </div>

                    <!-- navigation buttons -->
                    <div class="swiper-button-prev"><i class='glyphicon glyphicon-chevron-left'></i></div>
                    <div class="swiper-button-next"><i class='glyphicon glyphicon-chevron-right'></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-wide section" id="about" data-anchor="da-about">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12" id="about_content">
                    <h1>About Me</h1>
                    <div class="profile_photo"><img src="<?php echo Site::url(); ?>/public/assets/img/about/profile.jpg"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae neque non nisl iaculis scelerisque quis ac turpis. Fusce interdum, libero quis tristique dignissim, ante leo sollicitudin sapien, eget laoreet enim odio et erat. Quisque in sem eu quam lobortis placerat. Aliquam dolor dui, ultrices elementum molestie non, semper a arcu. Aliquam erat volutpat. Donec suscipit ullamcorper posuere.</p>
                    <a class="btn white_btn scroll_to_contact">Hire Me</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-wide section fp-auto-height" id="gallery" data-anchor="da-gallery">
        <svg version="1.1" class="tile_overlay hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 330 200" style="enable-background:new 0 0 330 200;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#FFF15D;}
            </style>
            <polygon id="open" class="st0" points="330,200 0,200 0,80 330,0 "/>
            <rect y="200" id="close" class="st0" width="330" height="0"/>
        </svg>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2" id="gallery_content">
                    <h1>What I Do</h1>
                    <div class="grid">
                        <div class="grid-item">
                            <div class="overlay">
                                <svg version="1.1" class="tile_overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 330 200" style="enable-background:new 0 0 330 200;" xml:space="preserve">
                                    <style>.tile_overlay_path {fill: #FFF15D;}</style>
                                    <path class="tile_overlay_path" d="M490.1,280.649c0,44.459-36.041,80.5-80.5,80.5s-80.5-36.041-80.5-80.5s36.041-80.5,80.5-80.5
    S490.1,236.19,490.1,280.649z"/>
                                </svg>
                                <div class="overlay_content">
                                    <h2>Web<br/>Development</h2>
                                    <a href="#" class="popup"><i class="glyphicon glyphicon-info-sign"></i></a>
                                    <a href="#" class="url"><i class="glyphicon glyphicon-link"></i></a>
                                </div>
                            </div>
                            <img src="<?php echo Site::url(); ?>/public/assets/img/about/profile.jpg">
                        </div>
                        <div class="grid-item grid-item--height1">
                            <div class="overlay">
                                <svg version="1.1" class="tile_overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 330 200" style="enable-background:new 0 0 330 200;" xml:space="preserve">
                                    <style>.tile_overlay_path {fill: #FFF15D;}</style>
                                    <path class="tile_overlay_path" d="M490.1,280.649c0,44.459-36.041,80.5-80.5,80.5s-80.5-36.041-80.5-80.5s36.041-80.5,80.5-80.5
    S490.1,236.19,490.1,280.649z"/>
                                </svg>
                                <div class="overlay_content">
                                    <h2>Web<br/>Development</h2>
                                    <a href="#" class="popup"><i class="glyphicon glyphicon-info-sign"></i></a>
                                    <a href="#" class="url"><i class="glyphicon glyphicon-link"></i></a>
                                </div>
                            </div>
                            <img src="<?php echo Site::url(); ?>/public/assets/img/about/profile.jpg">
                        </div>
                        <div class="grid-item">
                            <div class="overlay">
                                <svg version="1.1" class="tile_overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 330 200" style="enable-background:new 0 0 330 200;" xml:space="preserve">
                                    <style>.tile_overlay_path {fill: #FFF15D;}</style>
                                    <path class="tile_overlay_path" d="M490.1,280.649c0,44.459-36.041,80.5-80.5,80.5s-80.5-36.041-80.5-80.5s36.041-80.5,80.5-80.5
    S490.1,236.19,490.1,280.649z"/>
                                </svg>
                                <div class="overlay_content">
                                    <h2>Web<br/>Development</h2>
                                    <a href="#" class="popup"><i class="glyphicon glyphicon-info-sign"></i></a>
                                    <a href="#" class="url"><i class="glyphicon glyphicon-link"></i></a>
                                </div>
                            </div>
                            <img src="<?php echo Site::url(); ?>/public/assets/img/about/profile.jpg">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="container-wide section" id="contact" data-anchor="da-contact">
        <?php
            /*
            require '/libraries/PHPMailer/PHPMailer.php';

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'user@example.com';                 // SMTP username
            $mail->Password = 'secret';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress('ellen@example.com');               // Name is optional
            
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
            */
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12" id="contact_content">
                    <h1>Contact Me</h1>
                    <form class="form-inline">
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="name">Your name</label>
                                <input type="text" class="form-control" id="name" placeholder="">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="email">Your email</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="message">Your message</label>
                                <textarea class="form-control" rows="3" id="message" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php Chunk::get('footer'); ?>

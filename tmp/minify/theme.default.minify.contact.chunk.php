<div class="container-wide section" id="contact" data-anchor="da-contact">
<div id="plane_container">
<img src="<?php echo Site::url(); ?>/public/assets/img/contact/plane_bg.png" id="plane">
</div>
<div class="container">
<div class="row">
<div class="col-xs-12" id="contact_content">
<h1>Contact Me</h1>
<form class="form-inline" id="contact-form">
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
<div class="form-group col-md-12 col-xs-12">
<h5>CAPTCHA</h5>
<div id="epicaptcha"></div>
<input class="btn btn-default" id="epi" type="button" value="Send"/>
<div id="contactMessage"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
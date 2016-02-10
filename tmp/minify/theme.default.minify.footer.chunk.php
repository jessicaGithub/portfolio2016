<div class="masthead">
<div class="container">
<div class="row">
<div class="col-xs-12">
<?php Action::run('theme_post_content'); ?>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="pull-left left"><p>Copyright © <?php echo date("Y"); ?>. Designed and built with love in Melbourne, Australia.</p></div>
<div class="pull-right right">
<ul>
<li><a href="http://codepen.io/Himechi90/" target="_blank"><img src="<?php echo Site::url(); ?>/public/assets/img/header/codepen.svg" class="codepen social_icon"></a></li>
<li><a href="https://www.facebook.com/himechi90" target="_blank"><img src="<?php echo Site::url(); ?>/public/assets/img/header/fb.svg" class="fb social_icon"></a></li>
<li><a href="https://au.linkedin.com/in/jessicajessica" target="_blank"><img src="<?php echo Site::url(); ?>/public/assets/img/header/linkedin.svg" class="linkedin social_icon"></a></li>
</ul>
</div>
</div>
</footer>
</div>
<div class="gallery_modal_container">
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="galleryModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">
<i class="glyphicon glyphicon-remove"></i>
</span>
</button>
<h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-12">
<img src="" class="hero" alt="">
</div>
</div>
<div class="row">
<div class="col-md-6">
<p class="description"></p>
</div>
<div class="col-md-6">
<a href="" class="btn green_btn preview_btn">Go to Site</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php echo Snippet::get('google-analytics'); ?>
<?php Javascript::add('public/assets/js/vendor.js', 'frontend', 1); ?>
<?php Javascript::add('public/assets/js/app.js', 'frontend', 2); ?>
<?php Javascript::load(); ?>
</body>
</html>
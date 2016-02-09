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
    <?php echo Snippet::get('google-analytics'); ?>  
    <!-- JavaScripts -->
    <?php Javascript::add('public/assets/js/vendor.js', 'frontend', 1); ?>
    <?php Javascript::add('public/assets/js/app.js', 'frontend', 2); ?>
    <?php Javascript::load(); ?>  
  </body>
</html>

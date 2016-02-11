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
                    <h5 class="tags"></h5>
                  </div>
                </div>
              	<div class="row">
                  <div class="col-md-12">
                    <div class="hero">
                  	 <img src="" alt="">
                    </div>
                  </div>
              	</div>
                <div class="row">
                  <div class="col-md-6">
                  	<p class="description"></p>
                  </div>
                  <div class="col-md-6">
                  	<a href="" target="_blank" class="btn green_btn preview_btn">Go to Site</a>
                  </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <?php echo Snippet::get('google-analytics'); ?>  
    <!-- JavaScripts -->
    <?php Javascript::add('public/assets/js/vendor.js', 'frontend', 1); ?>
    <?php Javascript::add('public/assets/js/app.js', 'frontend', 2); ?>
    <?php Javascript::load(); ?>  

        <!-- preloader -->
        <?php /*
    <div class="loading"></div>
    <style rel="stylesheet"> 
    	.loading{
    		background: url('https://dl.dropbox.com/u/23834858/fotos/loading.gif') no-repeat center center rgba(51, 51, 51, 0.82);
    		position: fixed;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		margin: 0 auto;
    		display: block;
    		z-index: 10000;
    	}
    	</style>
    	<script type="text/javascript">
    		$(window).load(function(){
    			$('.loading').delay(2000).fadeOut(1000, function(){
    				$(this).remove();
    			});
    		});
    	</script>
    	*/ ?>
  </body>
</html>

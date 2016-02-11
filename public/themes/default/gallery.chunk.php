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
            <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="gallery_content">
                <h1>What I Do</h1>

                <div id="gallery_carousel" class="swiper-container">
                    <!-- navigation buttons -->
                    <div class="gallery-swiper-button-prev"><i class='glyphicon glyphicon-chevron-left'></i></div>
                    <div class="gallery-swiper-button-next"><i class='glyphicon glyphicon-chevron-right'></i></div>
                    
                    <div class="grid swiper-wrapper">
                        
                        <?php Chunk::get('gallery-nescafe-headstart'); ?>
                        <?php Chunk::get('gallery-maggi'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
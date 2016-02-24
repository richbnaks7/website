		<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>

	                    <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>

	                    <li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
	                </ul>
	            </footer>

	        </div>

				<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
				<script type="text/javascript">
				//video
				$( document ).ready(function() {

				    scaleVideoContainer();

				    initBannerVideoSize('.video-container .poster img');
				    initBannerVideoSize('.video-container .filter');
				    initBannerVideoSize('.video-container video');

				    $(window).on('resize', function() {
				        scaleVideoContainer();
				        scaleBannerVideoSize('.video-container .poster img');
				        scaleBannerVideoSize('.video-container .filter');
				        scaleBannerVideoSize('.video-container video');
				    });

				});

				function scaleVideoContainer() {

				    var height = $(window).height() + 5;
				    var unitHeight = parseInt(height) + 'px';
				    $('.homepage-hero-module').css('height',unitHeight);

				}

				function initBannerVideoSize(element){

				    $(element).each(function(){
				        $(this).data('height', $(this).height());
				        $(this).data('width', $(this).width());
				    });

				    scaleBannerVideoSize(element);

				}

				function scaleBannerVideoSize(element){

				    var windowWidth = $(window).width(),
				    windowHeight = $(window).height() + 5,
				    videoWidth,
				    videoHeight;

				    console.log(windowHeight);

				    $(element).each(function(){
				        var videoAspectRatio = $(this).data('height')/$(this).data('width');

				        $(this).width(windowWidth);

				        if(windowWidth < 1000){
				            videoHeight = windowHeight;
				            videoWidth = videoHeight / videoAspectRatio;
				            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

				            $(this).width(videoWidth).height(videoHeight);
				        }

				        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

				    });
				}
				</script>
    </body>
</html>

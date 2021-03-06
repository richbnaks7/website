		<footer class="container">
			<div class="row">
				<p class="col-sm-10">If you have any questions, feedback or would just like to get in touch, please email me at &#104;&#101;&#108;&#108;&#111;&#64;&#114;&#105;&#99;&#104;&#98;&#97;&#110;&#107;&#115;&#46;&#99;&#111;&#46;&#117;&#107;</p>
				<p class="col-sm-2 pull-right">
					<a href="https://twitter.com/richbnaks7"><img src="<?php echo theme_url('img/twitter_icon.svg'); ?>" alt="twitter icon" width="32" height="32"></a>
					<a href="https://www.flickr.com/photos/127172784@N05/"><img src="<?php echo theme_url('img/flickr_icon.svg'); ?>" alt="flickr icon" width="32" height="32"></a>
					<a href="https://github.com/richbnaks7"><img src="<?php echo theme_url('img/git-hub.svg'); ?>" alt="github icon" width="32" height="32"></a>
					<a href="/feeds/rss"><img src="<?php echo theme_url('img/rss_feed.svg'); ?>" alt="rss feed icon" width="32" height="32"></a>
				</p>
			</div>
		</footer>

				<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
				<script async type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="<?php echo theme_url('js/prism.js'); ?>"></script>
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
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56cf10cb88fec85e"></script>
    </body>
</html>

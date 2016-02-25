<?php theme_include('header'); ?>

<header class="homepage-hero-module">
	<div class="video-container">
			<div class="filter"></div>
			<video autoplay loop class="fillWidth">
					<source src="<?php echo theme_url('videos/Hello-World.mp4') ?>" type="video/mp4" />
					<source src="<?php echo theme_url('videos/Hello-World.webm') ?>" type="video/webm" />
			</video>
			<div class="poster hidden">
					<img src="<?php echo theme_url('videos/Hello-World.jpg') ?>" alt="">
			</div>
			<div class="layer">
				<h1>Richard Banks</h1>
				<h2>Personal Blog</h2>
			</div>
	</div>
</header>

<section class="container">
	<div class="col-sm-12 synopsis">
		<p>
			<?php echo page_content(); ?>
		</p>
	</div>
</section>

<section class="container posts">
	<?php if(has_posts()): ?>

		<?php $i = 0; while(posts()): ?>
			<?php
				preg_match_all('/src="([^"]*")/i', article_html(), $src);
				list($firstItem) = $src;
			?>

			<article class="col-sm-4">
				<a href="<?php echo article_url(); ?>">
					<img <?php echo reset($firstItem) ?> alt="<?php echo article_title(); ?>" class="img-responsive">
				</a>
				<time datetime="<?php echo date(DATE_W3C, article_time()); ?>" class="pull-right"><?php echo relative_time(article_time()); ?></time>
				<div class="space"></div>
				<h3>
					<a class="category">Laravel: <?php echo category_title(); ?></a>
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="title"><?php echo article_title(); ?></a>
				</h3>
			</article>
		<?php endwhile; ?>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>
	<?php else: ?>
		<div class="col-sm-12">
			<h1>No posts yet!</h1>
			<p>Looks like I have some writing to do!</p>
		</div>
	<?php endif; ?>
</section>

<?php theme_include('footer'); ?>

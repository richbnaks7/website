<?php theme_include('header'); ?>
<section class="container blog-article" id="article-<?php echo article_id(); ?>">
	<article>

		<h1><a href="<?php echo article_category_url(); ?>#posts" class="article-category"><?php echo article_category(); ?>: </a><?php echo article_title(); ?></h1>
		<p class="details">
			Written by <?php echo article_author(); ?> on <?php echo article_date(); ?>
		</p>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox"></div>
		<p>
			<?php echo article_markdown(); ?>
		</p>

	</article>

</section>

<?php if(comments_open()): ?>
<section class="container">
  <div class="row">
    <div class="col-sm-12">
        <div class="comment-tabs" id="comments-tabs">
            <ul class="nav nav-tabs" role="tablist">
								<?php if(has_comments()): ?>
                <li class="active"><a href="#comments" role="tab" data-toggle="tab"><h4 class="reviews">Comments</h4></a></li>
								<li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews">Add comment</h4></a></li>
							<?php else: ?>
								<li class="active"><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews">Add comment</h4></a></li>
							<?php endif; ?>
            </ul>
            <div class="tab-content">
							<?php echo comment_form_notifications(); ?>
							<?php if(has_comments()): ?>
                <div class="tab-pane active" id="comments">
                    <ul class="media-list">
											<?php $i = 0; while(comments()): $i++; ?>
                      <li class="media" id="comment-<?php echo comment_id(); ?>">
                        <div class="container media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews"><?php echo comment_name(); ?></h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd"><?php echo relative_time(comment_time()); ?></li>
                              </ul>
                              <p class="media-comment">
                                <?php echo htmlspecialchars(comment_text()); ?>
                              </p>

                          </div>
                        </div>
                      </li>
											<?php endwhile; ?>
                    </ul>
                	</div>
								<?php endif; ?>
                <div class="tab-pane" id="add-comment">
                    <form action="<?php echo comment_form_url(); ?>#comments-tabs" method="post" class="form-horizontal" id="commentForm" role="form">
											<?php echo comment_form_notifications(); ?>
												<div class="form-group">
													<label for="name" class="col-sm-2 control-label">Your Name:</label>
													<div class="col-sm-10">
															<input type="text" class="form-control" name="name" id="name">
													</div>
												</div>
												<div class="form-group">
													<label for="email" class="col-sm-2 control-label">Your Email:</label>
													<div class="col-sm-10">
															<input type="text" class="form-control" name="email" id="email">
													</div>
												</div>
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="text" id="text" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-circle" type="submit" id="submitComment">Summit comment</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
	</div>
  </div>
</section>
<?php endif; ?>

<?php theme_include('footer'); ?>

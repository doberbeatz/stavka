@layout('layouts/base')

@section('content')

	<section id="blog" class="container">
		<div class="blog">
			<div class="row">
				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="blog-item">
							<img class="img-responsive img-blog" src="<?php echo get_thumbnail_src();?>" width="100%" alt="" />
							<div class="row">
								<div class="col-xs-12 col-sm-12 blog-content">
									<h2><?php the_title(); ?></h2>

									<?php the_content(); ?>

									<div class="post-tags">
										<strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
									</div>

								</div>
							</div>
						</div><!--/.blog-item-->
					<?php endwhile; ?>
					
					<h1 id="comments_title">5 Comments</h1>
					<div class="media comment_section">
						<div class="media-body post_reply_comments">
							<h3>Marsh</h3>
							<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
							<a href="#">Reply</a>
						</div>
					</div>
					<div class="media comment_section">
						<div class="media-body post_reply_comments">
							<h3>Marsh</h3>
							<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
							<a href="#">Reply</a>
						</div>
					</div>
					<div class="media comment_section">
						<div class="media-body post_reply_comments">
							<h3>Marsh</h3>
							<h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
							<a href="#">Reply</a>
						</div>
					</div>


					<div id="contact-page clearfix">
						<div class="status alert alert-success" style="display: none"></div>
						<div class="message_heading">
							<h4>Leave a Replay</h4>
							<p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
						</div>

						<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<label>Name *</label>
										<input type="text" class="form-control" required="required">
									</div>
									<div class="form-group">
										<label>Email *</label>
										<input type="email" class="form-control" required="required">
									</div>
									<div class="form-group">
										<label>URL</label>
										<input type="url" class="form-control">
									</div>
								</div>
								<div class="col-sm-7">
									<div class="form-group">
										<label>Message *</label>
										<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
									</div>
								</div>
							</div>
						</form>
					</div><!--/#contact-page-->
				</div><!--/.col-md-8-->

				<?php get_sidebar(); ?>

			</div><!--/.row-->

		</div><!--/.blog-->

	</section><!--/#blog-->

@endsection
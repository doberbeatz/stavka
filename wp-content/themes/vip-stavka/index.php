@layout('layouts/base')

@section('content')

	<section id="main-slider" class="no-margin">
		<div class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">

				<div class="item active" style="background-image: url(/assets/images/slider/bg1.jpg)">
					<div class="container">
						<div class="row slide-margin">
							<div class="col-sm-6">
								<div class="carousel-content">
									<h1 class="animation animated-item-1">Январь 2015</h1>
									<h2 class="animation animated-item-2">Результаты ставок за весь месяц</h2>
									<a class="btn-slide animation animated-item-3" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->

				<div class="item" style="background-image: url(/assets/images/slider/bg2.jpg)">
					<div class="container">
						<div class="row slide-margin">
							<div class="col-sm-6">
								<div class="carousel-content">
									<h1 class="animation animated-item-1">Декабрь 2014</h1>
									<h2 class="animation animated-item-2">Результаты ставок за весь месяц</h2>
									<a class="btn-slide animation animated-item-3" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->

				<div class="item" style="background-image: url(/assets/images/slider/bg3.jpg)">
					<div class="container">
						<div class="row slide-margin">
							<div class="col-sm-6">
								<div class="carousel-content">
									<h1 class="animation animated-item-1">Ноябрь 2014</h1>
									<h2 class="animation animated-item-2">Результаты ставок за весь месяц</h2>
									<a class="btn-slide animation animated-item-3" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->
			</div><!--/.carousel-inner-->
		</div><!--/.carousel-->
		<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
			<i class="fa fa-chevron-left"></i>
		</a>
		<a class="next hidden-xs" href="#main-slider" data-slide="next">
			<i class="fa fa-chevron-right"></i>
		</a>
	</section><!--/#main-slider-->

	<section id="blog" class="container">
		<div class="blog">
			<div class="row">

				<div class="col-md-8">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="blog-item">
							<div class="col-xs-12 col-sm-12 blog-content">
								<a href="#"><img class="img-responsive img-blog" src="{{ get_thumbnail_src() }}"
												 width="100%" alt="" /></a>
								<h2><a href="{{ the_permalink() }}">{{ the_title() }}</a></h2>
								<h3>
									{{ the_excerpt() }}
									<span id="publish_date">{{ the_time('F j, Y') }}</span>
								</h3>

								<a class="btn btn-primary readmore" href="{{ the_permalink() }}">Подробнее <i
										class="fa fa-angle-right"></i></a>
							</div>
						</div>

					<?php endwhile; else: ?>

					<?php endif; ?>

					<ul class="pagination pagination-lg">
						{{ paginate_links(array('prev_text'=>'Назад', 'next_text'=>'Вперед', 'mid_size'=>5)) }}
					</ul><!--/.pagination-->
				</div><!--/.col-md-8-->

				{{ get_sidebar() }}

			</div><!--/.row-->
		</div>
	</section><!--/#blog-->

@endsection
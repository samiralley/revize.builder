<!-- #done -->
<div class="offcanvas offcanvas-bottom offcanvas-news-item mx-auto" tabindex="-1" id="newsDetails" aria-labelledby="newsDetailsLabel" style="--bs-offcanvas-height:95vh;">
<div class="progress rounded-0" role="progressbar" aria-label="Scroll Progress" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
	<div class="progress-bar bg-primary" style="width: 25%"></div>
	<!-- #todo make progress-bar fill as you scroll -->
</div>

	<div class="offcanvas-header border-bottom fw-bold">
		News Details
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body pt-0">
 		<div class="container p-0">
			<div class="col-lg-9 mx-auto">

			<div class="sticky-top">
				<div class="d-md-flex small bg-white flex-wrap align-items-center py-3">
					<div class="d-flex me-3">
						<div class="d-flex post-info-wrap">
							<p class="post-published m-0">
								<span class="opacity-50">Published:</span>
								October 10, 2025 <i class="bi bi-dot d-none d-md-inline-block"></i>
								<span class="w-100 d-block d-md-none"></span>
								<span id="eta"></span>
							</p><!-- /.post-published -->
						</div><!-- /.post-info-wrap -->
					</div><!-- /.d-flex -->
					
					<div class="post-btns-wrap ms-auto mt-3 my-md-0">
						<div class="post-fav d-flex align-items-center gap-2">
							<span class="btn px-3 py-1 py-md-2 btn-outline-light d-flex gap-2 align-items-center rounded-pill">
								<i class="bi bi-heart text-danger cursor-pointer" id="saveNewsItemBtn"></i>
								<span class="small d-md-none">Save</span>
							</span>
							<div class="dropdown">
								<span class="btn px-3 py-1 py-md-2 btn-outline-light d-flex gap-2 align-items-center rounded-pill" data-bs-toggle="modal" data-bs-target="#shareModal">
									<i class="bi bi-share align-middle"></i>
									<span class="small d-md-none">Save</span>
								</span>
							</div><!-- /.dropdown -->
						</div><!-- /.post-fav -->						
					</div><!-- /.post-btns-wrap -->
					
				</div><!-- /.d-flex -->
			</div><!-- /.sticky-top -->

		<div class="ratio ratio-16x9 mb-4 featured-image-wrap rounded" data-src="_assets_/images/no-image-slider.jpg"></div>

		<div class="p-2 px-md-5">
			<p class="news-subtitle text-muted text-uppercase small">Sit Ornare Ultricies</p>
			<h3 class="mb-3 h1">Title of news item here Praesent commodo cursus magna</h3>

			<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider:'›';" class="small mt-4 text-nowrap">
				<ol class="breadcrumb align-items-center flex-nowrap">
					<li class="breadcrumb-item"><a href="#"><i class="bi bi-house fs-5 position-relative"></i></a></li>
					<li class="breadcrumb-item"><a href="./news.php">News</a></li>
					<li class="breadcrumb-item active text-truncate" aria-current="page">Title of News item here Praesent commodo cursus magna</li>
				</ol>
			</nav>			
			<div id="post-details">
			<p class="lead">
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			</p>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
			 <h4>Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum.</h4>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitorligula, eget lacinia odio sem nec elit.</p>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitorligula, eget lacinia odio sem nec elit.</p>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitorligula, eget lacinia odio sem nec elit.</p>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus 
			</p>
			<p><img loading="lazy" src="_assets_/images/no-image-slider.jpg" alt="image"></p>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitorligula, eget lacinia odio sem nec elit.</p>
			<hr>
			<p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitorligula, eget lacinia odio sem nec elit.</p>
			</div><!-- /#post-details -->
		</div><!-- /.p-2 -->
			</div><!-- /.col-lg-9 -->
		</div><!-- /.container -->
	</div><!-- /.offcanvas-body -->
</div><!-- /.offcanvas -->

<div class="toast align-items-center text-bg-success border-0 position-fixed position-absolute bottom-0 start-50 translate-middle mb-4" id="savedNewsItem" role="alert" aria-live="assertive" aria-atomic="true">
	<div class="d-flex">
		<div class="toast-body">
			Added to your favorites!  
			<a href="" class="text-light">See all here ss</a>
		</div>
		<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
	</div>
</div>
 

<script>
	// #todo make toast work
	// const toastTrigger = document.getElementById('saveNewsItemBtn')
	// const toastSaved = document.getElementById('savedNewsItem')
	// 
	// if (toastTrigger) {
	// 	const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastSaved)
	// 	toastTrigger.addEventListener('click', () => {
	// 		toastBootstrap.show()
	// 	})
	// }
</script>
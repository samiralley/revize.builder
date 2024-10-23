<?php include "_includes_/head.php"; ?>

<div class="blog-intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 py-5 overflow-hidden">
				<h1 data-aos="fade-up-right"
				data-aos-duration="600"><span class="mega-font">City Blog</span></h1>
			</div><!-- /.col-12 -->
		</div>
	</div>
</div>

<div class="blog-hero mb-5 bg-primary-subtle py-5">
	<div class="container">
		<div class="row">

			<div class="col">
				<div data-aos="fade-up"
					data-aos-duration="800"
					class="rz-element rz-card-wrap">
					<div class="rz-card rz-blog-card gap-5 py-5"
						data-card-layout="horizontal-hero">
						<div class="rz-card-img-wrap">
							<div class="rz-card-img"
								style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
							<div class="rz-card-img-overlay"></div>
						</div><!-- /.rz-card-image-wrap -->
						<div class="rz-card-body">

							<div class="d-flex align-items-center small mb-3">
								<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
								<div class="d-flex post-info-wrap flex-column flex-md-row">
									<p class="post-by m-0">
										<span class="opacity-50">By: </span>Jamie Phy
									</p><!-- /.post-by -->
									<i class="bi bi-dot d-none d-md-inline-block"></i>
									<p class="post-published m-0">
										<span class="opacity-50">Published: </span>October 10, 2025
										<span class="w-100 d-block d-md-none"></span>
									</p><!-- /.post-published -->
								</div><!-- /.post-info-wrap -->
							</div><!-- /.d-flex -->

							<h3 class="rz-card-title">Ridiculus Parturient Aenean Sit Tellus</h3>
							<p class="rz-card-text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
							<div class="rz-card-actions">
								<a href="#"
									class="btn btn-primary rz-card-btn"
									data-bs-toggle="offcanvas"
									data-bs-target="#blogDetails"
									aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
							</div><!-- /.rz-card-actions -->
						</div><!-- /.rz-card-body -->
					</div><!-- /.rz-card -->
				</div><!-- /.rz-card-wrap -->

			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!--/.container -->
</div><!-- /.blog-hero -->

<div class="rz-section-block has-edit-buttons has-edit-buttons" style="padding:5% 0;">
	<?php include "../plugins/builder/assets/buttons/add-section.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="fw-bold text-center" data-aos="fade-up-right"
				data-aos-duration="600"><span class="mega-font">Check out the latest posts from site name</span></h2>
			</div>

			<div class="col-lg-12 py-5">

				<div class="rz-element-wrapper rz-blog-card-wrapper has-edit-buttons yes-has-edit-buttons">

					<div class="center-top">
						<div class="rz-btns-container">
							<span class="rzBtn rzBtn-sm">Edit blog List</span>
						</div>
					</div>

					<div class="rz-element rz-element-search-wrapper mb-4">
						<form>
							<div class="rz-element-search-wrap d-flex rounded border bg-white">
								<div class="form-input flex-fill m-0">
									<div class="form-floating h-100">
										<input autocomplete="off" class="form-control border-0 m-0 h-100" name="" type="search" placeholder="Search..." aria-label="Search">
										<label><i><svg width="20" height="20" class="filter-search-icon" viewBox="0 0 20 20" aria-hidden="true">
													<path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg></i> Search...</label>
									</div>
								</div><!-- /.form-input -->
								<div class="vr"></div>
								<div class="form-dropdown d-flex">
									<div class="dropdown category-dropdown w-100">
										<button class="btn btn-outline-primary border-0 border-end text-dark px-3 bg-transparent dropdown-toggle rounded-0 h-100" type="button" data-bs-display="static" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
											<i class="bi bi-funnel me-lg-2 fs-5 align-middle"></i><span class="dropdown-text">Categories</span>
										</button>
										<ul class="dropdown-menu dropdown-menu-end">
											<li>
												<a class="dropdown-item" href="#">
													<label>
														<input type="checkbox" class="selectall form-check-input">
														<span class="select-text form-check-label"> Select</span> All
														<!-- #todo selecting all will give you the wrong number selected. This might be due to multiple searches on the page -->
													</label>
												</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li>
												<a class="dropdown-item option-link" href="#">
													<label>
														<input name="options[]" type="checkbox" class="option justone form-check-input" value="Parks">
														<span class="form-check-label">Parks</span>
													</label>
												</a>
											</li>
											<li>
												<a class="dropdown-item option-link" href="#">
													<label>
														<input name="options[]" type="checkbox" class="option justone form-check-input" value="Fire">
														<span class="form-check-label">Fire</span>
													</label>
												</a>
											</li>
											<li>
												<a class="dropdown-item option-link" href="#">
													<label>
														<input name="options[]" type="checkbox" class="option justone form-check-input" value="Police">
														<span class="form-check-label">Police</span>
													</label>
												</a>
											</li>
										</ul>
									</div><!-- /.dropdown -->
									<div class="dropdown category-dropdown w-100">
										<button class="btn btn-outline-primary border-0 text-dark px-3 bg-transparent dropdown-toggle rounded-0 rounded-end h-100" type="button" data-bs-display="static" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
											<i class="bi bi-sort-down me-lg-2 fs-4 align-middle"></i><span>Sort</span>
										</button>
										<ul class="dropdown-menu w-100 dropdown-menu-end">
											<li>
												<a class="dropdown-item" href="#">Newest</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">Oldest</a>
											</li>
										</ul>
									</div><!-- /.dropdown -->
								</div><!--/. form-dropdown -->
							</div><!-- /.rz-element-search-wrap -->
						</form>
					</div><!-- /.rz-element -->
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" data-masonry='{"percentPosition": true, "itemSelector": ".rz-element"}'>
						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">This is the default layout for all cards Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">This is the default layout for all cards Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">This is the default layout for all cards Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

						<div data-aos="fade-up" data-aos-duration="800" class="rz-element rz-card-wrap aos-init aos-animate">
							<div class="rz-card rz-blog-card" data-card-layout="stacked">
								<div class="rz-card-img-wrap">
									<div class="rz-card-img" style="background:url(_assets_/images/no-image-slider-2.jpg) center center / cover no-repeat"></div>
									<div class="rz-card-img-overlay"></div>
								</div><!-- /.rz-card-image-wrap -->
								<div class="rz-card-body">
									<div class="d-flex align-items-center small mb-3">
										<img loading="lazy" src="_assets_/images/user.png" alt="author name" class="w-h-40 bg-white flex-shrink-0 me-3 border rounded-circle">
										<div class="d-flex post-info-wrap flex-column flex-md-row">
											<p class="post-by m-0">
												<span class="opacity-50">By: </span>Jamie Phy
											</p><!-- /.post-by -->
											<i class="bi bi-dot d-none d-md-inline-block"></i>
											<p class="post-published m-0">
												<span class="opacity-50">Published: </span>October 10, 2025
												<span class="w-100 d-block d-md-none"></span>
											</p><!-- /.post-published -->
										</div><!-- /.post-info-wrap -->
									</div><!-- /.d-flex -->

									<h3 class="rz-card-title">Stacked Card (default)</h3>
									<p class="rz-card-text">This is the default layout for all cards Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
									</p>
									<div class="rz-card-actions">
										<a href="#" class="btn btn-primary rz-card-btn" data-bs-toggle="offcanvas" data-bs-target="#blogDetails" aria-controls="blogDetails">link me jamie <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
									</div><!-- /.rz-card-actions -->
								</div><!-- /.rz-card-body -->
							</div><!-- /.rz-card -->
						</div><!-- /.rz-card-wrap -->

					</div><!-- /.row -->

				</div><!-- /.rz-element-wrapper -->

			</div><!-- /.col-lg-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.rz-section-block -->

<div class="load-more text-center pb-5 mb-5">
	<a href="" class="text-decoration-none text-dark p-3"><img loading="lazy" src="_assets_/images/loader.svg" class="w-h-24 me-2">Loading more</a>
</div><!-- /.load-more -->

<!-- #note if cant do loader above then pagination is fine  -->

<div class="d-flex justify-content-center pb-5 mb-5">
	<nav aria-label="Page navigation">
		<ul class="pagination">
			<li class="page-item disabled">
				<span class="page-link">Previous</span>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item active" aria-current="page">
				<span class="page-link">2</span>
			</li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>
<?php include "_includes_/footer.php"; ?>
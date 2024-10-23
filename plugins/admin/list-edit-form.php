<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-flex flex-fill overflow-auto">

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex align-items-center justify-content-between border-bottom px-4 py-3">
				<h1 class="h5 m-0">Edit list "News"</h1>
				<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 lh-1 rounded-circle fs-5"><i class="bi bi-gear"></i></span>News options and settings</a>
			</div><!-- /.d-flex -->
			<div class="saved-info position-relative" style="top:-1px">
				<div data-bs-theme="dark" class="alert alert-dismissible fade show border-0 bg-success m-0 rounded-0 border-0 text-white" role="alert">
					<strong>Your changes have been saved!</strong> You can now leave this page and view your edits on <a href="">your website</a>.
					<button type="button" class="btn-close p-3 bg-transparent" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
			<div class="center-col-inner overflow-auto flex-fill p-4">
				<div class="col-10 m-auto">

					<!-- /.Gallery -->
					<div class="list-wrap">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<h5 class="m-0">Gallery</h5>
							<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Add new image or video</a>
						</div>
						<div class="row row-cols-1 row-cols-md-3 row-cols-xl-5 g-3" data-masonry='{"percentPosition": true, "itemSelector": ".rz-element-list"}'>
							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-camera-reels"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> None
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

							<div class="rz-element-list">
								<div class="d-flex flex-column p-3 rounded border">
									<div class="w-100 relative">
										<div class="center-center">
											<div class="rounded-3 d-flex gap-1 bg-body p-1 border border-tertiary">
												<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
												<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
											</div>
										</div><!-- /.center-center -->
										<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded mb-2 border">
										<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
									</div><!-- /.w-100 -->
									<div class="my-2">
										<span class="small d-block"><span class="text-muted">Type:</span> <i class="bi bi-image"></i>
									</div>
									<div>
										<span class="small d-block"><span class="text-muted">Caption:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
									</div>
								</div><!-- /.d-flex -->
							</div><!-- /.rz-element-list -->

						</div><!-- /.row -->

					</div>
					<!-- /.gallery -->

					<!-- /.list-wrap for news list -->
					<div class="list-wrap">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h5 class="m-0">News List & blog list</h5>
							<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Add news article</a>
						</div>
						<div class="d-flex flex-column flex-md-row gap-4 align-items-start p-4 rounded border mb-2">
							<div style="width:64px;" class="flex-shrink-0 relative">
								<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded-2 border">
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
							</div>
							<div>
								<div class="rz-active-pulse-wrap small text-muted">
									<div class="rz-inactive-pulse"></div>Inactive
								</div>
								<span><span class="text-muted">Title:</span> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.<span class="small px-2 py-1 text-success-emphasis"></span></span><br>
								<span class="small"><span class="text-muted">Date Crated:</span> June 12, 2024</span>
							</div>
							<div class="rz-action-btns bg-body border border-tertiary p-1 rounded-3 ms-md-auto flex-shrink-0">
								<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
								<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
							</div><!-- /.rz-action-btns -->
						</div><!-- /.d-flex -->

					</div>
					<!-- /.list-wrap for news list -->

					<!-- /.list-wrap for hero/slider -->
					<div class="list-wrap">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h5 class="m-0">Slides</h5>
							<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Add slide</a>
						</div>
						<div class="d-flex flex-column flex-md-row gap-4 align-items-start p-4 rounded border mb-2">
							<div style="width:64px;" class="flex-shrink-0 relative">
								<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded-2 border">
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
							</div>
							<div>
								<p class="m-0"><span class="text-muted">Title:</span><span class="fw-semibold"> Fusce dapibus, tellus</span></p>
								<p class="m-0"><span class="text-muted">Subtitle:</span><span class="fw-semibold"> Nulla vitae elit libero, a pharetra augue.</span></p>
							</div>
							<div class="rz-action-btns bg-body border border-tertiary p-1 rounded-3 ms-md-auto flex-shrink-0">
								<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
								<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
							</div><!-- /.rz-action-btns -->
						</div>
					</div>
					<!-- /.list-wrap for quick links -->

					<!-- /.list-wrap for staff members -->
					<div class="list-wrap">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h5 class="m-0">Staff Member</h5>
							<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Add a staff member</a>
						</div>
						<div class="d-flex flex-column flex-md-row gap-4 align-items-start p-4 rounded border mb-2">
							<div style="width:64px;" class="flex-shrink-0 relative">
								<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded-2 border">
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
							</div>
							<div>
								<p class="m-0"><span class="text-muted">Name:</span><span class="fw-semibold"> Fusce dapibus, tellus</span></p>
								<p class="m-0"><span class="text-muted">Title:</span><span class="fw-semibold"> Nulla vitae elit libero, a pharetra augue.</span></p>
								<p class="m-0"><span class="text-muted">Bio:</span><span class="fw-semibold"> Malesuada Ridiculus Tristique Nibh Nulla vitae elit libero, a pharetra augue.</span></p>
								<p class="m-0 small"><span class="text-muted">Location:</span><span class="fw-semibold"> 123 street Detroit, MI</span><span class="text-muted"> Email:</span><span class="fw-semibold"> email@email.com</span><span class="text-muted"> Phone:</span><span class="fw-semibold"> 123-123-7827</span></p>
							</div>
							<div class="rz-action-btns bg-body border border-tertiary p-1 rounded-3 ms-md-auto flex-shrink-0">
								<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
								<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
							</div><!-- /.rz-action-btns -->
						</div>
					</div>
					<!-- /.list-wrap for quick links -->

					<!-- /.list-wrap for quick links -->
					<div class="list-wrap">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<h5 class="m-0">Quick Links</h5>
							<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg text-white"></i></span>Add quick link</a>
						</div>
						<div class="d-flex flex-column flex-md-row gap-4 align-items-start p-4 rounded border mb-2">
							<div style="width:64px;" class="flex-shrink-0 relative">
								<img src="/revize/_assets_/images/no-image-slider-2.jpg" alt="" class="rounded-2 border">
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">2</span>
							</div>
							<div>
								<div class="rz-active-pulse-wrap small text-muted">
									<div class="rz-inactive-pulse"></div>Inactive
								</div>
								<p class="m-0"><span class="text-muted">Title:</span><span class="fw-semibold"> Fusce dapibus, tellus</span></p>
								<p class="m-0"><span class="text-muted">Subtitle:</span><span class="fw-semibold"> Nulla vitae elit libero, a pharetra augue.</span></p>
								<p class="m-0"><span class="text-muted">Link:</span><span class="fw-semibold"> <a href="https://www.revize.com/">https://www.revize.com</a></span></p>
							</div>
							<div class="rz-action-btns bg-body border border-tertiary p-1 rounded-3 ms-md-auto flex-shrink-0">
								<span role="button" class="btn border border-tertiary rz-action-btns-edit"><i class="bi bi-pencil fs-5 lh-1"></i></span>
								<span role="button" class="btn border border-tertiary rz-action-btns-delete" data-bs-toggle="modal" data-bs-target="#confirmAction"><i class="bi bi-trash3 fs-5 lh-1 text-danger"></i></span>
							</div><!-- /.rz-action-btns -->
						</div>
						<!-- /.list-wrap for quick links -->

					</div><!-- /.list-wrap -->

				</div><!-- /.col-10 -->
			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->

	</div><!-- /.rz-admin-wrap -->

	<?php include "includes/footer.php"; ?>
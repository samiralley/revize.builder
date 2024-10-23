<?php include "includes/head.php"; ?>
	<div class="rz-admin-wrap d-flex flex-column h-100">
		<div class="header">
			<?php include "includes/header.php"; ?>
		</div><!-- /.header -->
		<div class="rz-admin-inner d-flex flex-fill overflow-auto">

			<?php include "includes/leftbar.php"; ?>			
			
			<div class="center-col-wrap w-100 d-flex flex-column">
				<div class="d-flex align-items-center justify-content-between border-bottom px-4 py-3">
					<h1 class="h5 m-0">Editing with revize.builder</h1>
					<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPagesSettings" aria-controls="offcanvasPagesSettings" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 bg-success lh-1 rounded-circle w-h-24"><i class="bi bi-gear"></i></span>Page settings</a>
				</div><!-- /.d-flex -->
				<div class="center-col-inner overflow-auto flex-fill p-4">
					<div class="col-10 m-auto">
						
						 
					</div><!-- /.col-10 -->
				</div><!-- /.center-col-inner -->
			</div><!-- /.center-col-wrap -->

			<div class="right-col-wrap col-3 d-flex flex-column border-start" style="width:400px">
				<div class="right-col-header">
					<ul class="nav nav-underline  border-bottom border-1 px-4 pt-1 bg-body" role="tablist">
						<li class="nav-item m-0" role="presentation">
							<button class="nav-link active" id="Elements-tab" data-bs-toggle="tab" data-bs-target="#elements-tab-pane" type="button" role="tab" aria-controls="Elements-tab-pane" aria-selected="true" style="margin-bottom:-1px">Elements</button>
						</li>
						<li class="nav-item m-0" role="presentation">
							<button class="nav-link" id="templates-tab" data-bs-toggle="tab" data-bs-target="#templates-tab-pane" type="button" role="tab" aria-controls="templates-tab-pane" aria-selected="false" style="margin-bottom:-1px" tabindex="-1">Templates</button>
						</li>
						<li class="nav-item m-0" role="presentation">
							<button class="nav-link" id="saved-tab" data-bs-toggle="tab" data-bs-target="#saved-tab-pane" type="button" role="tab" aria-controls="saved-tab-pane" aria-selected="false" style="margin-bottom:-1px" tabindex="-1">Saved</button>
						</li>
					</ul>
				</div><!-- /.right-col-header -->
				<div class="rz-meta-box p-4 border-bottom">
					<form class="w-100 align-self-center position-relative" role="search" aria-label="Elements Search" aria-labelledby="Search Site">
						<input class="form-control cursor-pointer ps-3" type="search" placeholder="Filter..." autocomplete="off">
						<button class="btn btn-link position-absolute top-50 end-0 translate-middle-y gap-3 ps-0 lh-1 d-flex align-items-center" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center" style="height:1rem "></span><i class="bi bi-search"></i></button>
					</form>
				</div>
				<div class="right-col-inner overflow-auto flex-fill d-flex flex-column">

					<div class="tab-content">
						
						<div class="tab-pane fade" id="saved-tab-pane" role="tabpanel" aria-labelledby="saved-tab" tabindex="0">
							<div class="rz-meta-box p-4 border-bottom">
								<h5 class="m-0">Saved</h5>
								<p class="form-text text-muted small m-0">Below are all your saved templates</p>
							</div><!-- /.rz-meta-box -->
							<div class="rz-meta-box p-4 m-0 row row-cols-xl-2 g-2">
								Saved templates here #todo
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
						
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
						
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
						
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
						
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
							</div>
						</div><!-- /.tab-pane -->
						
						<div class="tab-pane fade" id="templates-tab-pane" role="tabpanel" aria-labelledby="templates-tab" tabindex="0">
							<div class="rz-meta-box p-4 border-bottom">
								<h5 class="m-0">Templates</h5>
								<p class="form-text text-muted small m-0">Below are prebuilt sections for you to speed up your workflow.</p>
							</div><!-- /.rz-meta-box -->
							<div class="rz-meta-box p-4 m-0 row row-cols-xl-2 g-2">
								Pre built templates here #todo
								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded">
									</div>
									<p>name</p>
								</div>
							</div>
						</div><!-- /.tab-pane -->
						
						<div class="tab-pane fade show active overflow-hidden" id="elements-tab-pane" role="tabpanel" aria-labelledby="elements-tab" tabindex="0">

							<div class="rz-meta-box p-4 border-bottom">
								<h5 class="m-0">Elements</h5>
								<p class="form-text text-muted small m-0">Drag elements and place them where you want into the page</p>
							</div><!-- /.rz-meta-box -->

							<div class="rz-meta-box p-4 row row-cols-xl-2 g-2" id="draggableElements">

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-columns fs-4"></i>Column
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-list fs-4"></i>Row
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-columns-gap fs-4"></i>Section
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-textarea-t fs-4"></i>RTE
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button fs-4"></i>Accordion
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-list-ol fs-4"></i>Agenda List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-exclamation-circle fs-4"></i>Alert
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button-wide fs-4"></i>Anchor Buttons
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-chat fs-4"></i>Blog
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-shop-window fs-4"></i>Business thee Directory
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-hr fs-4"></i>Divider
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-image fs-4"></i>Fancy Box
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-image-fill fs-4"></i>Photo Gallery
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-image fs-4"></i>Hero
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-vignette fs-4"></i>Icon Link
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-building fs-4"></i>Job Post
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-tag fs-4"></i>Label
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-link fs-4"></i>Link List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-text fs-4"></i>Marquee
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-newspaper fs-4"></i>News List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-envelope fs-4"></i>Newsletter
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-link fs-4"></i>Quick Link
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-filetype-html fs-4"></i>Raw Html
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-textarea-t fs-4"></i>RTE
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-heading fs-4"></i>Section Header
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-file-image fs-4"></i>Single Image
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-images fs-4"></i>Slider
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-collection-play fs-4"></i>Social Icons
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-people fs-4"></i>Staff Directory
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-person fs-4"></i>Staff Member
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button-wide fs-4"></i>Submenu
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-segmented-nav fs-4"></i>Tabs
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn btn-outline-secondary text-start p-2 border-dash d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-quote fs-4"></i>Quote
										</div>
									</div>
								</div>

							</div><!-- /.rz-meta-box -->
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->

				</div><!-- /.right-col-inner -->
			</div><!-- /.right-col-wrap -->

		</div><!-- /.rz-admin-inner -->
	</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>			
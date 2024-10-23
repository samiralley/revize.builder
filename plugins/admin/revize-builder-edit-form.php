<?php include "includes/head.php"; ?>

<!-- #note no editing on smaller devices -->
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column vh-100 position-fixed bg-body d-xl-none" style="z-index:9999">
	<main class="px-3 container m-auto">
		<h1>Sorry <i class="bi bi-emoji-smile-upside-down ms-1"></i></h1>
		<p class="mb-4">You must be on a larger screen to use the revize.builder</p>
		<a href="#" class="btn btn-light">Login</a>
		<a href="#" class="btn btn-light">Go home</a>
		<a href="game.php" class="btn btn-dark border-dark bg-dark"><i class="bi bi-joystick me-2"></i>Play tic tac toe</a>
	</main>

	<footer class="mt-auto text-primary">
		<p class="m-0 small text-muted">&copy; <?php echo date("Y"); ?> by revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>
	</footer>
</div>
<!-- #note no editing on smaller devices -->

<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-lg-flex flex-fill overflow-auto">

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex align-items-center gap-1 border-bottom px-4 py-3">
				<h1 class="h5 m-0 me-auto">Editing with revize.builder</h1>
				<div class="savebtns ms-auto d-flex align-items-center gap-2">
					<a href="" class="btn btn-primary d-flex align-items-center justify-content-center">Publish</a>
					<a href="" class="btn btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>
				</div>
				<a href="" class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPagesSettings" aria-controls="offcanvasPagesSettings" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center flex-shrink-0 p-1 lh-1 w-h-24"><i class="bi bi-gear"></i></span>Page settings</a>
				<button class="icon-link icon-link-hover btn btn-outline-light d-flex align-items-center freeformPagesSettings"><span class="bi d-flex align-items-center flex-shrink-0 lh-1 rounded-circle fs-5 me-1"><i class="bi bi-layout-sidebar-inset-reverse"></i></span>Toggle elements</button>
			</div><!-- /.d-flex -->
			<div class="center-col-inner overflow-auto flex-fill p-5">

				<div class="section-create p-4 position-relative mb-2 border-dash-always">
					<p class="text-center m-0">Drag a row into here to create a new section</p>
				</div>

				<div class="section-created p-5 border rounded position-relative mb-2">
					<div class="row-create p-3 position-relative mb-2 border-dash-always">
						<p class="text-center m-0">Drag a row into here to add a new row in this section</p>
					</div>
					<i class="bi bi-grip-horizontal bg-light rounded-1 fs-5 align-content-center text-primary px-3 position-absolute center-top mt-2 cursor-grab"></i>
					<div class="section-settings position-absolute w-auto left-top">
						<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFormModal">Section Settings</a>
					</div><!-- /.section-settings -->
					<div class="row gap-2 row-created border-dash-always p-5 m-0 position-relative my-2">
						<i class="w-auto bi bi-grip-horizontal bg-light rounded-1 fs-5 align-content-center text-primary px-3 position-absolute center-top mt-2 cursor-grab"></i>
						<div class="row-settings position-absolute w-auto left-top">
							<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFormModal">Row Settings</a>
						</div><!-- /.row-settings -->
						<div class="col p-3 col-created bg-light border-dash-always gap-2 d-flex flex-column position-relative pt-5">
							<i class="w-auto bi bi-grip-horizontal bg-body rounded-1 fs-5 align-content-center text-primary px-3 position-absolute center-top mt-2 cursor-grab"></i>
							<div class="column-settings position-absolute w-auto left-top">
								<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFormModal">Column Settings</a>
							</div><!-- /.column-settings -->
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100">
								<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
								<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
									<i class="bi bi-menu-button fs-4"></i>Accordion
								</div>
							</div>
						</div><!-- /.col -->
						<div class="col p-3 col-created bg-light border-dash-always gap-2 d-flex flex-column position-relative pt-5">
							<i class="w-auto bi bi-grip-horizontal bg-body rounded-1 fs-5 align-content-center text-primary px-3 position-absolute center-top mt-2 cursor-grab"></i>
							<div class="column-settings position-absolute w-auto left-top">
								<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFormModal">Column Settings</a>
							</div><!-- /.column-settings -->

							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100">
								<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
								<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
									<i class="bi bi-menu-button fs-4"></i>Accordion
								</div>
							</div>
						</div><!-- /.col -->
						<div class="col p-3 col-created bg-light border-dash-always gap-2 d-flex flex-column position-relative pt-5">
							<i class="w-auto bi bi-grip-horizontal bg-body rounded-1 fs-5 align-content-center text-primary px-3 position-absolute center-top mt-2 cursor-grab"></i>
							<div class="column-settings position-absolute w-auto left-top">
								<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editFormModal">Column Settings</a>
							</div><!-- /.column-settings -->
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100">
								<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
								<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
									<i class="bi bi-menu-button fs-4"></i>Accordion
								</div>
							</div>
							<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100">
								<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
								<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
									<i class="bi bi-menu-button fs-4"></i>Accordion
								</div>
							</div>
						</div><!-- /.col -->
					</div><!-- /.row-created-->
					<div class="row-create p-3 position-relative border-dash-always">
						<p class="text-center m-0">Drag a row into here to add a new row in this section</p>
					</div>
				</div><!-- /.section-created -->

				<div class="section-create p-4 position-relative mb-2 border-dash-always">
					<p class="text-center m-0">Drag a row into here to create a new section</p>
				</div>

			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->

		<div class="right-col-wrap col-lg-3 d-flex flex-column border-start">

			<div class="right-col-header p-2">
				<ul class="nav nav-pills nav-fill rounded-2 p-1" role="tablist">
					<li class="nav-item m-0 rounded-1" role="presentation">
						<button class="nav-link active" id="Elements-tab" data-bs-toggle="tab" data-bs-target="#elements-tab-pane" type="button" role="tab" aria-controls="Elements-tab-pane" aria-selected="true">Elements</button>
					</li>
					<li class="nav-item m-0 rounded-1" role="presentation">
						<button class="nav-link" id="templates-tab" data-bs-toggle="tab" data-bs-target="#templates-tab-pane" type="button" role="tab" aria-controls="templates-tab-pane" aria-selected="false" tabindex="-1">Templates</button>
					</li>
					<li class="nav-item m-0 rounded-1" role="presentation">
						<button class="nav-link" id="saved-tab" data-bs-toggle="tab" data-bs-target="#saved-tab-pane" type="button" role="tab" aria-controls="saved-tab-pane" aria-selected="false" tabindex="-1">Saved</button>
					</li>
				</ul>
			</div><!-- /.right-col-header -->

			<div class="rz-meta-box px-2 pb-2 border-bottom">
				<form class="w-100 align-self-center position-relative" role="search" aria-label="Elements Search" aria-labelledby="Search Site">
					<input class="form-control cursor-pointer ps-3" type="search" placeholder="Filter..." autocomplete="off">
					<button class="btn btn-link position-absolute top-50 end-0 translate-middle-y gap-3 ps-0 lh-1 d-flex align-items-center" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center" style="height:1rem "></span><i class="bi bi-search"></i></button>
				</form>
			</div><!-- /.rz-meta-box -->

			<div class="right-col-inner overflow-auto flex-fill d-flex flex-column">

				<div class="tab-content">

					<div class="tab-pane fade show active" id="elements-tab-pane" role="tabpanel" aria-labelledby="elements-tab" tabindex="0">

						<div class="rz-meta-box p-4 border-bottom">
							<h5 class="m-0">Elements</h5>
							<p class="form-text text-muted small m-0">Drag elements and place them where you want into the page</p>
						</div><!-- /.rz-meta-box -->

						<div class="rz-meta-box p-4" id="draggableElements">

							<div class="row row-cols-2 g-2">

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-columns fs-4"></i>Column
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-list fs-4"></i>Row
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-columns-gap fs-4"></i>Section
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-textarea-t fs-4"></i>RTE
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button fs-4"></i>Accordion
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-list-ol fs-4"></i>Agenda List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-exclamation-circle fs-4"></i>Alert
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button-wide fs-4"></i>Anchor Buttons
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-chat fs-4"></i>Blog
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-shop-window fs-4"></i>Business thee Directory
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-hr fs-4"></i>Divider
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-image fs-4"></i>Fancy Box
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-image-fill fs-4"></i>Photo Gallery
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-image fs-4"></i>Hero
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-vignette fs-4"></i>Icon Link
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-building fs-4"></i>Job Post
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-tag fs-4"></i>Label
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-link fs-4"></i>Link List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-text fs-4"></i>Marquee
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-newspaper fs-4"></i>News List
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-envelope fs-4"></i>Newsletter
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-link fs-4"></i>Quick Link
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-filetype-html fs-4"></i>Raw Html
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-textarea-t fs-4"></i>RTE
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-card-heading fs-4"></i>Section Header
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-file-image fs-4"></i>Single Image
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-images fs-4"></i>Slider
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-collection-play fs-4"></i>Social Icons
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-people fs-4"></i>Staff Directory
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-person fs-4"></i>Staff Member
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-menu-button-wide fs-4"></i>Submenu
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-segmented-nav fs-4"></i>Tabs
										</div>
									</div>
								</div>

								<div class="d-flex">
									<div class="btn bg-body text-start p-2 border-dash-always hover-shadow d-flex w-100 h-100">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary"></i>
										<div class="d-flex w-100 flex-column text-center p-2 gap-2 justify-content-center small lh-sm">
											<i class="bi bi-quote fs-4"></i>Quote
										</div>
									</div>
								</div>

							</div><!-- /.row -->

						</div><!-- /.rz-meta-box -->

					</div><!-- /.tab-pane -->

					<div class="tab-pane fade" id="templates-tab-pane" role="tabpanel" aria-labelledby="templates-tab" tabindex="0">
						<div class="rz-meta-box p-4 border-bottom">
							<h5 class="m-0">Templates</h5>
							<p class="form-text text-muted small m-0">Below are prebuilt sections for you to speed up your workflow.</p>
						</div><!-- /.rz-meta-box -->
						<div class="rz-meta-box p-4">

							<div class="row row-cols-2 g-2">
								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

							</div><!-- /.row -->
						</div><!-- /.rz-meta-box -->
					</div><!-- /.tab-pane -->

					<div class="tab-pane fade" id="saved-tab-pane" role="tabpanel" aria-labelledby="saved-tab" tabindex="0">
						<div class="rz-meta-box p-4 border-bottom">
							<h5 class="m-0">Saved</h5>
							<p class="form-text text-muted small m-0">Below are all your saved templates</p>
						</div><!-- /.rz-meta-box -->
						<div class="rz-meta-box p-4">

							<div class="row row-cols-2 g-2">

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>

								<div>
									<div class="position-relative border-dash-always hover-shadow p-1">
										<i class="bi bi-grip-vertical bg-light rounded-1 fs-5 align-content-center text-primary position-absolute left-center ms-2"></i>
										<img src="_assets_/images/no-image-slider.jpg" alt="" class="rounded-1">
									</div>
									<p>name</p>
								</div>
							</div><!-- /.row -->
						</div><!-- /.rz-meta-box -->

					</div><!-- /.tab-pane -->

				</div><!-- /.tab-content -->

			</div><!-- /.right-col-inner -->

			<div class="rz-meta-box mt-auto shadow-sm border-top p-4 bg-body sticky-bottom">
				<div class="row row-cols-md-2 g-2 flex-wrap">
					<div class="mw-max-content">
						<a href="" class="btn w-100 btn-primary d-flex align-items-center justify-content-center">Publish</a>
					</div>

					<div class="mw-max-content">
						<a href="" class="btn w-100 btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.rz-meta-box -->

	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
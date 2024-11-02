<?php include "includes/head.php"; ?>
<!-- #note no editing on smaller devices -->
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column vh-100 position-fixed bg-white d-xl-none" style="z-index:1099">
		<main class="px-3 container m-auto">
			<h1>Sorry <i class="bi bi-emoji-smile-upside-down ms-1"></i></h1>
			<p class="mb-4">You must be on a larger screen to use the revize. header builder</p>
			<a href="#" class="btn btn-light">Login</a>
			<a href="#" class="btn btn-light">Go home</a>
			<a href="game.php" class="btn btn-dark border-dark bg-dark"><i class="bi bi-joystick me-2"></i>Play tic tac toe</a>
		</main>

		<footer class="mt-auto text-primary">
			<p class="m-0 small text-muted">© <?php echo date("Y"); ?> with <i class="bi bi-heart-fill"></i> by revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>
		</footer>
	</div>
<!-- #note no editing on smaller devices -->
<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-lg-flex flex-fill overflow-auto">

		<?php include "includes/leftbar.php"; ?>

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex align-items-center justify-content-between border-bottom px-4 py-3">
				<h1 class="h4 m-0">Header Builder</h1>
				<a href="" class="ms-auto icon-link icon-link-hover btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center justify-content-center flex-shrink-0 bg-light lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg"></i></span>Create a new header</a>
			</div><!-- /.d-flex -->
			<div class="center-col-inner overflow-auto flex-fill p-4">
				<div class="col-lg-12 m-auto">

				<div class="header-created mb-4">
					<div class="d-flex flex-wrap gap-1 align-items-center pb-3">
						<h5>Editing: Header Name</h5>
						<div class="w-100 d-xl-none"></div>
						<a href="" class="ms-auto btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
					</div>
					<div class="p-3 border rounded">
						<div class="header-top-for-alert d-flex gap-2 mb-2">
							<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
									<span class="fs-4 me-2 ki-duotone ki-information-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Alert
								</div>
							</div><!-- /.p-3 -->
						</div><!-- /.header-top-for-alert -->
						<div class="header-top d-flex gap-2">
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
									<span class="fs-4 me-2 ki-duotone ki-maximize"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>Search Input
								</div>
								<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
									<span class="fs-4 me-2 ki-duotone ki-heart"><span class="path1"></span><span class="path2"></span></span>Social
								</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Top center</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
									<span class="fs-4 me-2 ki-duotone ki-plus-square"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Font Sizer
								</div>
							</div><!-- /.p-3 -->
						</div><!-- /.header-top -->
						<div class="header-middle d-flex gap-2 my-2">
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Middle left</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 flex-fill bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
							<div class="text-nowrap">Middle center</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Middle right</div>
							</div><!-- /.p-3 -->
						</div><!-- /.header-middle -->
						<div class="header-bottom d-flex gap-2">
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Bottom left</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Bottom center</div>
							</div><!-- /.p-3 -->
							<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
									<span class="fs-4 me-2 ki-duotone ki-pencil"><span class="path1"></span><span class="path2"></span></span>RTE
								</div>
							</div><!-- /.p-3 -->
						</div><!-- /.header-bottom -->
						<div class="header-top-for-alert d-flex gap-2 mt-2">
							<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">For alert</div>
							</div><!-- /.p-3 -->
						</div><!-- /.header-top-for-alert -->
					</div><!-- /.p-3 -->
				</div><!-- /.header-created -->
				
					<div class="header-created mb-4">
						<div class="d-flex flex-wrap gap-1 align-items-center pb-3">
							<h5>Editing: Header Name</h5>
							<div class="w-100 d-xl-none"></div>
							<a href="" class="ms-auto btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
						</div>
						<div class="p-3 border rounded">
							<div class="header-top-for-alert d-flex gap-2 mb-2">
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">For alert</div>
								</div><!-- /.p-3 -->
							</div><!-- /.header-top-for-alert -->
							<div class="header-top d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Top right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.header-top -->
							<div class="header-middle d-flex gap-2 my-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Middle left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
								<div class="text-nowrap">Middle center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Middle right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.header-middle -->
							<div class="header-bottom d-flex gap-2">
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom left</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom center</div>
								</div><!-- /.p-3 -->
								<div class="p-3 gap-2 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">Bottom right</div>
								</div><!-- /.p-3 -->
							</div><!-- /.header-bottom -->
							<div class="header-bottom-for-alert d-flex gap-2 mt-2">
								<div class="p-3 gap-2 flex-fill flex-shrink-1 bg-light border-dash-always d-flex align-items-start flex-wrap align-content-start">
									<div class="text-nowrap">For alert</div>
								</div><!-- /.p-3 -->
							</div><!-- /.header-bottom-for-alert -->
						</div><!-- /.p-3 -->
					</div><!-- /.header-created -->

				</div><!-- /.col-lg-12 -->
			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->

		<div class="right-col-wrap col-12 col-lg-3 d-flex flex-column border-start">

			<div class="right-col-header">
				<div class="border-bottom border-1 p-3 bg-body">
					<h5 class="h6 mb-1">Header Elements</h5>
					<p class="m-0 small">Drag elements and place them where you want in the header</p>
				</div>
			</div><!-- /.right-col-header -->

			<div class="rz-meta-box p-3 border-bottom">
				<form class="w-100 align-self-center position-relative" role="search" aria-label="Elements Search" aria-labelledby="Search elements">
					<input class="form-control form-control-sm cursor-pointer ps-3" type="search" placeholder="Filter..." autocomplete="off">
					<button class="btn btn-sm btn-link text-body position-absolute top-50 end-0 translate-middle-y gap-2 ps-0 lh-1 d-flex align-items-center text-decoration-none" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center"></span><span class="text-body ki-duotone ki-magnifier fs-6"><span class="path1"></span><span class="path2"></span></span></button>
				</form>
			</div><!-- /.rz-meta-box -->

			<div class="right-col-inner overflow-auto flex-fill d-flex flex-column">

				<div class="col p-3">
					<div class="rz-meta-box row row-cols-xl-1 g-1" id="draggableElements">

						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-burger-menu"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>Main nav
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-picture"><span class="path1"></span><span class="path2"></span></span>Logo
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-magnifier"><span class="path1"></span><span class="path2"></span></span>Toggle
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-maximize"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>Search Input
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-message-text text-gray-900 fs-2tx"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Translate
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<i class="bi bi-universal-access-circle fs-6 me-2 p-1 rounded-pill lh-1 bg-secondary-subtle align-self-center"></i>ADA
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-fasten"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>Buttons
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-map"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Location
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-plus-square"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Font Sizer
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-sun"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span></span>Weather
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-heart"><span class="path1"></span><span class="path2"></span></span>Social
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-pencil"><span class="path1"></span><span class="path2"></span></span>RTE
							</div>
						</div>
						<div>
							<div class="btn bg-body text-start p-2 pe-3 border-dash-always hover-shadow d-flex align-items-center"><i class="bi bi-grip-vertical me-3 bg-light rounded-1 fs-5"></i>
								<span class="fs-4 me-2 ki-duotone ki-information-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>Alert
							</div>
						</div>

					</div><!-- /.rz-meta-box -->
				</div><!-- /.col -->

			</div><!-- /.right-col-inner -->

			<div class="rz-meta-box mt-auto shadow-sm border-top p-3 bg-body sticky-bottom">
				<div class="row row-cols-md-2 g-2 flex-wrap">
					<div class="mw-max-content">
						<a href="" class="btn btn-sm w-100 btn-primary d-flex align-items-center justify-content-center">Save header</a>
					</div>

					<div class="mw-max-content">
						<a href="" class="btn btn-sm w-100 btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>
					</div>
				</div><!-- /.row -->
			</div><!-- /.rz-meta-box -->

		</div><!-- /.right-col-wrap -->

	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
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
		<p class="m-0 small text-muted">© <?php echo date("Y"); ?> with <i class="bi bi-heart-fill"></i> by revize.,<a href="https://www.revize.com/privacy_policy.php" target="_blank">Terms of use</a></p>
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
				<h1 class="h4 m-0">Headers List</h1>
				<a href="" class="ms-auto icon-link icon-link-hover btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center justify-content-center flex-shrink-0 bg-light lh-1 rounded-circle w-h-24"><i class="bi bi-plus-lg"></i></span>Create a new header</a>
			</div><!-- /.d-flex -->
			<div class="center-col-inner overflow-auto flex-fill p-4">
				<div class="col-lg-12 m-auto">

					<div class="all-headers-created">

					<div class="header-created mb-4">
						<div class="border rounded mb-2 position-relative">
							<div class="rz-inactive-pulseactive-pulse-wrap position-absolute top-0 start-0 translate-middle">
								<div class="rz-inactive-pulse m-0 w-h-16"></div>
							</div>
							<div class="inactive-header d-flex flex-wrap gap-1 align-items-center px-4 py-3 border-bottom">
								<h5 class="m-0">Header Name</h5>
								<div class="w-100 d-xl-none"></div>
								<a href="" class="ms-xl-auto btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Edit styles</a>
								<a href="" class="btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Edit with builder</a>
								<a href="" class="btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
							</div>
							<div class="d-flex gap-4 align-items-center p-4">
								<div class="col-2 border-end"><div class="d-flex h-100">
									<i class="ki-duotone ki-cross fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
									<div><span class="text-muted">Active on:<br></span> No pages</div></div></div>
								<div class="col-2 border-end"><div class="d-flex h-100">
									<i class="ki-duotone ki-user-edit fs-4 me-3 mt-1"><span class="path1"></span><span class="path2"></span></i>
									<div><span class="text-muted">Crated by:<br></span> Samir Alley</div></div></div>
								<div class="col-2"><div class="d-flex h-100">
									<i class="ki-duotone ki-time fs-4 me-3"><span class="path1"></span><span class="path2"></span></i>
									<div><span class="text-muted">Created on:<br></span> Oct 12, 2027</div></div></div>
									<div class="col"><div class="d-flex alert alert-danger bg-body p-2 px-3 align-items-center">
									<i class="ki-duotone ki-information-4 fs-4 me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
									<div><span class="text-muted">Notes:<br></span> Used for testing headers and</div></div></div>
							</div><!-- /.d-flex -->
						</div><!-- /.card -->
					</div><!-- /.header-created -->
						
						<div class="header-created mb-4">
							<div class="border rounded mb-2 position-relative">
								<div class="rz-active-pulse-wrap position-absolute top-0 start-0 translate-middle">
									<div class="rz-active-pulse m-0 w-h-16"></div>
								</div>
								<div class="active-header d-flex flex-wrap gap-1 align-items-center px-4 py-3 border-bottom">
									<h5 class="m-0">Header Name</h5>
									<div class="w-100 d-xl-none"></div>
									<a href="" class="ms-xl-auto btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Edit styles</a>
									<a href="" class="btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Edit with builder</a>
									<a href="" class="btn btn-sm btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editFormModal">Export</a>
								</div>
								<div class="d-flex gap-4 align-items-center p-4">
									<div class="col-2 border-end"><div class="d-flex h-100">
										<i class="ki-duotone ki-cross fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
										<div><span class="text-muted">Active on:<br></span> No pages</div></div></div>
									<div class="col-2 border-end"><div class="d-flex h-100">
										<i class="ki-duotone ki-user-edit fs-4 me-3 mt-1"><span class="path1"></span><span class="path2"></span></i>
										<div><span class="text-muted">Crated by:<br></span> Samir Alley</div></div></div>
									<div class="col-2"><div class="d-flex h-100">
										<i class="ki-duotone ki-time fs-4 me-3"><span class="path1"></span><span class="path2"></span></i>
										<div><span class="text-muted">Created on:<br></span> Oct 12, 2027</div></div></div>
										<div class="col"><div class="d-flex alert alert-success bg-body p-2 px-3 align-items-center">
											<i class="ki-duotone ki-information-4 fs-4 me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
											<div><span class="text-muted">Notes:<br></span> Used for testing headers and</div></div></div>
								</div><!-- /.d-flex -->
							</div><!-- /.card -->
						</div><!-- /.header-created -->

					</div><!-- /.all-headers-created -->

				</div><!-- /.col-lg-12 -->
			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->

	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-flex flex-fill overflow-auto">

		<?php include "includes/leftbar.php"; ?>

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex border-bottom p-3 px-lg-4 py-lg-4">
				<h1 class="h4 m-0">Dashboard Home</h1>
			</div><!-- /.d-flex -->
			<div class="center-col-inner overflow-auto flex-fill">
				<div class="col-md-12 m-auto">

					<div class="admin-content w-100 position-relative p-0 py-3 p-md-5">

							<div class="container-fluid">
								
								<div class="row">
									<div class="col-12">
										<h2 class="mb-4 h5">Quick actions</h2>
										<div class="d-flex flex-wrap flex-xl-nowrap align-items-stretch justify-content-between pb-5 gap-2">
											<a href="" class="border text-body bg-body text-start icon-link icon-link-hover btn btn-outline-light btn-lg w-100 d-flex align-items-center gap-2 fw-semibold" style="--bs-icon-link-transform: none;"><i class="w-auto h-auto bi bi-question-circle fs-4"></i>Support Portal
												<i class="w-auto h-auto bi bi-arrow-right ms-auto lh-1 bg-light p-3 rounded-circle d-flex align-items-center justify-content-center" style="--bs-icon-link-transform: rotate(-45deg);"></i></a>

											<a href="" class="border text-body bg-body text-start icon-link icon-link-hover btn btn-outline-light btn-lg w-100 d-flex align-items-center gap-2 fw-semibold" style="--bs-icon-link-transform: none;"><i class="w-auto h-auto bi-window fs-4"></i>Back To Website
												<i class="w-auto h-auto bi bi-arrow-right ms-auto lh-1 bg-light p-3 rounded-circle d-flex align-items-center justify-content-center" style="--bs-icon-link-transform: rotate(-45deg);"></i></a>

											<a href="" class="border text-body bg-body text-start icon-link icon-link-hover btn btn-outline-light btn-lg w-100 d-flex align-items-center gap-2 fw-semibold" data-bs-target="#offcanvasFriendly" aria-controls="offcanvasFriendly" style="--bs-icon-link-transform: none;"><i class="w-auto h-auto bi-link-45deg fs-4"></i>Create Friendly Links
												<i class="w-auto h-auto bi bi-arrow-right ms-auto lh-1 bg-light p-3 rounded-circle d-flex align-items-center justify-content-center text-body" style="--bs-icon-link-transform: rotate(-45deg);"></i></a>
										</div><!-- /.d-flex -->
									</div><!-- /.col-12 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="col-12">
										<h2 class="mb-4 h5 d-flex align-items-center"><i class="bi bi-stars fs-2 me-2 text-primary"></i>Upgrade</h2>
										<div class="card mb-5 overflow-hidden position-relative">
											<div class="row g-0">
												<div class="col-lg-4 col-xl-3 d-flex align-items-center justify-content-center flex-shrink-0 bg-light" style="background:var(--bs-dark);min-height:200px">
													<h3 class="text-body text-center flex-shrink-0">revize.<span class="text-primary">Pro</span></h3>
												</div>
												<div class="col-lg-8 col-xl-9">
													<div class="card-body p-5 d-xl-flex gap-5 justify-content-between align-items-center h-100">
														<div>
															<h5 class="card-title">Get the full benefits of your website</h5>
															<p class="card-text small text-muted mb-3 mb-xl-0">Upgrade to revize. pro and get access to tons of new features and options across your website with no limits</p>
														</div>
														<a href="" class="stretched-link btn btn-primary mw-max-content" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUpgrade" aria-controls="offcanvasUpgrade">Compare the difference</a>
													</div>
												</div>
											</div>
										</div><!-- /.card -->
									</div><!-- /.col-12 -->
									<h2 class="mb-4 h5">Latest Stats</h2>
									<div class="col-xl pb-3">
										<div class="card h-100">
											<div class="p-5 d-flex gap-3">
												<i class="bi bi-people fs-1 lh-1 text-primary"></i>
												<div>
													<div class="h2">Users</div>
													<p class="m-0 text-muted">A detailed list of all current users on your website, including both editors and admins. <span>Users with them email @revize.com are for our support team</span></p>
												</div>
											</div><!-- /.p-5 -->
											<ul class="list-group list-group-flush border-bottom-0">
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center">Jamie <div class="d-inline-flex bg-success-subtle rounded-3 px-2 py-1 small">Admin</div>
												</li>
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center">Samir <div class="d-inline-flex bg-info-subtle rounded-3 px-2 py-1 small">Editor</div>
												</li>
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center">Ray <div class="d-inline-flex bg-info-subtle rounded-3 px-2 py-1 small">Editor</div>
												</li>
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center">Billy Bob <div class="d-inline-flex bg-info-subtle rounded-3 px-2 py-1 small">Editor</div>
												</li>
											</ul>
											<div class="card-footer border-top mt-auto bg-transparent p-3 px-5 d-flex align-items-center gap-3 justify-content-between flex-wrap flex-md-nowrap">
												<a href="" class="btn btn-link btn-sm mw-min-content p-0 d-flex align-items-center justify-content-md-center gap-2 text-dark text-decoration-none"><i class="bi bi-person-plus fs-5"></i> Add Users</a>
												<div class="vr d-none d-md-inline-block flex-shrink-0"></div>
												<a href="" class="btn btn-link btn-sm mw-min-content p-0 d-flex align-items-center justify-content-md-center gap-2 text-dark text-decoration-none"><i class="bi bi-person-dash fs-5"></i> Remove Users</a>
												<div class="vr d-none d-md-inline-block flex-shrink-0"></div>
												<a href="" class="btn btn-link btn-sm mw-min-content p-0 d-flex align-items-center justify-content-md-center gap-2 text-dark text-decoration-none"><i class="bi bi-people fs-5"></i> Manage Users</a>
											</div>

										</div><!-- /.card -->
									</div><!-- /.col-xl -->
									<div class="col-xl pb-3">
										<div class="card h-100">
											<div class="p-5 d-flex gap-3">
												<i class="bi bi-pie-chart fs-1 lh-1 text-primary"></i>
												<div>
													<div class="h2">Stats</div>
													<p class="m-0 text-muted">The total number of pages and documents available across your entire website, providing a comprehensive view of your site's content and resources.</p>
												</div>
											</div><!-- /.p-5 -->
											<ul class="list-group list-group-flush border-bottom-0">
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center"><span class="h2"><i class="bi bi-file-earmark me-3 align-bottom"></i>47</span>Total Pages
												</li>
												<li class="list-group-item p-3 px-5 d-flex justify-content-between align-items-center"><span class="h2"><i class="bi bi-file-earmark-pdf me-3 align-bottom"></i>354</span>Total Documents
												</li>
											</ul>
											<div class="card-footer border-top mt-auto bg-transparent p-3 px-5 d-flex align-items-center gap-3 justify-content-between flex-wrap flex-md-nowrap">
												<a href="" class="btn btn-link btn-sm mw-min-content p-0 d-flex align-items-center justify-content-md-center gap-2 text-dark text-decoration-none"><i class="bi bi-eye-slash fs-5"></i> Hidden Pages</a>
												<div class="vr d-none d-md-inline-block flex-shrink-0"></div>
												<a href="" class="btn btn-link btn-sm mw-min-content  p-0 d-flex align-items-center justify-content-md-center gap-2 text-dark text-decoration-none"><i class="bi bi-link-45deg fs-5"></i> Friendly Links</a>
												<div class="vr d-none d-md-inline-block flex-shrink-0"></div>
												<a href="" class="btn btn-link btn-sm mw-min-content p-0 d-flex align-items-center justify-content-md-center content-center gap-2 text-dark text-decoration-none"><i class="bi bi-archive fs-5"></i> File Manager</a>
											</div><!-- /.card-footer -->
										</div><!-- /.card -->
									</div><!-- /.col-xl -->
								</div><!-- /.row -->
							</div><!-- /.container -->

 					</div><!-- admin-content -->

				</div><!-- /.col-10 -->
			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->
	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
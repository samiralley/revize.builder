<!-- #done -->
<div class="offcanvas offcanvas-end offcanvas-job-item"
	tabindex="-1"
	id="jobPost"
	aria-labelledby="jobPostLabel">
	<div class="offcanvas-header bg-light p-4 px-lg-5">
		<h5 class="offcanvas-title"
			id="jobPostLabel">Job Details</h5>
		<button type="button"
			class="btn-close me-2 bg-white"
			data-bs-dismiss="offcanvas"
			aria-label="Close"></button>
	</div>
	<div class="offcanvas-body p-0">

		<div class="p-4 p-lg-5">
			<div class="d-flex align-items-start">
				<p class="h3 m-0 fs-3"><small class="fs-6 text-muted fw-bold">Position</small><br>Police Program Assistant sed do eiusmod</p>
				<span class="btn btn-link btn-lg ms-auto"
					id="saveItemBtn"
					tabindex="0">
					<i class="bi bi-heart text-danger ms-auto cursor-pointer"></i>
				</span>
				<span class="btn btn-link btn-lg"
					data-bs-toggle="modal"
					data-bs-target="#shareModal"
					tabindex="0">
					<i class="bi bi-share text-body"></i>
				</span>
			</div>
		</div><!-- /.p-4 -->

		<div class="job-details">
			<div class="bg-light p-4 p-lg-5">
				<div class="row row-cols-1 row-cols-sm-2 g-2">
					<p class="d-flex gap-3 align-items-center">
						<i class="bi bi-building flex-shrink-0 d-flex align-items-center justify-content-center text-primary bg-white rounded-circle w-h-48 fs-5 border border-primary"></i>
						<span>
							<strong class="small text-muted lh-1">Department</strong><br>
							City Police
						</span>
					</p>
					<p class="d-flex gap-3 align-items-center">
						<i class="bi bi-currency-dollar flex-shrink-0 d-flex align-items-center justify-content-center text-primary bg-white rounded-circle w-h-48 fs-5 border border-primary"></i>
						<span>
							<strong class="small text-muted lh-1">Salary</strong><br>
							$70,000
						</span>
					</p>
					<p class="d-flex gap-3 align-items-center">
						<i class="bi bi-geo-alt flex-shrink-0 d-flex align-items-center justify-content-center text-primary bg-white rounded-circle w-h-48 fs-5 border border-primary"></i>
						<span>
							<strong class="small text-muted lh-1">Work Environment</strong><br>
							In-Person
						</span>
					</p>
					<p class="d-flex gap-3 align-items-center">
						<i class="bi bi-clock flex-shrink-0 d-flex align-items-center justify-content-center text-primary bg-white rounded-circle w-h-48 fs-5 border border-primary"></i>
						<span>
							<strong class="small text-muted lh-1">Posted</strong><br>
							16 Days Ago
						</span>
					</p>
				</div><!-- /.row -->

				<a href="#"
					class="btn btn-primary mt-lg-4">
					<i class="bi bi-box-arrow-up-right me-2"></i>Apply Now
				</a>
			</div><!-- /.bg-light -->

			<div class="bg-white p-4 p-lg-5">
				<p class="mb-1 small bg-success-subtle text-success-emphasis p-1 px-2 m-0 border-radius d-inline-flex"><small><i class="bi bi-exclamation-circle"></i> Urgent Hire</small></p>
				<p class="fs-4">Full Job Description</p>
				<div class="job-full-details">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div><!-- /.full-details -->
			</div><!-- /.bg-white -->
		</div><!-- /#job-details -->
	</div><!-- /.offcanvas-body -->
</div><!-- /.offcanvas -->

<div class="toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 m-4"
	id="savedItem"
	role="alert"
	aria-live="assertive"
	aria-atomic="true">
	<div class="d-flex">
		<div class="toast-body">
			Added to your favorites!
			<a href=""
				class="text-light">See all here</a>
		</div>
		<button type="button"
			class="btn-close btn-close-white me-2 m-auto"
			data-bs-dismiss="toast"
			aria-label="Close"></button>
	</div>
</div><!-- /.toast -->
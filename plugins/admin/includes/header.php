	<div class="rz-admin-header p-2 bg-body border-bottom">
		<div class="d-flex align-items-center">

			<a href="./"><img loading="lazy" src="/plugins/builder/assets/images/r.png" class="rz-editform-logo"></a>

			<div class="d-flex align-items-stretch ms-auto gap-2">
				<?php include "includes/theme-switcher.php"; ?>

				<a href="https://support.revize.com/" class="btn btn-sm px-2 btn-light border-0 align-content-center lh-1"
					data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Get your questions answered quickly by one of our tech support specialists!" data-bs-title="Have Questions?"><i class="bi bi-headset fs-5"></i>
				</a>
				<a href="https://intercom.help/revizefaqs/en/" class="btn btn-sm px-2 btn-light border-0 align-content-center lh-1" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Check out our FAQ's to get answers in no time." data-bs-title="Need Help?"><i class="fa-solid fa-circle-question fs-5"></i>
				</a>
				<a href="" class="btn btn-light border-0 btn-sm d-none d-lg-flex gap-2 align-items-center lh-1"><i class="bi bi-arrow-return-right fs-5"></i> Back to Website
				</a>

				<button class="btn btn-sm px-2 btn-light border-0 align-content-center lh-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#rznavOffcanvas" aria-controls="rznavOffcanvas">
					<i class="fa-solid fa-bars fs-5"></i>
				</button>
				
				<div class="dropdown bd-mode-toggle">
					<button class="btn btn-light dropdown-toggle d-flex align-items-center p-0" id="user-profile-drop" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Profile">
						<img src="_assets_/images/user.png" class="bg-light rounded-2 border-1" style="height:36px">
					</button>
					<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
						<li><span class="dropdown-item-text h6">Hello! Username</span></li>
						<li><hr class="dropdown-divider"></li>
						<li>
							<li><a href="" class="dropdown-item p ">
								<i class="bi bi-person me-3 fs-4"></i>Account
							</a>
							</li>
							<li>
							<a href="" class="dropdown-item">
								<i class="bi bi-lock me-3 fs-4"></i>Change Password
							</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
							<a href="" class="dropdown-item">
								<i class="bi bi-door-closed me-3 fs-4"></i>Sign out
							</a>
							</li>
					</ul>
				</div>
				
			</div><!-- /.d-flex -->

		</div><!-- /.d-flex -->
	</div><!-- /.rz-admin-header -->
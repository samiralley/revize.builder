<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-lg-flex flex-fill overflow-y-auto overflow-x-hidden">

		<div class="center-col-wrap w-100 d-flex flex-column bg-body">
			<div class="d-flex align-items-center border-bottom p-3 gap-1">
				<h1 class="h5 m-0">Editing page</h1>
				<div class="savebtns ms-auto d-flex align-items-center gap-1">
					<a href="" class="btn btn-sm btn-primary d-flex align-items-center justify-content-center">Publish</a>
					<a href="" class="btn btn-sm btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>					
				</div>
				<button class="icon-link icon-link-hover btn btn-sm btn-outline-light d-flex align-items-center freeformPagesSettings"><span class="bi d-flex align-items-center flex-shrink-0 lh-1 rounded-circle fs-5 me-1"><i class="bi bi-layout-sidebar-inset-reverse"></i></span>Toggle settings</button>
			</div><!-- /.d-flex -->
			<div data-bs-theme="light" class="center-col-inner overflow-y-auto overflow-x-hidden flex-fill p-4 bg-light">
				<div class="col-xl-8 m-auto">

					<div class="rz-meta-box" data-bs-theme="light">

						<input type="text" class="form-control form-control-lg border-0 fs-1 fw-bold py-5 px-0 text-body outline-0 shadow-none mb-2 bg-transparent" id="metatitle" placeholder="Type a page title here...">
						
						<p class="text-muted">Page Content</p>

						<textarea aria-label="Page content" rows="30" class="form-control" placeholder="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla."></textarea>
						
					<p class="p-2 pb-0 m-0 v-small text-muted">© <?php echo date("Y"); ?> with <i class="bi bi-heart-fill"></i> by revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>

					</div><!-- /.rz-meta-box -->

				</div><!-- /.col-xl-10 -->

			</div><!-- /.center-col-inner -->

			<div class="sticky-bottom border-top d-flex py-1 bg-light px-3 align-items-center bg-body">
				<p class="mt-2 mb-1 h6 d-flex align-items-center">
					<span class="fs-2 d-flex align-items-center justify-content-center bg-primary text-white rounded-circle me-2 p-2">
					<i class="ki-duotone ki-bucket text-gray-900 fs-2tx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					</span>Get much more flexibility with the revize.builder</p>
				<div class="upgrade text-center ms-auto">
					<a href="" class="btn btn-sm btn-warning d-block" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUpgrade" aria-controls="offcanvasUpgrade">Learn More</a>
				</div>
			</div><!-- /.sticky-bottom -->

		</div><!-- /.center-col-wrap -->


		<div class="right-col-wrap d-flex flex-column border-start">

			<div class="right-col-header border-bottom border-1 bg-body p-3 fw-bold h6 m-0">
				Page Settings
			</div><!-- /.right-col-header -->

			<div class="right-col-inner overflow-auto flex-fill d-flex flex-column">

				<div class="rz-meta-box border-bottom p-3 small lh-sm">

					<div class="mb-2 d-flex align-items-center">
						<label class="form-check-label mw-max-content pe-4" for="selectFooter">Header</label>
						<select id="selectFooter" class="form-control form-control-sm form-select form-select-sm">
							<option selected="">Secondary</option>
							<option>Main</option>
						</select>
					</div>

					<div class="d-flex align-items-center">
						<label class="form-check-label mw-max-content pe-4" for="selectHeader">Footer</label>
						<select id="selectHeader" class="form-control form-control-sm form-select form-select-sm">
							<option selected="">Main</option>
							<hr>
							<option>Parks</option>
							<option>Police</option>
							<option>Fire</option>
						</select>
					</div>

				</div><!-- /.rz-meta-box -->

				<div class="rz-meta-box border-bottom p-3 small">
					<h6 class="m-0">Metadata</h6>
					<p class="form-text text-success-emphasis v-small mb-2">Learn More about Metadata <a href="https://web.dev/learn/html/metadata" target="_blank" class="text-success-emphasis">here</a></p>
					<label for="metatitle" class="form-label mb-1">Meta Title</label>
					<input type="text" class="form-control form-control-sm mb-2" id="metatitle" placeholder="City of...">

					<label for="metaDescription" class="form-label mb-1">Meta Description</label>
					<input type="text" class="form-control form-control-sm mb-2" id="metaDescription" placeholder="City of...">

					<label for="metarobots" class="form-label mb-1">Robots</label>
					<select id="metarobots" class="form-control form-control-sm form-select form-select-sm mb-2">
						<option selected="">index, follow</option><!-- /.default -->
						<option>noindex, nofollow</option>
						<option>noindex, follow</option>
						<option>index, nofollow</option>
					</select>

					<label for="openGraphImg" class="form-label mb-1">Open Graph Image</label>
					<input type="file" class="form-control form-control-sm" id="openGraphImg" placeholder="City of...">

				</div><!-- /.rz-meta-box -->

				<div class="rz-meta-box border-bottom p-3 small lh-sm">

					<h6 class="mb-3">Options</h6>
					<div class="form-check form-switch ps-0 mb-2">
						<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideFlyout">
						<label class="form-check-label" for="hideFlyout">Hide Left Navigation</label>
					</div>

					<div class="form-check form-switch ps-0 mb-2">
						<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="sendNotifications">
						<label class="form-check-label" for="sendNotifications">Send Notifications</label>
					</div>

					<div class="form-check form-switch ps-0 mb-2">
						<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideSlider">
						<label class="form-check-label" for="hideSlider">Hide Slider</label>
					</div>

					<div class="mb-2">
						<label class="form-label mb-1" for="breadcrumbsPosition">Breadcrumbs position</label>
						<select id="breadcrumbsPosition" class="form-control form-control-sm form-select form-select-sm" style="">
							<option selected="">Above page title</option>
							<option>Below page title</option>
						</select>
					</div>

					<div>
						<label class="form-label mb-1" for="titlePosition">Page title position</label>
						<select id="titlePosition" class="form-control form-control-sm form-select form-select-sm" style="">
							<option selected="">Above content</option><!-- /.default -->
							<option>Over hero/slider</option>
						</select>
					</div>

				</div><!-- /.rz-meta-box -->

				<div class="rz-meta-box p-3">
					<h6 class="mb-0">Published</h6>
					<div class="d-flex v-small my-2 align-items-start gap-1">
						<i class="bi bi-clock me-1"></i>
						<div><span class="text-muted">Last Updated by: </span>Jamie :) on June 12, 2024 <a href="">View History</a></div>
					</div>

					<div class="d-flex v-small my-2 align-items-start gap-1">
						<i class="bi bi-clock me-1"></i>
						<div><span class="text-muted">Last Updated: </span>No updates made yet</div>
					</div>
				</div><!-- /.rz-meta-box -->

			</div><!-- /.right-col-inner -->

			<div class="rz-meta-box mt-auto shadow-sm border-top p-3 bg-body sticky-bottom">
				<div class="row row-cols-2 g-2 flex-wrap">
					<div class="mw-max-content">
						<a href="" class="btn btn-sm w-100 btn-primary d-flex align-items-center justify-content-center px-0">Publish</a>
					</div>

					<div class="mw-max-content">
						<a href="" class="btn btn-sm w-100 btn-outline-light d-flex align-items-center justify-content-center px-0">Save as draft</a>
					</div>
				</div><!-- /.row -->
			</div><!-- /.rz-meta-box -->

		</div><!-- /.right-col-wrap -->

	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
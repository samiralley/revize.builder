
<!-- #note not in use -->
<div class="offcanvas offcanvas-end show static" style="--bs-offcanvas-width:500px" tabindex="-1" id="offcanvasFreeformPagesSettings" aria-labelledby="offcanvasFreeformPagesSettingsLabel">
	<div class="offcanvas-header border-bottom">
		<h5 class="offcanvas-title" id="offcanvasFreeformPagesSettingsLabel">Page Settings</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body p-0 d-flex flex-column">

		<div class="rz-meta-box border-bottom p-3">
			<h6 class="m-0">Metadata</h6>
			<p class="form-text text-success-emphasis v-small mb-2">Learn More about Metadata <a href="https://web.dev/learn/html/metadata" target="_blank" class="text-success-emphasis">here</a></p>
			<label for="metatitle" class="form-label small mb-1">Meta Title</label>
			<input type="text" class="form-control form-control-sm mb-2" id="metatitle" placeholder="City of...">

			<label for="metaDescription" class="form-label small mb-1">Meta Description</label>
			<input type="text" class="form-control form-control-sm mb-2" id="metaDescription" placeholder="City of...">

			<label for="metarobots" class="form-label small mb-1">Robots</label>
			<select id="metarobots" class="form-control form-control-sm form-select form-select-sm mb-2">
				<option selected="">index, follow</option><!-- /.default -->
				<option>noindex, nofollow</option>
				<option>noindex, follow</option>
				<option>index, nofollow</option>
			</select>

			<label for="openGraphImg" class="form-label small mb-1">Open Graph Image</label>
			<input type="file" class="form-control form-control-sm" id="openGraphImg" placeholder="City of...">

		</div><!-- /.rz-meta-box -->

		<div class="rz-meta-box border-bottom p-3">

			<h6 class="mb-3">Options</h6>
			<div class="form-check form-switch ps-0 small mb-2">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideFlyout">
				<label class="form-check-label" for="hideFlyout">Hide Left Navigation</label>
			</div>

			<div class="form-check form-switch ps-0 small mb-2">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="sendNotifications">
				<label class="form-check-label" for="sendNotifications">Send Notifications</label>
			</div>

			<div class="form-check form-switch ps-0 small mb-2">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideSlider">
				<label class="form-check-label" for="hideSlider">Hide Slider</label>
			</div>

			<div class="mb-2 d-flex align-items-center">
				<label class="form-check-label w-100 small" for="breadcrumbsPosition">Breadcrumbs position</label>
				<select id="breadcrumbsPosition" class="form-control form-control-sm form-select form-select-sm" style="">
					<option selected="">Above page title</option>
					<option>Below page title</option>
				</select>
			</div>

			<div class="mb-2 d-flex align-items-center">
				<label class="form-check-label w-100 small" for="titlePosition">Page title position</label>
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
		
		<div class="rz-meta-box mt-auto shadow-sm border-top p-3 bg-body sticky-bottom">
			<div class="row row-cols-md-2 g-2 flex-wrap">
				<div class="mw-max-content">
					<a href="" class="icon-link btn w-100 btn-dark d-flex align-items-center justify-content-center"><span class="bi d-flex align-items-center flex-shrink-0 p-1 text-success rounded-circle w-h-24">Publish</a>
				</div>
				<div class="mw-max-content">
					<a href="" class="icon-link btn w-100 btn-outline-light d-flex align-items-center justify-content-center"><span class="bi d-flex align-items-center flex-shrink-0 p-1 text-danger rounded-circle w-h-24">Save as draft</a>
				</div>
			</div>
		</div><!-- /.rz-meta-box -->

	</div><!-- /.offcanvas-body -->
</div><!-- /.offcanvas -->
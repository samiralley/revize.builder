<!-- #done -->
<div class="offcanvas offcanvas-start" style="--bs-offcanvas-width:380px" tabindex="-1" id="offcanvasPagesSettings" aria-labelledby="offcanvasPagesSettingsLabel">
	<div class="offcanvas-header border-bottom">
		<h6 class="offcanvas-title" id="offcanvasPagesSettingsLabel">Page Settings</h6>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body p-0 d-flex flex-column">

		<div class="rz-meta-box border-bottom p-3 small lh-sm">

			<div class="mb-2 d-flex align-items-center">
				<label class="form-check-label mw-max-content pe-4 small" for="selectFooter">Header</label>
				<select id="selectFooter" class="form-control form-control-sm form-select form-select-sm">
					<option selected="">Secondary</option>
					<option>Main</option>
				</select>
			</div>

			<div class="mb-2 d-flex align-items-center">
				<label class="form-check-label mw-max-content pe-4 small" for="selectHeader">Footer</label>
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
			<label for="metatitle" class="form-label mb-1 small">Meta Title</label>
			<input type="text" class="form-control form-control-sm mb-2" id="metatitle" placeholder="City of...">

			<label for="metaDescription" class="form-label mb-1 small">Meta Description</label>
			<input type="text" class="form-control form-control-sm mb-2" id="metaDescription" placeholder="City of...">

			<label for="metarobots" class="form-label mb-1 small">Robots</label>
			<select id="metarobots" class="form-control form-control-sm form-select form-select-sm mb-2">
				<option selected="">index, follow</option><!-- /.default -->
				<option>noindex, nofollow</option>
				<option>noindex, follow</option>
				<option>index, nofollow</option>
			</select>

			<label for="openGraphImg" class="form-label mb-1 small">Open Graph Image</label>
			<input type="file" class="form-control form-control-sm" id="openGraphImg" placeholder="City of...">

		</div><!-- /.rz-meta-box -->

		<div class="rz-meta-box border-bottom p-3 small lh-sm">

			<h6 class="mb-3">Options</h6>
			<div class="form-check form-switch ps-0 mb-2 small">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideFlyout">
				<label class="form-check-label" for="hideFlyout">Hide Left Navigation</label>
			</div>

			<div class="form-check form-switch ps-0 mb-2 small">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="sendNotifications">
				<label class="form-check-label" for="sendNotifications">Send Notifications</label>
			</div>

			<div class="form-check form-switch ps-0 mb-2 small">
				<input class="form-check-input float-end me-0" type="checkbox" role="switch" id="hideSlider">
				<label class="form-check-label" for="hideSlider">Hide Slider</label>
			</div>

			<div class="mb-2 d-flex">
				<label class="form-check-label mw-max-content pe-4 small" for="breadcrumbsPosition">Breadcrumbs<br>position</label>
				<select id="breadcrumbsPosition" class="form-control form-control-sm form-select form-select-sm" style="">
					<option selected="">Above page title</option>
					<option>Below page title</option>
				</select>
			</div>

			<div class="mb-2 d-flex">
				<label class="form-check-label mw-max-content pe-4 small" for="titlePosition">Page title <br>position</label>
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

	</div><!-- /.offcanvas-body -->
	<div class="rz-meta-box mt-auto shadow-sm border-top p-3 bg-body sticky-bottom">
		<div class="row row-cols-md-2 g-2 flex-wrap">
			<div class="mw-max-content">
				<a href="" class="btn w-100 btn-primary d-flex align-items-center justify-content-center">Publish</a>
			</div>
			<div class="mw-max-content">
				<a href="" class="btn w-100 btn-outline-light d-flex align-items-center justify-content-center">Save as draft</a>
			</div>
		</div><!-- /.row -->
	</div><!-- /.rz-meta-box -->
</div><!-- /.offcanvas -->
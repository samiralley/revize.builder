<div class="rz-edit-form">

	<ul class="nav nav-underline border-bottom border-1 px-4 px-lg-5 bg-body sticky-top" id="rzTab" role="tablist">
		<li class="nav-item m-0" role="presentation">
			<button class="nav-link active" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit-tab-pane" type="button" role="tab" aria-controls="edit-tab-pane" aria-selected="true" style="margin-bottom:-1px">Edit</button>
		</li>
		<li class="nav-item m-0" role="presentation">
			<button class="nav-link" id="layout-tab" data-bs-toggle="tab" data-bs-target="#layout-tab-pane" type="button" role="tab" aria-controls="layout-tab-pane" aria-selected="false" style="margin-bottom:-1px">Layout</button>
		</li>
		<li class="nav-item m-0" role="presentation">
			<button class="nav-link" id="animations-tab" data-bs-toggle="tab" data-bs-target="#animations-tab-pane" type="button" role="tab" aria-controls="animations-tab-pane" aria-selected="false" style="margin-bottom:-1px">Animations</button>
		</li>
		<li class="nav-item m-0" role="presentation">
			<button class="nav-link" id="advanced-tab" data-bs-toggle="tab" data-bs-target="#advanced-tab-pane" type="button" role="tab" aria-controls="advanced-tab-pane" aria-selected="false" style="margin-bottom:-1px">Advanced</button>
		</li>
	</ul>

	<div class="container-fluid p-4 px-lg-5">
		<div class="row">

			<div class="tab-content">
				<div class="tab-pane fade show active" id="edit-tab-pane" role="tabpanel" aria-labelledby="edit-tab" tabindex="0">

					<label class="form-label w-100">Row options for columns</label>
					<div class="row-btns-options btn-group mb-3" role="group" aria-label="Rows options">
						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio1" autocomplete="off" checked>
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="2 column" class="btn btn-outline-light" for="btnradio1">
							<svg width="32" height="28" viewBox="0 0 69 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="69" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio2" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="2 equal" class="btn btn-outline-light" for="btnradio2">
							<svg width="32" height="28" viewBox="0 0 69 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="33" height="28" rx="6" fill="#111" />
								<rect x="36" width="33" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio3" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="8/12 4/12" class="btn btn-outline-light" for="btnradio3">
							<svg width="32" height="28" viewBox="0 0 68 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="43" height="28" rx="6" fill="#111" />
								<rect x="47" width="21" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio4" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="3 equal" class="btn btn-outline-light" for="btnradio4">
							<svg width="32" height="28" viewBox="0 0 66 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="20" height="28" rx="6" fill="#111" />
								<rect x="23" width="20" height="28" rx="6" fill="#111" />
								<rect x="46" width="20" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio5" autocomplete="off">
						<label class="btn btn-outline-light" for="btnradio5">
							<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="4 equal" width="32" height="28" viewBox="0 0 65 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="14" height="28" rx="6" fill="#111" />
								<rect x="17" width="14" height="28" rx="6" fill="#111" />
								<rect x="34" width="14" height="28" rx="6" fill="#111" />
								<rect x="51" width="14" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio6" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="4/12 8/12" class="btn btn-outline-light" for="btnradio6">
							<svg width="32" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="20" height="28" rx="6" fill="#111" />
								<rect x="23" width="44" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio7" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="3/12 6/12 3/12" class="btn btn-outline-light" for="btnradio7"><svg width="32" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="15" height="28" rx="6" fill="#111" />
								<rect x="52" width="15" height="28" rx="6" fill="#111" />
								<rect x="18" width="31" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio8" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="5 equal" class="btn btn-outline-light" for="btnradio8"><svg width="32" height="28" viewBox="0 0 60 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="10" height="28" rx="5" fill="#111" />
								<rect x="12" width="10" height="28" rx="5" fill="#111" />
								<rect x="24" width="10" height="28" rx="5" fill="#111" />
								<rect x="36" width="10" height="28" rx="5" fill="#111" />
								<rect x="48" width="10" height="28" rx="5" fill="#111" />
							</svg>
						</label>
						
						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio9" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="6 equal" class="btn btn-outline-light" for="btnradio9"><svg width="32" height="28" viewBox="0 0 70 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="10" height="28" rx="5" fill="#111" />
								<rect x="12" width="10" height="28" rx="5" fill="#111" />
								<rect x="24" width="10" height="28" rx="5" fill="#111" />
								<rect x="36" width="10" height="28" rx="5" fill="#111" />
								<rect x="48" width="10" height="28" rx="5" fill="#111" />
								<rect x="60" width="10" height="28" rx="5" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio10" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="2/12 8/12 2/12" class="btn btn-outline-light" for="btnradio10"><svg width="32" height="28" viewBox="0 0 60 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="10" height="28" rx="5" fill="#111" />
								<rect x="50" width="10" height="28" rx="5" fill="#111" />
								<rect x="13" width="34" height="28" rx="6" fill="#111" />
							</svg>
						</label>

						<input type="radio" class="btn-check btn-check-default" name="btnradio" id="btnradio11" autocomplete="off">
						<label data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="2/12 2/12 2/12 6/12" class="btn btn-outline-light" for="btnradio11"><svg width="32" height="28" viewBox="0 0 69 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="10" height="28" rx="5" fill="#111" />
								<rect x="13" width="10" height="28" rx="5" fill="#111" />
								<rect x="26" width="10" height="28" rx="5" fill="#111" />
								<rect x="39" width="30" height="28" rx="6" fill="#111" />
							</svg>
						</label>
					</div><!-- /.row-btns-options -->

					<form class="d-flex row">
						<div class="mb-3 col-lg-6">
							<label class="form-label" for="title">Title</label>
							<input type="text" class="form-control" id="title" placeholder="Title here">
						</div>
						<div class="mb-3 col-lg-6">
							<label class="form-label" for="subtitle">Subtitle</label>
							<input type="text" class="form-control" id="subtitle" placeholder="Something simple">
						</div>
						<div class="mb-3 col-lg-12">
							<label class="form-label" for="content">Content RTE</label>
							<textarea class="form-control" id="Content" rows="10"></textarea>
						</div>
						<div class="mb-3 col-lg-12">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Default checkbox
								</label>
							</div>
							<div class="form-check form-switch form-check-inline">
								<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								<label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
							</div>
						</div>
						<div class="mb-3 col-lg-12">
							<label for="formFile" class="form-label">Default file input example</label>
							<input class="form-control" type="file" id="formFile">
						</div>

					</form>

				</div><!-- /.tab-pane -->

				<div class="tab-pane fade" id="layout-tab-pane" role="tabpanel" aria-labelledby="layout-tab" tabindex="0">

					<form>

						<div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-3 mb-5">
							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="tabsLayoutOptions" id="tabsDefaultLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="tabsDefaultLayout">
									<img loading="lazy" src="../../plugins/builder/assets/images/tab-default.png" class="w-75 m-auto rounded-1">
									<span class="mt-auto">Tabs</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="tabsLayoutOptions" id="tabsPillsLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="tabsPillsLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/tab-pills.png" class="w-75 m-auto rounded-1">
									<span class="mt-auto">Pills</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="tabsLayoutOptions" id="tabsUnderlineLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="tabsUnderlineLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/tab-underline.png" class="w-75 m-auto rounded-1">
									<span class="mt-auto">Underline</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<p class="w-100 text-center small text-info-emphasis"><i class="bi bi-info-circle me-2"></i>Layouts my vary depending on your website design</p>

						</div><!-- /.row -->

						<div class="row row-cols-1 g-3 mb-5">
							Would be nice to have file uploader look like this
							<div class="uploader">
								<a href="" class="icon-link icon-link-hover btn bg-none border-dash border-dash-always p-5 d-flex align-items-center flex-column gap-4" style="--bs-icon-link-transform: rotate(90deg);"><span class="bi d-flex align-items-center justify-content-center flex-shrink-0 bg-success lh-1 rounded-circle w-h-64"><i class="text-white bi bi-plus-lg fs-4"></i></span>Upload file</a>
							</div>
						</div>

						<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3 mb-5">
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType1" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType1">
									<img loading="lazy" src="_assets_/images/borders/arc-divider.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType2" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType2">
									<img loading="lazy" src="_assets_/images/borders/arch-divider.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType3" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType3">
									<img loading="lazy" src="_assets_/images/borders/arrow.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType4" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType4">
									<img loading="lazy" src="_assets_/images/borders/book.svg" class="w-75 mauto rounded1001" ->
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType5" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType5">
									<img loading="lazy" src="_assets_/images/borders/bubble-divider.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType6" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType6">
									<img loading="lazy" src="_assets_/images/borders/bubble-side-divider.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType7" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType7">
									<img loading="lazy" src="_assets_/images/borders/curve-divider.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType8" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType8">
									<img loading="lazy" src="_assets_/images/borders/curve.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType9" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType9">
									<img loading="lazy" src="_assets_/images/borders/double-bubble.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType10" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType10">
									<img loading="lazy" src="_assets_/images/borders/frame-4.svg" class="w-75 100 r-ounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType11" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType11">
									<img loading="lazy" src="_assets_/images/borders/grunge-divider-3.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType12" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType12">
									<img loading="lazy" src="_assets_/images/borders/intersecting-curves.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType13" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType13">
									<img loading="lazy" src="_assets_/images/borders/intersecting-tilt-angles.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType14" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType14">
									<img loading="lazy" src="_assets_/images/borders/intersecting-wave-layers.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType15" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType15">
									<img loading="lazy" src="_assets_/images/borders/intersecting-waves-scattered.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType16" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType16">
									<img loading="lazy" src="_assets_/images/borders/intersecting-waves-split.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType17" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType18">
									<img loading="lazy" src="_assets_/images/borders/layered-arch.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType19" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType19">
									<img loading="lazy" src="_assets_/images/borders/layered-curves.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType20" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType20">
									<img loading="lazy" src="_assets_/images/borders/layered-slants.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType21" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType21">
									<img loading="lazy" src="_assets_/images/borders/layered-triangle.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType22" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType22">
									<img loading="lazy" src="_assets_/images/borders/layered-wave.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType23" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType23">
									<img loading="lazy" src="_assets_/images/borders/mountain-divider.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType24" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType24">
									<img loading="lazy" src="_assets_/images/borders/oval-halves-inverse.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType25" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType25">
									<img loading="lazy" src="_assets_/images/borders/oval-halves.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType26" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType26">
									<img loading="lazy" src="_assets_/images/borders/pyramid-divider.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType27" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType27">
									<img loading="lazy" src="_assets_/images/borders/slant-divider.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType28" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType28">
									<img loading="lazy" src="_assets_/images/borders/slope-asymmetrical-divider.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType29" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType29">
									<img loading="lazy" src="_assets_/images/borders/split.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType30" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType30">
									<img loading="lazy" src="_assets_/images/borders/triangle-slope-divider-inverse.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType31" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType31">
									<img loading="lazy" src="_assets_/images/borders/waves-2-large.svg" class="w-100 m-auto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>
							<div class="d-flex flex-columns">
								<input type="radio" class="btn-check" name="borderOptions" id="borderType32" autocomplete="off">
								<label class="w-100 btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="borderType32">
									<img loading="lazy" src="_assets_/images/borders/waves.svg" class="w-75 mauto rounded-1">
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

						</div><!-- /.row -->

						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-3 mb-5">
							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="accordionLayoutOptions" id="accordionBoxedLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="accordionBoxedLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/accordion.png" class="w-50 m-auto rounded-1">
									<span class="mt-auto">Default</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="accordionLayoutOptions" id="accordionFlushLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="accordionFlushLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/accordion-flush.png" class="w-50 m-auto rounded-1">
									<span class="mt-auto">Flush</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<p class="w-100 text-center small text-info-emphasis"><i class="bi bi-info-circle me-2"></i>Layouts my vary depending on your website design</p>

						</div><!-- /.row -->

						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mb-5">
							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="cardLayoutOptions" id="verticalLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="verticalLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/card-vertical.jpg" class="w-75 m-auto rounded-1">
									<span class="mt-auto">Vertical</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="cardLayoutOptions" id="horizontalLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="horizontalLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/card-horizontal.jpg" class="m-auto rounded-1">
									<span class="mt-auto">Horizontal</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="cardLayoutOptions" id="noimgLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="noimgLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/card-no-img.jpg" class="m-auto rounded-1">
									<span>No Image</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="cardLayoutOptions" id="overlayLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="overlayLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/card-overlay.jpg" class="m-auto rounded-1">
									<span class="mt-auto">Overlay</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<p class="w-100 text-center small text-info-emphasis"><i class="bi bi-info-circle me-2"></i>Layouts my vary depending on your website design</p>

						</div><!-- /.row -->

						<div class="row row-cols-1 row-cols-md-1 row-cols-lg-5 g-3 mb-5">

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="navOptions" id="qlinkHorizontalStackedLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="qlinkHorizontalStackedLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/qlink-horizontal-stacked.png" class="m-auto">
									<span class="mt-auto">Stacked Image</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="navOptions" id="qlinkHorizontalLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="qlinkHorizontalLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/qlink-horizontal.png" class="m-auto">
									<span class="mt-auto">Horizontal</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="navOptions" id="qlinkOverflowLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="qlinkOverflowLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/qlink-overflow.png" class="m-auto">
									<span>Overflow</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="navOptions" id="qlinkOverflowLeftLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="qlinkOverflowLeftLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/qlink-overflow-left.png" class="m-auto">
									<span>Overflow Left</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="navOptions" id="qlinkStackedLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="qlinkStackedLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/qlink-stacked.png" class="m-auto">
									<span class="mt-auto">Stacked</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<p class="w-100 text-center small text-info-emphasis"><i class="bi bi-info-circle me-2"></i>All quick links have the option to add a background image and an icon. Layouts my vary depending on your website design</p>

						</div><!-- /.d-flex -->

						<div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 g-3 mb-5">

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="sliderNavOptions" id="navDefaultLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="navDefaultLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/nav-default.png" class="m-auto rounded-1">
									<span class="mt-auto">Default</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="sliderNavOptions" id="navCenterLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="navCenterLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/nav-center.png" class="m-auto rounded-1">
									<span>Center</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div class="d-flex flex-column">
								<input type="radio" class="btn-check" name="sliderNavOptions" id="navOverlayLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="navOverlayLayout">
									<img loading="lazy" src="/plugins/builder/assets/images/nav-overflow.png" class="m-auto rounded-1">
									<span class="mt-auto">Overflow</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<p class="w-100 text-center small text-info-emphasis"><i class="bi bi-info-circle me-2"></i>Layouts my vary depending on your website design</p>

						</div><!-- /.d-flex -->

						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mb-5">
							<div>
								<input type="radio" class="btn-check" name="layoutOptions" id="masonryLayout" autocomplete="off" checked>
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="masonryLayout">
									<svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
										<path fill-rule="evenodd" d="M39 47a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h13Zm16-22a1 1 0 0 1 1 1v23a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V26a1 1 0 0 1 1-1h12Zm-33 5a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V31a1 1 0 0 1 1-1h13Zm17-10a1 1 0 0 1 1 1v23a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V21a1 1 0 0 1 1-1h13ZM22 8a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h13Zm33 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h12ZM39 8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h13Z"></path>
									</svg>

									<span>Masonry</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div>
								<input type="radio" class="btn-check" name="layoutOptions" id="gridLayout" autocomplete="off">
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="gridLayout">
									<svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
										<path fill-rule="evenodd" d="M22 42a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V43a1 1 0 0 1 1-1h13Zm17 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V43a1 1 0 0 1 1-1h13Zm16 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V43a1 1 0 0 1 1-1h12ZM22 25a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V26a1 1 0 0 1 1-1h13Zm17 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V26a1 1 0 0 1 1-1h13Zm16 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V26a1 1 0 0 1 1-1h12ZM22 8a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h13Zm17 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h13Zm16 0a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h12Z" clip-rule="evenodd"></path>
									</svg>
									<span>Grid</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div>
								<input type="radio" class="btn-check" name="layoutOptions" id="carouselLayout" autocomplete="off">
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="carouselLayout">
									<svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
										<path fill-rule="evenodd" d="M22 21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V22a1 1 0 0 1 1-1h13Zm17 0a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1H26a1 1 0 0 1-1-1V22a1 1 0 0 1 1-1h13Zm16 0a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1H43a1 1 0 0 1-1-1V22a1 1 0 0 1 1-1h12Zm4.302 7.307a1.016 1.016 0 0 1 1.455 0l2.64 2.71a2.126 2.126 0 0 1 0 2.967l-2.64 2.709c-.402.41-1.053.41-1.455 0a1.063 1.063 0 0 1 0-1.484l1.911-1.967a1.063 1.063 0 0 0 0-1.484l-1.911-1.967a1.063 1.063 0 0 1 0-1.484Zm-54.604 0c.403.41.403 1.074 0 1.484l-1.911 1.967a1.063 1.063 0 0 0 0 1.484l1.911 1.967c.403.41.403 1.074 0 1.484-.402.41-1.053.41-1.455 0l-2.64-2.71a2.127 2.127 0 0 1 0-2.967l2.64-2.709a1.016 1.016 0 0 1 1.455 0Z"></path>
									</svg>
									<span>Carousel</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

							<div>
								<input type="radio" class="btn-check" name="layoutOptions" id="listLayout" autocomplete="off">
								<label class="btn btn-outline-dark py-4 flex-column gap-3 d-flex justift-content-center align-items-center" for="listLayout">
									<svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
										<path fill-rule="evenodd" d="M47 42a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H17a1 1 0 0 1-1-1V43a1 1 0 0 1 1-1h30Zm0-17a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H17a1 1 0 0 1-1-1V26a1 1 0 0 1 1-1h30Zm0-17a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H17a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h30Z"></path>
									</svg>
									<span>List</span>
									<i class="bi bi-check-circle-fill position-absolute top-0 start-100 translate-middle"></i>
								</label>
							</div>

						</div><!-- /.row -->

						<!-- #note depending on what option is checked above will display below -->
						<div id="masonryOptions">
							<h5>Masonry Options</h5>
							<div class="row g-3">
								<div class="col-md-6">
									<label for="masonryRows" class="form-label">Rows</label>
									<select id="masonryRows" class="form-control form-select">
										<option selected>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
									<div class="form-text">
										Max number of rows is 6 to insure readability
									</div>
								</div>
								<div class="col-md-6">
									<label for="masonryGap" class="form-label">Gap</label>
									<select id="masonryGap" class="form-control form-select">
										<option selected>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									<div class="form-text">
										The gap between items within the Masonry layout
									</div>
								</div>
							</div>
						</div><!-- /#masonryOptions -->

						<div id="gridOptions">
							<h5>Grid Options</h5>
							<div class="row g-3">
								<div class="col-md-6">
									<label for="gridRows" class="form-label">Rows</label>
									<select id="gridRows" class="form-control form-select">
										<option selected>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									<div class="form-text">
										Max number of rows is 6 to insure readability
									</div>
								</div>
								<div class="col-md-6">
									<label for="gridGap" class="form-label">Gap</label>
									<select id="gridGap" class="form-control form-select">
										<option selected>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									<div class="form-text">
										The gap between items within the Masonry layout
									</div>
								</div>
							</div>
						</div><!-- /#gridOptions -->

						<div id="carouselOptions">
							<h5>Carousel Options</h5>
							<div class="row g-3">
								<div class="col-md-6">
									<label for="carouselItemsDesktop" class="form-label">Items to show on desktop</label>
									<input type="number" max="8" id="carouselItemsDesktop" value="6" class="form-control">
									<div class="form-text">
										Max number is 8 to insure readability
									</div>
								</div>

								<div class="col-md-6">
									<label for="coolCounter" class="form-label">use this counter</label>
									<div class="quantity">
										<input type="number" min="1" max="300" step="1" value="1" id="coolCounter">
									</div>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsTablet" class="form-label">Items to show on tablet</label>
									<input type="number" max="3" id="carouselItemsTablet" value="2" class="form-control">
									<div class="form-text">
										Max number is 3 to insure readability
									</div>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsMobile" class="form-label">Items to show on mobile</label>
									<input type="number" max="2" id="carouselItemsMobile" value="1" class="form-control">
									<div class="form-text">
										Max number is 2 to insure readability
									</div>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsGap" class="form-label">Gap between each item</label>
									<input type="text" id="carouselItemsGap" value="16" class="form-control">
									<div class="form-text">
										This is the gap between each item
									</div>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsControls" class="form-label">Show Arrows</label>
									<select id="carouselItemsControls" class="form-control form-select">
										<option selected>Yes</option>
										<option>No</option>
									</select>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsNav" class="form-label">Show Navigation Dots</label>
									<select id="carouselItemsNav" class="form-control form-select">
										<option selected>Yes</option>
										<option>No</option>
									</select>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsPlay" class="form-label">Auto Play</label>
									<select id="carouselItemsPlay" class="form-control form-select">
										<option selected>Yes</option>
										<option>No</option>
									</select>
									<div class="form-text">
										If yes there will a play/pause button for ADA compliance
									</div>
								</div>

								<div class="col-md-6">
									<label for="carouselItemsMode" class="form-label">Slide or Fade</label>
									<select id="carouselItemsMode" class="form-control form-select">
										<option selected>Slide</option>
										<option>Fade</option>
									</select>
								</div>

							</div>
						</div><!-- /#carouselOptions -->

					</form>

				</div><!-- /.tab-pane -->
				<div class="tab-pane fade" id="animations-tab-pane" role="tabpanel" aria-labelledby="animations-tab" tabindex="0">
					<h5>Animate on scroll</h5>
					<div class="row">
						<div class="mb-3 col-md-12">
							<div class="form-check form-switch">
								<input type="checkbox" class="form-check-input" id="animate" name="animate">
								<label class="form-check-label" for="animate">Animate</label>
							</div>
						</div>
						<div class="mb-3 col-md">
							<label class="form-label" for="animationDelay">Animation delay</label>
							<input type="number" class="form-control" id="animationDelay" placeholder="500">
						</div>
						<div class="mb-3 col-md">
							<label class="form-label" for="animateStyle">Animate Style</label>
							<select aria-label="Default select example" class="form-control form-select" id="animateStyle">
								<option value="fade">fade</option>
								<option value="fade-up">fade-up</option>
								<option value="fade-down">fade-down</option>
								<option value="fade-left">fade-left</option>
								<option value="fade-right">fade-right</option>
								<option value="fade-up-right">fade-up-right</option>
								<option value="fade-up-left">fade-up-left</option>
								<option value="fade-down-right">fade-down-right</option>
								<option value="fade-down-left">fade-down-left</option>
								<option value="flip-up">flip-up</option>
								<option value="flip-down">flip-down</option>
								<option value="flip-left">flip-left</option>
								<option value="flip-right">flip-right</option>
								<option value="slide-up">slide-up</option>
								<option value="slide-down">slide-down</option>
								<option value="slide-left">slide-left</option>
								<option value="slide-right">slide-right</option>
								<option value="zoom-in">zoom-in</option>
								<option value="zoom-in-up">zoom-in-up</option>
								<option value="zoom-in-down">zoom-in-down</option>
								<option value="zoom-in-left">zoom-in-left</option>
								<option value="zoom-in-right">zoom-in-right</option>
							</select>
						</div>
					</div><!-- /.row -->
					<div class="alert alert-info bg-body d-flex align-items-start gap-2" role="alert">
						<i class="bi bi-info-circle flex-shrink-0 me-2"></i>
						<div> Subtle animations are an effective way to capture a user's attention. However, avoid overdoing them, as it could lead to accessibility issues.
						</div>
					</div>
				</div><!-- /.tab-pane -->

				<div class="tab-pane fade" id="advanced-tab-pane" role="tabpanel" aria-labelledby="advanced-tab" tabindex="0">

					<div class="row">
						<div class="mb-3 col-lg-12">
							<label class="form-label" for="screenDisplayOptionsShowHide">Screen display options (show/hide)</label>
							<select aria-label="Default select example" class="form-control form-select" id="screenDisplayOptionsShowHide">
								<option value="Hidden on all">Hidden on all</option>
								<option value="Hidden only on xs">Hidden only on xs</option>
								<option value="Hidden only on sm">Hidden only on sm</option>
								<option value="Hidden only on md">Hidden only on md</option>
								<option value="Hidden only on lg">Hidden only on lg</option>
								<option value="Hidden only on xl">Hidden only on xl</option>
								<option value="Hidden only on xxl">Hidden only on xxl</option>
								<option value="Visible on all">Visible on all</option>
								<option value="Visible only on xs">Visible only on xs</option>
								<option value="Visible only on sm">Visible only on sm</option>
								<option value="Visible only on md">Visible only on md</option>
								<option value="Visible only on lg">Visible only on lg</option>
								<option value="Visible only on xl">Visible only on xl</option>
								<option value="Visible only on xxl">Visible only on xxl</option>
							</select>
						</div>

						<div class="mb-3 col-md-6">
							<label for="transformY" class="form-label">transformY</label>
							<input type="text" id="transformY" class="form-control">
							<div class="form-text">
								Learn More <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translateY" target="_blank">Here</a>
							</div>
						</div>

						<div class="mb-3 col-md-6">
							<label for="transformX" class="form-label">transformX</label>
							<input type="text" id="transformX" class="form-control">
							<div class="form-text">
								Learn More <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform-function/translateX" target="_blank">Here</a>
							</div>
						</div>

						<div class="mb-3 col-md-6">
							<label for="forzindex" class="form-label">z-index</label>
							<input type="text" id="forzindex" class="form-control">
						</div>

						<div class="mb-3 col-md-6">
							<label for="forClass" class="form-label">Class</label>
							<input type="text" id="forClass" class="form-control">
						</div>

						<div class="mb-3 col-md-6">
							<label for="forID" class="form-label">ID</label>
							<input type="text" id="forID" class="form-control">
						</div>

					</div><!-- /.row -->

				</div><!-- /.tab-pane -->
			</div><!-- /.tab-content -->

		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /.rz-edit-form -->
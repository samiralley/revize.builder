<!-- #done -->
<div class="rz-element-wrapper rz-wizard-wrapper has-edit-buttons">
	<div class="center-center">
		<div class="rz-btns-container">
			<span class="rzBtn rzBtn-sm">Edit</span>
		</div>
	</div>

	<div class="rz-wizard">

		<ul class="nav justify-content-around" id="wizardTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first-tab-pane" type="button" role="tab" aria-controls="first-tab-pane" aria-selected="true">1</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second-tab-pane" type="button" role="tab" aria-controls="second-tab-pane" aria-selected="false">2</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third-tab-pane" type="button" role="tab" aria-controls="third-tab-pane" aria-selected="false">3</button>
			</li>
		</ul>
		<div class="tab-content" id="wizardContent">
			<div class="tab-pane fade show active" id="first-tab-pane" role="tabpanel" aria-labelledby="first-tab" tabindex="0">
				<h3 class="mb-5 text-center">Select an option</h3>
				<div class="row row-cols-md-2 row-cols-lg-4 g-2">
					<div>
						<input type="radio" class="btn-check" name="options-1" id="option1" autocomplete="off" checked>
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option1"><i class="bi bi-credit-card fs-1"></i>Pay</label>
					</div>
					<div>
						<input type="radio" class="btn-check" name="options-1" id="option2" autocomplete="off">
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option2"><i class="bi bi-ui-radios fs-1"></i>Apply for</label>
					</div>
					<div>
						<input type="radio" class="btn-check" name="options-1" id="option3" autocomplete="off">
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option3"><i class="bi bi-person-raised-hand fs-1"></i>Get help with</label>
					</div>
					<div>
						<input type="radio" class="btn-check" name="options-1" id="option4" autocomplete="off">
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option4"><i class="bi bi-play-fill fs-1"></i>Watch</label>
					</div>
				</div><!-- /.row -->
				<div class="d-flex justify-content-end gap-2 pt-4">
					<a href="" class="btn btn-outline-light">Back</a>
					<a href="" class="btn btn-primary">Next</a>
				</div><!-- /.d-flex -->
			</div><!-- /.tab-pane -->
			<div class="tab-pane fade" id="second-tab-pane" role="tabpanel" aria-labelledby="second-tab" tabindex="0">
				<h3 class="mb-5 text-center">Select an option</h3>
				<div class="row row-cols-md-2 row-cols-lg-4 g-2 justify-content-center">
					<div>
						<input type="radio" class="btn-check" name="options-2" id="option5" autocomplete="off" checked>
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option5"><i class="bi bi-person-raised-hand fs-1"></i>Dog License</label>
					</div>
					<div>
						<input type="radio" class="btn-check" name="options-2" id="option6" autocomplete="off">
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option6"><i class="bi bi-car-front fs-1"></i>Parking Citation</label>
					</div>
					<div>
						<input type="radio" class="btn-check" name="options-2" id="option7" autocomplete="off">
						<label class="btn btn-outline-light d-flex flex-column fs-5 gap-2 h-100 justify-content-center p-5" for="option7"><i class="bi bi-p-circle fs-1"></i>Parking Permit</label>
					</div>
				</div><!-- /.row -->
				<div class="d-flex justify-content-end gap-2 pt-4">
					<a href="" class="btn btn-outline-light">Back</a>
					<a href="" class="btn btn-primary">Next</a>
				</div><!-- /.d-flex -->
			</div><!-- /.tab-pane -->
			<div class="tab-pane fade text-center" id="third-tab-pane" role="tabpanel" aria-labelledby="third-tab" tabindex="0">
				<div class="border p-5">
					<p>Public Records Request</p>
					<a class="btn btn-primary">Get help</a>
				</div>
				<div class="d-flex justify-content-end gap-2 pt-4">
					<a href="" class="btn btn-outline-light">Back</a>
					<a href="" class="btn btn-primary">Next</a>
				</div><!-- /.d-flex -->
			</div><!-- /.tab-pane -->
		</div><!-- /.tab-content -->

	</div><!-- /.rz-wizard-wrap -->

</div><!-- /.rz-element-wrapper -->
<script>
	const tabEl = document.querySelector('#third-tab')
	tabEl.addEventListener('shown.bs.tab', event => {
		$('#wizardTab').addClass('all-active')
	})
	tabEl.addEventListener('hide.bs.tab', event => {
		$('#wizardTab').removeClass('all-active')
	})
</script>
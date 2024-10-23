<div class="modal modal-xl fade" id="editFormModal" tabindex="-1" aria-labelledby="editFormModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header px-4 py-4 px-lg-5 py-lg-4 border-0">
				<h3 class="modal-title h5 lh-1 mt-2" id="editFormModalLabel">Edit form title</h3>
				<button type="button" class="btn-close m-0 mt-2 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-0">
				<!-- #note all edit forms in here  -->
				<?php include "../builder/edit-forms/editform.php"; ?>
			</div>
			<div class="modal-footer px-4 px-lg-5">
				<button type="button" class="btn link text-dark" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

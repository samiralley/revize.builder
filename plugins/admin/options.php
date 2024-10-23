<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">
	<div class="header">
		<?php include "includes/header.php"; ?>
	</div><!-- /.header -->
	<div class="rz-admin-inner d-flex flex-fill overflow-auto">

		<?php include "includes/leftbar.php"; ?>

		<div class="center-col-wrap w-100 d-flex flex-column">
			<div class="d-flex border-bottom px-4 py-4">
				<h1 class="h4 m-0">Site Options</h1>
			</div><!-- /.d-flex -->
			<ul class="nav nav-underline border-bottom border-1 px-4" role="tablist">
				<li class="nav-item m-0" role="presentation">
					<button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="general-tab-pane" aria-selected="true" style="margin-bottom:-1px">General</button>
				</li>
				<li class="nav-item m-0" role="presentation">
					<button class="nav-link" id="styles-tab" data-bs-toggle="tab" data-bs-target="#styles-tab-pane" type="button" role="tab" aria-controls="styles-tab-pane" aria-selected="false" style="margin-bottom:-1px">Styles</button>
				</li>
				<li class="nav-item m-0" role="presentation">
					<button class="nav-link" id="scripts-tab" data-bs-toggle="tab" data-bs-target="#scripts-tab-pane" type="button" role="tab" aria-controls="scripts-tab-pane" aria-selected="false" style="margin-bottom:-1px">Scripts</button>
				</li>
				<li class="nav-item m-0" role="presentation">
					<button class="nav-link" id="export-tab" data-bs-toggle="tab" data-bs-target="#export-tab-pane" type="button" role="tab" aria-controls="export-tab-pane" aria-selected="false" style="margin-bottom:-1px">Export</button>
				</li>
			</ul>
			<div class="center-col-inner overflow-auto flex-fill">

				<div class="tab-content col-md-12 m-auto p-4">

					<form class="w-100 align-self-center position-relative mb-4" role="search" aria-label="Elements Search" aria-labelledby="Search Site">
						<input class="form-control cursor-pointer ps-3" type="search" placeholder="Find it..." autocomplete="off">
						<button class="btn btn-link position-absolute top-50 end-0 translate-middle-y gap-3 ps-0 lh-1 d-flex align-items-center" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center" style="height:1rem "></span><i class="bi bi-search"></i></button>
					</form>

					<div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">

						<p>Options include</p>
						<p>Site name</p>
						<p>Logo dark</p>
						<p>Logo light</p>
						<p>touch icon</p>
						<p>Just to name a few</p>

					</div><!-- /.tab-pane -->

					<div class="tab-pane fade" id="styles-tab-pane" role="tabpanel" aria-labelledby="styles-tab" tabindex="0">
						<p>Options include</p>
						<p>All Site variables</p>
						<p>Custom CSS Site as a last input</p>
						<p>Just to name a few</p>
					</div><!-- /.tab-pane -->

					<div class="tab-pane fade" id="scripts-tab-pane" role="tabpanel" aria-labelledby="scripts-tab" tabindex="0">
						<p>Options include</p>
						<p>Fields to add scripts in the footer or header e.g. Google Analytics </p>
						<p>Just to name a few</p>

					</div><!-- /.tab-pane -->

					<div class="tab-pane fade" id="export-tab-pane" role="tabpanel" aria-labelledby="export-tab" tabindex="0">

						<p>Options include</p>
						<p>Export all settings</p>
						<p>Just to name a few</p>

					</div><!-- /.tab-pane -->
				</div><!-- /.tab-content -->

			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->
	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>
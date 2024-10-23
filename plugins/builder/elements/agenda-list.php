<!-- #done -->
<div class="rz-element-wrapper rz-agendalist-card-wrapper has-edit-buttons">

	<div class="center-top">
		<div class="rz-btns-container">
			<span class="rzBtn rzBtn-sm">Edit Agenda List</span>
		</div>
	</div>

	<?php include "../plugins/builder/elements/filter-bar/filter-bar.php"; ?>

	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 g-2 has-edit-buttons"
		data-masonry='{"percentPosition": true, "itemSelector": ".rz-element"}'>

		<div data-aos="fade-up"
			data-aos-duration="800"
			class="rz-element rz-card-wrap">
			<div class="rz-card rz-agendalist-card"
				data-agendalist-layout="horizontal">
				<!-- data-card-layout="horizontal/stacked/ horizontal is the default -->
				<div class="d-flex gap-3 gap-lg-4 flex-wrap">

					<div class="agendalist-name mw-min-content pe-4">
						<p class="m-0 fw-bold small text-uppercase text-muted">Meeting Title</p>
						<p class="m-0">City Council Special Meeting</p>
					</div><!-- /.agendalist-name -->

					<div class="agendalist-location mw-min-content pe-4">
						<p class="m-0 fw-bold small text-uppercase text-muted">Location</p>
						<p class="m-0">Council Chambers, Online and Phone</p>
					</div><!-- /.agendalist-location -->

					<div class="agendalist-date mw-min-content pe-4">
						<p class="m-0 fw-bold small text-uppercase text-muted">Date/Time</p>
						<p class="m-0">4/10/24 5:30 PM</p>
					</div><!-- /.agendalist-date -->

					<div class="agendalist-links flex-fill mw-min-content d-flex flex-wrap gap-1 align-items-center">
						<a href=""
							class="btn btn-light btn-sm py-2 px-3">Agenda</a>
						<a href=""
							class="btn btn-light btn-sm py-2 px-3">Packet</a>
						<a href=""
							class="btn btn-light btn-sm py-2 px-3">Minutes</a>
						<a href=""
							class="btn btn-light btn-sm py-2 px-3">Video</a>
					</div><!-- /.agendalist-position -->

				</div><!-- /.d-flex -->
			</div><!-- /.rz-agendalist-card -->
		</div><!-- /.rz-agendalist-card-wrap -->

	</div><!-- /.row -->
</div><!-- /.rz-element-wrapper -->
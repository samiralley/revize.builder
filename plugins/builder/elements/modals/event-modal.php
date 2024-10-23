<!-- #done -->
	<div class="modal fade"
		id="event-modal"
		tabindex="-1"
		role="dialog"
		aria-labelledby="modal-event-title"
		aria-hidden="true">
		<div id="event-modal-dialog"
			class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
			role="document"
			style="--bs-modal-width:1000px">
			<div class="modal-content">

				<div class="modal-header align-items-start">
					<div>
						<h3 class="modal-subtitle m-0 fs-3 fw-bold">Event Details</h3>
						<p class="modal-event-date-time badge text-muted row g-3 my-0 p-0 fw-normal lh-sm border-left d-none">
							<span class="modal-event-date"><i class="fa-solid fa-calendar-day"></i> Wednesday, April 9</span>
							<span class="modal-event-date"><i class="fa-solid fa-clock"></i> 9:00am - 10:00pm</span>
						</p>
					</div>
					<button type="button"
						class="btn-close"
						data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>

				<div class="modal-body p-0"
					id="modal-event-body">
					<div class="row row-cols-lg-2 g-0 mx-0">
					<div class="event-modal-header"
						style="min-height:200px"></div><!-- /.event-modal-header for image -->
						<div class="event-details d-flex flex-column">

							<div class="d-flex align-items-start justify-content-between bg-light p-4">
								<div class="w-100">
									<div class="d-flex align-items-center gap-3">
										<div class="event-border-color bg-primary"
											style="margin-top:3px;width:12px;height:26px;border-radius:100px;align-self:start;"></div>
										<div class="w-100">
											<div class="d-flex justify-content-between align-items-center">
												<h3 class="fs-4 fw-bold">City Council Meeting </h3>
												<a href=""
													class="flex-shrink-0 btn btn-outline-primary btn-sm"
													data-bs-toggle="tooltip"
													data-bs-placement="left"
													data-bs-title="view Calendar"
													data-bs-offset="0,20">
													<i class="bi bi-box-arrow-up-right"></i>
													<span class="sr-only">View Calendar</span>
												</a>
											</div>
											
											<div class="alert alert-warning text-dark border-0 border-start border-warning rounded-0 my-3"
												style="border-width:5px!important">#todo remove the stupid date over the image :)</div>
											<p class="text-muted row row-cols-1 g-2 my-0 p-0 fw-normal lh-sm small">
												<span class="modal-event-date w-max-content"><i class="bi bi-calendar4-event me-2"></i>Wednesday, April 9</span>
												<span class="modal-event-time"><i class="bi bi-clock me-2"></i>9:00am - 10:00pm</span>
												<span class="modal-location w-100"><i class="bi bi-geo-alt me-2"></i>150 Kirts Blvd, Ste. B Troy, Michigan 48084</span>
											</p>
										</div>
									</div>
								</div>
								<button type="button"
									class="btn-close bg-white d-none"
									data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div><!-- /.d-flex -->

							<div class="d-flex flex-column p-4 my-auto row-gap-4">
								<div class="modal-event-description small">
									<h6 class="fw-bold">Description</h6>
									Vestibulum id ligula porta felis euismod semper. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.Vestibulum id ligula porta felis euismod semper. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									<br>
								</div>
								<div style="width: 100%">
									<iframe class="ratio ratio-16x9"
										width="100%"
										frameborder="0"
										scrolling="no"
										marginheight="0"
										marginwidth="0"
										src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=150%20Kirts%20Blvd,%20Ste.%20B%20Troy,%20Michigan%2048084+(revize)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
								</div>
							</div><!-- /.d-flex -->

							<div class="modal-action-buttons d-flex gap-2 mt-auto mb-4 px-4">
								<button type="button"
									class="btn btn-light flex-fill border-0"
									data-bs-dismiss="modal"><i class="bi bi-calendar2-plus me-1"></i> Add to Calendar</button>
								<a href="#"
									class="btn btn-primary">Read More</a>
							</div><!-- /.modal-action-buttons -->

						</div><!-- /.event-details -->
					</div><!-- /.row -->
				</div><!-- /.modal-body -->

				<div class="modal-footer d-none">
					<button type="button"
						class="btn"
						data-bs-dismiss="modal">Close</button>
					<a href="#"
						class="btn">Read More</a>
				</div><!-- /.modal-footer -->
			</div><!-- /.modal-content -->
		</div>
	</div>
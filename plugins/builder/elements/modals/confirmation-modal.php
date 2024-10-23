<div class="modal confirmation-popup" style="--bs-modal-width:420px" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body p-4 text-center">
				<div class="d-flex justify-content-center">
					<i class="d-flex lh-1 fs-3 rounded-circle bg-info-subtle p-4 border-info text-info-emphasis bi bi-exclamation-octagon"></i>
				</div>
				<div class="d-flex"></div>
				<p class="m-0 mt-3 px-sm-4"><span class="fw-bold d-block fs-5 text-info-emphasis">Important</span> You are about to leave our website and visit an external site.</p>
			</div>
			<div class="modal-footer flex-nowrap p-0">
				<button id="confirmLeave" type="button" class="btn btn-lg btn-link text-success fs-6 text-decoration-none col-6 py-3 m-0 border-end" style="border-radius:0 0 0 var(--rz-modal-border-radius)"><strong>Yes, leave <i class="bi bi-box-arrow-up-right ms-2 fs-5 lh-1"></i></strong></button>
				<button type="button" class="btn btn-lg btn-link text-danger fw-bold fs-6 text-decoration-none col-6 py-3 m-0" data-bs-dismiss="modal" id="cancelLeave" style="border-radius:0 0 var(--rz-modal-border-radius)">No, Stay </button>
			</div>
		</div>
	</div>
</div>

<script>
	// #todo test on live site 
	$(document).ready(function() {
		var externalLink; // Variable to store the external link URL

		$('a').not('[href^="javascript:"]').not('[href="http://cms4.revize.com/revize/supportrevize/revize_faq.php"]').not('#revize-login').click(function(event) {
			if (!$(this).children('span.rzBtn').length) {

				var externalDomainLink = new URL($(this).prop('href')).hostname;
				var siteDomainName = window.location.hostname;

				if (externalDomainLink !== siteDomainName) {
					event.preventDefault();
					$('.confirmation-popup').addClass('show').css('display', 'block');
					externalLink = $(this).prop('href');
				} else {
					// Same domain, allow the link to proceed
				}
			}
		});

		// Handle click on confirmLeave button
		$('#confirmLeave').click(function() {
			// Redirect to the external link URL
			window.open(externalLink);
		});

		// Handle click on cancelLeave button
		$('#cancelLeave').click(function() {
			$('.confirmation-popup').removeClass('show').css('display', 'none');
		});
	});
</script>
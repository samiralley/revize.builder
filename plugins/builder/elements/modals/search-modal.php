<!-- #done -->
<div class="modal modal-lg fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal">
	<div class="modal-dialog" role="Site Search">
		<div class="modal-content bg-transparent">
			<div class="modal-header border-0 bg-transparent pb-0 px-lg-4 pt-4 justify-content-end align-items-center">
					<button type="button" class="btn-close position-absolute" style="top:5px" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="form-inline overflow-hidden" style="border-radius:var(--bs-border-radius) var(--bs-border-radius) 0 0 ;" method="GET" action="search.php" role="search" aria-label="sitewide">
						<div class="d-flex relative bg-white p-2">
							<label for="search-input"><span class="sr-only">Search</span></label>
							<div class="form-floating w-100">
							<input id="autocompleteme" autocomplete="off" class="form-control form-control-lg border-0 m-0" name="q" id="search-input" type="search" placeholder="Search..." aria-label="Search" style="border-radius:calc(var(--bs-border-radius-lg) - var(--bs-border-radius)/1)">
							<label for="autocompleteme" class="bg-transparent">Search</label>
							</div>
							<button class="btn btn-link right-center d-flex gap-3 p-0 pe-3 bg-transparent me-1 ps-0 outline-none lh-1" aria-label="Search" tabindex="1"><span class="vr" style=""></span><i class="bi bi-search"></i></button>
						</div>
						<div id="searchResults" class="bg-white"></div>
						<p class="text-md-center text-muted small m-0 p-2 py-md-3 bg-light d-none d-lg-block">
							Type then hit <kbd>Enter</kbd> to search. <kbd><i class="bi bi-arrow-up-short"></i></kbd> <kbd><i class="bi bi-arrow-down-short"></i></kbd> to navigate <kbd>ESC</kbd> to close.
						</p>					
						</form>	
						<div class="popular-pages-search p-3 has-edit-buttons bg-success-subtle" style="border-radius:0 0 var(--bs-border-radius) var(--bs-border-radius) ">
								<div class="rz-btns-container">
									<span class="rzBtn rzBtn-xs">Edit</span>
								</div><!-- /.rz-btns-container -->
							<h6 class="fw-bold">Popular pages</h6>
							<div class="popular-results d-flex flex-wrap gap-2">
								<a href="#" class="btn btn-success highlighted" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									A simple def <i class="fa-solid fa-star ms-1"></i>
								</a>
								<a href="#" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									simple group item
								</a>
								<a href="#" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									group item
								</a>
								<a href="#" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									ult list group item
								</a>
								<a href="#" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									item
								</a>
								<a href="#" class="btn btn-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
									simple
								 </a>
							</div>
						</div>
									
			</div><!-- /.modal-body -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	// #todo move this script to own file
	var searchModal = document.getElementById('searchModal')
	var siteSearchInput = document.getElementById('autocompleteme')

	searchModal.addEventListener('shown.bs.modal', function() {
		siteSearchInput.focus()
	})

	var $ = jQuery;
	$(function() {
		var availableTags = [{
				label: "Choice1",
				value: "ActionScript",
				link: 'https://google.com'
			},
			{
				value: "AppleScript",
				link: 'https://google.com'
			},
			{
				value: "Asp",
				link: 'https://google.com'
			},
			{
				value: "BASIC",
				link: 'https://google.com'
			},
			{
				value: "C",
				link: 'https://google.com'
			},
			{
				value: "C++",
				link: 'https://google.com'
			},
			{
				value: "Clojure",
				link: 'https://google.com'
			},
			{
				value: "COBOL",
				link: 'https://google.com'
			},
			{
				value: "ColdFusion",
				link: 'https://google.com'
			},
			{
				value: "Erlang",
				link: 'https://google.com'
			},
			{
				value: "Fortran",
				link: 'https://google.com'
			},
			{
				value: "Groovy",
				link: 'https://google.com'
			},
			{
				value: "Haskell",
				link: 'https://google.com'
			},
			{
				value: "Java",
				link: 'https://google.com'
			},
			{
				value: "JavaScript",
				link: 'https://google.com'
			},
			{
				value: "Lisp",
				link: 'https://google.com'
			},
			{
				value: "COBOL",
				link: 'https://google.com'
			},
			{
				value: "ColdFusion",
				link: 'https://google.com'
			},
			{
				value: "Erlang",
				link: 'https://google.com'
			},
			{
				value: "Fortran",
				link: 'https://google.com'
			},
			{
				value: "Groovy",
				link: 'https://google.com'
			},
			{
				value: "Haskell",
				link: 'https://google.com'
			},
			{
				value: "Java",
				link: 'https://google.com'
			},
			{
				value: "JavaScript",
				link: 'https://google.com'
			},
			{
				value: "Lisp",
				link: 'https://google.com'
			},
			{
				value: "COBOL",
				link: 'https://google.com'
			},
			{
				value: "ColdFusion",
				link: 'https://google.com'
			},
			{
				value: "Erlang",
				link: 'https://google.com'
			},
			{
				value: "Fortran",
				link: 'https://google.com'
			},
			{
				value: "Groovy",
				link: 'https://google.com'
			},
			{
				value: "Haskell",
				link: 'https://google.com'
			},
			{
				value: "Java",
				link: 'https://google.com'
			},
			{
				value: "JavaScript",
				link: 'https://google.com'
			},
			{
				value: "Lisp",
				link: 'https://google.com'
			},						
			{
				value: "COBOL",
				link: 'https://google.com'
			},
			{
				value: "ColdFusion",
				link: 'https://google.com'
			},
			{
				value: "Erlang",
				link: 'https://google.com'
			},
			{
				value: "Fortran",
				link: 'https://google.com'
			},
			{
				value: "Groovy",
				link: 'https://google.com'
			},
			{
				value: "Haskell",
				link: 'https://google.com'
			},
			{
				value: "Java",
				link: 'https://google.com'
			},
			{
				value: "JavaScript",
				link: 'https://google.com'
			},
			{
				value: "Lisp",
				link: 'https://google.com'
			},

		];
		$("#autocompleteme").autocomplete({
			appendTo: "#searchResults",
			source: availableTags,
			autoFocus: true,
			select: function(event, ui) {
				window.location.replace(ui.item.link)
			}
		});
	});
</script>
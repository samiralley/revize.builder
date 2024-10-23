<?php include "_includes_/head.php"; ?>

<div class="blog-into">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 pt-5">
				<h1 class="fw-bold aos-init aos-animate" data-aos="fade-up-right" data-aos-duration="600">Search...</h1>
			</div>
		</div>
	</div>
</div>

<div class="mb-5 pb-5">
	<div class="container">
		<div class="row">

			<div class="col">

				<form class="m-0 align-self-center position-relative header-site-search" method="GET" action="search.php" role="search" aria-label="Site Search" aria-labelledby="Search Site">
					<input class="form-control form-control-lg p-3 cursor-pointer" name="q" type="search" placeholder="Search..." autocomplete="off">
					<button class="btn btn-link position-absolute top-50 end-0 translate-middle-y gap-3 ps-0 pe-3 me-1 lh-1 d-flex align-items-center" aria-label="Search" tabindex="0"><span class="vr d-inline-flex align-self-center" style="height:1rem "></span><i class="bi bi-search"></i></button>
				</form>

			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!--/.container -->
</div><!-- /.blog-hero -->

<?php include "_includes_/footer.php"; ?>
#todo add video option
<div class="hero tiny-slider-wrap has-edit-buttons"
	data-controls-position="center">
	<!-- 
	arrow buttons options 
	data-controls-position="bottom" default
	data-controls-position="center"
	-->
	<!-- 100dvh adapts itself to be either the large or small viewport size. https://web.dev/blog/viewport-units -->
	<div class="center-center">
		<div class="rz-btns-container">
			<span class="rzBtn rzBtn-sm">Edit Hero</span>
		</div>
	</div>

	<div class="rz-slider-bg-overlay"
		style="background: linear-gradient(45deg, rgba(0, 0, 0, 0.9) 0%, rgba(27, 92, 223, 0.3) 100%);"></div>
	<!-- https://github.com/ganlanyuan/tiny-slider?tab=readme-ov-file#options -->
	<div class="tiny-slider"
		style="--hero-height:80dvh;height:var(--hero-height)"
		data-tiny-items="1"
		data-tiny-mode="gallery"
		data-tiny-items-md="1"
		data-tiny-items-sm="1"
		data-tiny-gap="0"
		data-tiny-controls="true"
		data-tiny-nav="true"
		data-tiny-autoplay-buttons="true"
		data-tiny-autoplay="true">
		<div class='tiny-item'
			style="height:var(--hero-height)">
			<div class="tns-lazy-img tns-bg-slide"
				data-style="background:url(_assets_/images/no-image-slider.jpg) center center / cover no-repeat;"></div>
		</div>
		<div class='tiny-item'
			style="height:var(--hero-height)">
			<div class="tns-lazy-img tns-bg-slide"
				data-style="background:url(_assets_/images/no-image-slider.jpg) center center / cover no-repeat;"></div>
		</div>
		<div class='tiny-item'
			style="height:var(--hero-height)">
			<div class="tns-lazy-img tns-bg-slide"
				data-style="background:url(_assets_/images/no-image-slider.jpg) center center / cover no-repeat;"></div>
		</div>
		<div class='tiny-item'
			style="height:var(--hero-height)">
			<div class="tns-lazy-img tns-bg-slide"
				data-style="background:url(_assets_/images/no-image-slider.jpg) center center / cover no-repeat;"></div>
		</div>
		<div class='tiny-item'
			style="height:var(--hero-height)">
			<div class="tns-lazy-img tns-bg-slide"
				data-style="background:url('https://picsum.photos/2300/1200') center center / cover no-repeat;"></div>
		</div>
	</div><!--/.tiny-slider-->

	<div class="hero-caption-wrap d-flex justify-content-start text-start align-items-center m-auto"
		style="--bs-container: 100%">

		<!-- options for hero-caption-wrap -->
		<!-- 
			horizontal options
			justify-content-start
		justify-content-center
		justify-content-end
		
		vertical options
		align-items-center
		align-items-start
		align-items-end 
		
		text alignment 
		text-center
		text-start
		text-end
	-->
		<div class="hero-caption">
			<div class="hero-caption-label"
				data-aos="fade-up"
				data-aos-duration="800"><i class="fa-solid fa-landmark-flag"></i> It's time to</div>
			<div class="hero-caption-title"
				data-aos="fade-up"
				data-aos-duration="900"><span>Re<em class="border-bottom border-5">thinking</em></span></div>
			<div class="hero-caption-subtext"
				data-aos="fade-up"
				data-aos-duration="1000">A new era of Government websites</div>
			<a href="#"
				class="btn btn-primary btn-lg"
				data-aos="fade-up"
				data-aos-duration="1200">It's Simple.</a>
			<button href="#"
				class="btn btn-secondary btn-lg"
				data-aos="fade-up"
				data-aos-duration="1200">No.. Really it is</button><br><br>

			<div class="hero-search position-relative"
				data-aos="fade-up"
				data-aos-duration="1300"
				style="max-width:100%;width:500px;">
				<form class="search-form w-100 position-relative m-0"
					method="GET"
					action="search.php"
					role="search"
					aria-label="Search"
					data-bs-toggle="modal"
					data-bs-target="#searchModal"
					aria-labelledby="Search Site">
					<label class="bi bi-search position-absolute top-50 start-0 ms-3 fs-5 translate-middle-y"
						for="search-input">
						<span class="sr-only">Search</span>
					</label>
					<input name="q"
						class="p-0 w-100 ps-5 cursor-pointer form-control"
						placeholder="Enter search terms..."
						type="search"
						autocomplete="false">
					<button class="btn btn-primary position-absolute top-50 me-1 fw-bold end-0 translate-middle-y">Go</button>
				</form>
				<div class="form-text d-flex gap-2 justify-content-center">
					<span>Top Pages</span>
					<a href="">Departments</a>
					<a href="">Bills</a>
					<a href="">Parks</a>
					<a href="">Police</a>
				</div>
			</div><!-- /.hero-search -->

		</div><!-- /.hero-caption -->
	</div><!-- /.hero-caption-wrap -->

	<div class="down-arrow text-center center-bottom">
		<a href="#bottom-hero">
			<i class="fa-solid fa-arrow-down-long bounce"></i>
		</a>
		<small>
			Scroll For More
		</small>
	</div>
	<div id="bottom-hero"></div>
</div><!-- /#hero -->
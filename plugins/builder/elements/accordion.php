<!-- #done -->
<div class="rz-element-wrapper rz-accordion-wrapper has-edit-buttons">

	<div class="center-top">
		<div class="rz-btns-container">
			<span class="rzBtn rzBtn-sm">Edit</span>
		</div>
	</div>

	<?php include "../plugins/builder/elements/filter-bar/filter-bar.php"; ?>

	<div class="accordion-wrap">
		
		<div class="accordion"
			id="accordion1">
			<h3 class="my-4">Category</h3>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseOne"
						aria-expanded="true"
						aria-controls="collapseOne">
						Accordion Item #1
					</button>
				</div>
				<div id="collapseOne"
					class="accordion-collapse collapse show"
					data-bs-parent="#accordion1">
					<div class="accordion-body">
						<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button collapsed"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseTwo"
						aria-expanded="false"
						aria-controls="collapseTwo">
						Accordion Item #2
					</button>
				</div>
				<div id="collapseTwo"
					class="accordion-collapse collapse"
					data-bs-parent="#accordion1">
					<div class="accordion-body">
						<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button collapsed"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseThree"
						aria-expanded="false"
						aria-controls="collapseThree">
						Accordion Item #3
					</button>
				</div>
				<div id="collapseThree"
					class="accordion-collapse collapse"
					data-bs-parent="#accordion1">
					<div class="accordion-body">
						<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="accordion-wrap">
		<!-- #note 
		add accordion-flush to accordion to get this style -->
		<div class="accordion accordion-flush"
			id="accordion2">
			<h3 class="my-4">Category <span class="fs-6 p-2 text-primary-emphasis bg-primary-subtle border border-2 border-primary-subtle rounded-pill badge">accordion flush</span></h3>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseOne-1"
						aria-expanded="true"
						aria-controls="collapseOne-1">
						Accordion Item #1
					</button>
				</div>
				<div id="collapseOne-1"
					class="accordion-collapse collapse show"
					data-bs-parent="#accordion2">
					<div class="accordion-body">
						<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button collapsed"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseTwo-1"
						aria-expanded="false"
						aria-controls="collapseTwo-1">
						Accordion Item #2
					</button>
				</div>
				<div id="collapseTwo-1"
					class="accordion-collapse collapse"
					data-bs-parent="#accordion2">
					<div class="accordion-body">
						<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="h4 accordion-header">
					<button class="accordion-button collapsed"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#collapseThree-1"
						aria-expanded="false"
						aria-controls="collapseThree-1">
						Accordion Item #3
					</button>
				</div>
				<div id="collapseThree-1"
					class="accordion-collapse collapse"
					data-bs-parent="#accordion2">
					<div class="accordion-body">
						<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.rz-element-wrapper -->
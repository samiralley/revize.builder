<div class="rz-element rz-element-search-wrapper mb-4">
	<form>
		<div class="rz-element-search-wrap d-md-flex flex-wrap gap-2 p-4">
			<div class="form-input flex-fill mb-2 m-md-0">
				<div class="form-floating h-100">
					<input autocomplete="off"
						class="form-control m-0 h-100"
						name=""
						type="search"
						placeholder="Search..."
						aria-label="Search">
					<label>Search...</label>
					<span class="btn btn-link position-absolute top-50 end-0 translate-middle-y d-flex gap-3 pe-3 bg-white me-1 lh-1"
						aria-label="Search"
						tabindex="1"><span class="vr"
							style=""></span><i class="bi bi-search"></i></span>
				</div>
			</div><!-- /.form-input -->
			<div class="form-dropdown d-flex mw-min-content">
				<div class="dropdown category-dropdown w-100">
					<button class="btn btn-primary dropdown-toggle d-block w-100 h-100"
						type="button"
						data-bs-display="static"
						data-bs-toggle="dropdown"
						data-bs-auto-close="outside"
						aria-expanded="false">
						<span class="dropdown-text">Categories</span>
						<span class="caret"></span></button>
					<ul class="dropdown-menu w-100 m-0 dropdown-menu-md-end">
						<li>
							<a class="dropdown-item"
								href="#">
								<label>
									<input type="checkbox"
										class="selectall form-check-input">
									<span class="select-text form-check-label"> Select</span> All
									<!-- #todo selecting all will give you the wrong number selected. This might be due to multiple searches on the page -->
								</label>
							</a>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<a class="dropdown-item option-link"
								href="#">
								<label>
									<input name='options[]'
										type="checkbox"
										class="option justone form-check-input"
										value='Parks' />
									<span class="form-check-label">Parks</span>
								</label>
							</a>
						</li>
						<li>
							<a class="dropdown-item option-link"
								href="#">
								<label>
									<input name='options[]'
										type="checkbox"
										class="option justone form-check-input"
										value='Fire' />
									<span class="form-check-label">Fire</span>
								</label>
							</a>
						</li>
						<li>
							<a class="dropdown-item option-link"
								href="#">
								<label>
									<input name='options[]'
										type="checkbox"
										class="option justone form-check-input"
										value='Police' />
									<span class="form-check-label">Police</span>
								</label>
							</a>
						</li>
					</ul>
				</div><!-- /.dropdown -->
			</div><!--/. form-dropdown -->
		</div><!-- /.rz-element-search-wrap -->
	</form>
</div><!-- /.rz-element -->
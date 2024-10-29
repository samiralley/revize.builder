<div class="rz-element rz-element-search-wrapper mb-4">
	<form>
		<div class="rz-element-search-wrap d-flex rounded border bg-white">
			<div class="form-input flex-fill m-0">
				<div class="form-floating h-100">
					<input autocomplete="off"
						class="form-control border-0 m-0 h-100"
						name=""
						type="search"
						placeholder="Search..."
						aria-label="Search">
					<label><i><svg width="20" height="20" class="filter-search-icon" viewBox="0 0 20 20" aria-hidden="true"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></i> Search...</label>
				</div>
			</div><!-- /.form-input -->
			<div class="vr"></div>
			<div class="form-dropdown d-flex">
				<div class="dropdown category-dropdown w-100">
				<button class="btn btn-outline-primary border-0 border-end text-dark px-3 bg-transparent dropdown-toggle rounded-0 h-100"
					type="button"
					data-bs-display="static"
					data-bs-toggle="dropdown"
					data-bs-auto-close="outside"
					aria-expanded="false">
					<i class="bi bi-funnel me-lg-2 fs-5 align-middle"></i><span class="dropdown-text">Categories</span>
					</button>
				<ul class="dropdown-menu dropdown-menu-end">
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
				<div class="dropdown category-dropdown w-100">
				<button class="btn btn-outline-primary border-0 text-dark px-3 bg-transparent dropdown-toggle rounded-0 rounded-end h-100"
					type="button"
					data-bs-display="static"
					data-bs-toggle="dropdown"
					data-bs-auto-close="outside"
					aria-expanded="false">
					<i class="bi bi-sort-down me-lg-2 fs-4 align-middle"></i><span>Sort</span>
					</button>
				<ul class="dropdown-menu w-100 dropdown-menu-end">
					<li>
						<a class="dropdown-item" href="#">Newest</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Oldest</a>
					</li>					
				</ul>
			</div><!-- /.dropdown -->			
			</div><!--/. form-dropdown -->
		</div><!-- /.rz-element-search-wrap -->
	</form>
</div><!-- /.rz-element -->
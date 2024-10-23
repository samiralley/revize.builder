<!-- #done -->
<div id="share-modal-section">
	<?php define('PAGE_PROTOCOL', (isset($_SERVER['https']) && $_SERVER['https'] === 'on') ? 'https' : 'http' ); ?>

	<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-0 bg-transparent pb-0 px-lg-4 pt-4">
					<strong>Share this page</strong>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-lg-4">
					<div class="share-btns row m-0 row-cols-3 gap-2">
						<strong class="w-100 p-0">Social Media</strong>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
						target="_blank">
							<i class="fa-brands fa-square-facebook"></i> Facebook
						</a>
						
						<a href="https://www.twitter.com/intent/tweet?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
						target="_blank">
							<i class="fa-brands fa-x-twitter"></i> x(twitter)
						</a>
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-linkedin" onclick="return !window.open(this.href, 'linkedin ', 'width=500,height=500')"
						target="_blank">
							<i class="fa-brands fa-linkedin"></i> Linkedin
						</a>
	
						<a href="https://www.reddit.com/submit?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
						target="_blank">
							<i class="fa-brands fa-square-reddit"></i> reddit
						</a>
						
						<strong class="w-100 p-0">Other</strong>
						
						<a href="" class="btn btn-outline-dark w-100"><i class="fa-regular fa-envelope"></i> Email page Link</a>

						<a href="" class="btn btn-outline-dark w-100 clipboard"><i class="fa-regular fa-copy me-2"></i> Copy Current URL</a>
												
					</div><!-- /.share-btns -->
										
					<script>
						// #todo make this work jamie
					var $temp = $("<input>");
					var $url = $(location).attr('href');
					
					$('.clipboard').on('click', function() {
						$("body").append($temp);
						$temp.val($url).select();
						document.execCommand("copy");
						$temp.remove();
						$("#coppiedToast").addClass('show').stop();
					})									
					//todo
					</script>
					 
					<div class="toast-container position-fixed bottom-0 start-50 translate-middle-x">
						<div class="toast align-items-center text-bg-success border-0 fade hide" id="coppiedToast" role="alert" aria-live="assertive" aria-atomic="true">
							<div class="d-flex">
								<div class="toast-body">
									URL Copied!
								</div>
								<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
							</div>
						</div>
					</div>
					
				</div><!-- /.modal-body -->
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div><!-- /#modal-section -->
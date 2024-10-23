<link href="/revize/plugins/revize_bar/bar.css" rel="stylesheet" type="text/css" />
<div id="rz-bar-wrap">
	<div class="rz-bar">
		<div class="col rz-bar-left-col">
			<a href="./" class="rz-icon"><img src="../../revize/plugins/revize_bar/images/r.jpg"></a> 
			<div class="rz-editing"><i></i><span class="text-truncate">Editing</span></div>
			<div class="rz-bar-btn rz-bar-home" data-toggle="tooltip" data-placement="bottom" title="Home Page">
				<a href="./"><img src="_assets_/plugins/revize_bar/images/home.svg"></a>
			</div>
			<div class="rz-bar-btn toggle-edit-buttons" data-toggle="tooltip" data-placement="bottom" title="Show or Hide Edit Buttons">
				<img src="_assets_/plugins/revize_bar/images/show.svg" class="show-btns-icon">
				<img src="_assets_/plugins/revize_bar/images/hide.svg" class="hide-btns-icon">
			</div>
			<div class="dropdown rz-bar-btn rz-bar-position" data-toggle="tooltip" data-placement="right" title="Bar Positioning">
		  		<div class="rz-bar-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" >
					<img src="_assets_/plugins/revize_bar/images/settings.svg">
		  		</div>
		  		<div class="dropdown-menu bar-settings-dropdown">
					<span class="dropdown-item-text">Bar Positioning</span>
					<div class="dropdown-divider"></div>
					<div class="dropdown-item">
			  		<input class="form-check-input" type="radio" name="positionSelected" id="topDefault" value="topDefault" checked>
			  		<label class="form-check-label" for="topDefault">
						Top
			  		</label>
					</div>
					<div class="dropdown-item">
			  		<input class="form-check-input" type="radio" name="positionSelected" id="bottomFloated" value="bottomFloated">
			  		<label class="form-check-label" for="bottomFloated">
						Bottom Floated
			  		</label>
					</div>
					<div class="dropdown-item">
			  		<input class="form-check-input" type="radio" name="positionSelected" id="leftFloated" value="leftFloated">
			  		<label class="form-check-label" for="leftFloated">
						Left Floated
			  		</label>
					</div>
		  		</div>
			</div>			
		</div>
		
		<div class="col rz-bar-center-col">
	  		<span class="rz-bar-btn" data-toggle="tooltip" data-placement="bottom" title="Desktop View" onclick="window.open(document.URL + '?hidebar=hidebarnow', '_blank', 'location=yes,height=1000,width=1200,scrollbars=yes,status=yes');"><img src="_assets_/plugins/revize_bar/images/laptop.svg" ></span>
	  		<span class="rz-bar-btn" data-toggle="tooltip" data-placement="bottom" title="Tablet View" onclick="window.open(document.URL + '?hidebar=hidebarnow', '_blank', 'location=yes,height=1080,width=810,scrollbars=yes,status=yes');"><img src="_assets_/plugins/revize_bar/images/tablet.svg" ></span>
	  		<span class="rz-bar-btn" data-toggle="tooltip" data-placement="bottom" title="Phone View" onclick="window.open(document.URL + '?hidebar=hidebarnow', '_blank', 'location=yes,height=932,width=430,scrollbars=yes,status=yes');"><img src="_assets_/plugins/revize_bar/images/mobile.svg" ></span>
		</div>
		
		<div class="col rz-bar-right-col">

			<?php
				include smartInclude("revize_bar_buttons.php", true);
			?>

			<a href="https://intercom.help/revizefaqs/en/" class="rz-bar-btn" data-toggle="tooltip" data-placement="bottom" title="Help Center">
				<img src="_assets_/plugins/revize_bar/images/help.svg">
			</a>
			
			<div class="rz-bar-btn" data-toggle="tooltip" data-placement="bottom" title="Admin Page">
				<a href="admin.php"><img src="_assets_/plugins/revize_bar/images/key.svg"></a>
			</div>								
			
			<div class="rz-bar-btn rz-bar-dropdown" data-toggle="tooltip" data-placement="bottom" title="Admin Tools">
  				<a href="javascript:RZadminwin()" class="dropdown-toggle"><img src="_assets_/plugins/revize_bar/images/more-vertical.svg"></a>
			</div>				 	
		</div>
	</div>
</div>
<script src="/revize/plugins/revize_bar/bar.js"></script>
RZadminwin = new Proxy(RZadminwin,
	(function() {
		var newSig = {
			apply: function(msg, action) {
				RZadminwin.width = 680;
				
				if (!RZ.adminwin) {
					RZ.adminwin = 'setup';
					RZadminwin.action = action;			//Save for adminpanel.html

					var adminDiv = document.createElement('div');
					adminDiv.setAttribute('id','RZadminpanelContainer');
					adminDiv.innerHTML = '<br><b id="RZadminwin-loading">&nbsp;&nbsp;&nbsp;Loading Admin Panel...</b>';

					document.body.querySelector("#rz-bar-wrap .rz-bar").append(adminDiv);
					RZadminwin.container = adminDiv;	//save for adminpanel.html

					var iframe = document.createElement('iframe');
					var	src = '/revize/plugins/revize_bar/adminpanel.jsp'
					iframe.setAttribute('id','RZadminpanel');
					iframe.setAttribute('src',src);
					iframe.setAttribute('width','100%');
					iframe.setAttribute('height','20');			//loading height
					iframe.setAttribute('scrolling','no');
					iframe.setAttribute('frameborder','0');
					iframe.setAttribute('marginwidth','0');
					iframe.setAttribute('marginheight','0');
					iframe.style.margin = '0';
					iframe.style.padding = '0';
					iframe.style.border = '0px none';
					iframe.style.visibility = "hidden"; 		//hide IE inset borders while loading
					adminDiv.replaceChild(iframe, adminDiv.firstChild);
					return;

				} else if (RZ.adminwin == 'setup') {
					var adminContainer = document.querySelector("#RZadminpanelContainer");
					if (adminContainer) {
						adminContainer.style.display = "block";
						return;
					}
				} else {
					var adminContainer = document.querySelector("#RZadminpanelContainer");
					if (adminContainer) {
						if (adminContainer.style.display == "none") {
							adminContainer.style.display = "block";
						} else {
							adminContainer.style.display = "none";
						}
						return;
					}
				}

				return; //RZ.adminwin.RZadminwin('', action);
			},
		};
		
		for (key in RZadminwin) {
			newSig[key] = RZadminwin[key];
		}
		
		return newSig;
	})()
);

(function() {
	function changeRzBarPlacement(placement, save = true) {
		switch (placement) {
			case 'bottomFloated':
				document.body.classList.add("rz-bar-bottom");
				document.body.classList.remove("rz-bar-left");
				break;
			case 'leftFloated':
				document.body.classList.add("rz-bar-left");
				document.body.classList.remove("rz-bar-bottom");
				break;
			default:
				document.body.classList.remove("rz-bar-bottom");
				document.body.classList.remove("rz-bar-left");
		}
		if (window.localStorage && save) {
			window.localStorage.setItem("RZBarPlacement", placement);
		}
		if (typeof jQuery === 'function' && typeof jQuery.fn.dropdown === 'function') {
			$("#rz-bar-wrap .bar-settings-dropdown.show").dropdown('hide'); 
		}
	}
	
	document.querySelectorAll("#rz-bar-wrap input[name='positionSelected']").forEach(function(inp) {
		inp.addEventListener('change', function() {
			changeRzBarPlacement(this.value);
		});
	});
	
	document.querySelectorAll("#rz-bar-wrap .toggle-edit-buttons").forEach(function(el) {
		el.addEventListener('click', function(ev) {
			document.body.classList.toggle("show-edit-buttons");
			if (window.localStorage) {
				window.localStorage.setItem("RZBarShowButtons", document.body.classList.contains("show-edit-buttons"));
			}
			ev.preventDefault();
		});
	});
	
	if (window.localStorage) {
		var RZBarPlacement = window.localStorage.getItem("RZBarPlacement");
		if (RZBarPlacement !== null) {
			document.querySelectorAll("#rz-bar-wrap input[name='positionSelected']").forEach(function(inp) {
				if (inp.value == RZBarPlacement) { inp.checked = true; }
			});
			changeRzBarPlacement(RZBarPlacement, false);
		}
		
		var RZBarShowButtons = window.localStorage.getItem("RZBarShowButtons");
		if (RZBarShowButtons !== null) {
			if (RZBarShowButtons == 'true') {
				document.body.classList.add("show-edit-buttons");
			}
		}
	}
})();
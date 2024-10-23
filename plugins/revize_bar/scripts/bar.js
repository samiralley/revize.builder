RZadminwin = new Proxy(RZadminwin,
	(function() {
		var newSig = {
			apply: function(msg, action) {
				RZadminwin.width = 680;
				
				function checkToggleImage() {
					document.querySelectorAll("#rz-bar-wrap a[href^='javascript:RZadminwin()']").forEach(function(el) {
						if (!RZ.adminwin) { return; }
						var adminContainer = document.querySelector("#RZadminpanelContainer");
						if (!adminContainer || adminContainer.style.display == "none") {
							el.innerHTML = '<img src="../plugins/revize_bar/images/more-vertical.svg">';
						} else {
							el.innerHTML = '<img src="../plugins/revize_bar/images/close.svg">';
						}
					});
				}
				
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
					
					document.body.addEventListener('click', function(e) {
						var adminContainer = document.querySelector("#RZadminpanelContainer");
						if (adminContainer && adminContainer.style.display !== "none") {
							var toggleButtons = Array.from(document.querySelectorAll("a[href^='javascript:RZadminwin()']"));
							// Check to see if we're clicking on something that would bubble up to something that would do this same action, and let that do it instead.
							if (e.composedPath().filter(function(el) { return (toggleButtons.indexOf(el) > -1); }).length) { return; }
							adminContainer.style.display = "none";
							checkToggleImage();
						}
					});

				} else if (RZ.adminwin == 'setup') {
					var adminContainer = document.querySelector("#RZadminpanelContainer");
					if (adminContainer) {
						adminContainer.style.display = "block";
					}
				} else {
					var adminContainer = document.querySelector("#RZadminpanelContainer");
					if (adminContainer) {
						if (adminContainer.style.display == "none") {
							adminContainer.style.display = "block";
						} else {
							adminContainer.style.display = "none";
						}
					}
				}
				
				checkToggleImage();

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
/* Helper Calls */
	function readRzBarOption(option, set) {
		if (!window.localStorage) { return null; }
		
		var barStorageKey = "RzBarOptions";
		var storageVal = window.localStorage.getItem(barStorageKey);
		if (storageVal === null) {
			window.localStorage.setItem(barStorageKey, "{}");
			storageVal = "{}";
		}
		var optionSet = null;
		
		try {
			optionSet = JSON.parse(storageVal);
			if (typeof set === 'undefined') { // Retrieve an option
				if (optionSet.hasOwnProperty(option)) {
					return optionSet[option];
				}
			} else { // Assign an option
				optionSet[option] = set;
				window.localStorage.setItem(barStorageKey, JSON.stringify(optionSet));
				return set;
			}
		} catch (e) {
			console.warn(e);
		}
		
		return null;
	}

	function changeRzBarPlacement(placement, save = true) {
		switch (placement) {
			case 'bottomFloated':
				document.documentElement.classList.add("rz-bar-bottom");
				document.documentElement.classList.remove("rz-bar-left");
				break;
			case 'leftFloated':
				document.documentElement.classList.add("rz-bar-left");
				document.documentElement.classList.remove("rz-bar-bottom");
				break;
			default:
				document.documentElement.classList.remove("rz-bar-bottom");
				document.documentElement.classList.remove("rz-bar-left");
		}
		if (save) {
			readRzBarOption('placement', placement);
		}
	}
	
	function changeRzButtonsColors(colors, save = true) {
		switch (colors) {
			case 'purpleButtons':
				document.documentElement.classList.add("purple-edit-buttons");
				document.documentElement.classList.remove("black-edit-buttons");
				document.documentElement.classList.remove("blue-edit-buttons");
				break;
			case 'blackButtons':
				document.documentElement.classList.add("black-edit-buttons");
				document.documentElement.classList.remove("purple-edit-buttons");
				document.documentElement.classList.remove("blue-edit-buttons");
				break;
			case 'blueButtons':
				document.documentElement.classList.add("blue-edit-buttons");
				document.documentElement.classList.remove("purple-edit-buttons");
				document.documentElement.classList.remove("black-edit-buttons");
				break;
			default:
				document.documentElement.classList.remove("purple-edit-buttons");
				document.documentElement.classList.remove("black-edit-buttons");
				document.documentElement.classList.remove("blue-edit-buttons");
		}
		if (save) {
			readRzBarOption('buttonsColors', colors);
		}
	}
	
	function toggleOutlines(outlines, save = true) {
		switch (outlines) {
			case 'hideOutlines':
				document.documentElement.classList.add("hide-outlines");
				break;
			default:
				document.documentElement.classList.remove("hide-outlines");
		}
		if (save) {
			readRzBarOption('outlines', outlines);
		}
	}
/* Event Binding */
	document.querySelectorAll("#rz-bar-wrap input[name='positionSelected']").forEach(function(inp) {
		inp.addEventListener('change', function() {
			changeRzBarPlacement(this.value);
		});
	});
	
	document.querySelectorAll("#rz-bar-wrap input[name='buttonsColors']").forEach(function(inp) {
		inp.addEventListener('change', function() {
			changeRzButtonsColors(this.value);
		});
	});
	
	document.querySelectorAll("#rz-bar-wrap input[name='outlineSection']").forEach(function(inp) {
		inp.addEventListener('change', function() {
			toggleOutlines(this.value);
		});
	});
	
	document.querySelectorAll("#rz-bar-wrap .toggle-edit-buttons").forEach(function(el) {
		el.addEventListener('click', function(ev) {
			document.documentElement.classList.toggle("show-edit-buttons");
			readRzBarOption('showButtons', document.documentElement.classList.contains("show-edit-buttons"));
			ev.preventDefault();
		});
	});
	
	
	document.querySelectorAll("#rz-bar-wrap .toggle-light-dark").forEach(function(el) {
		el.addEventListener('click', function(ev) {
			document.documentElement.classList.toggle("rz-bar-dark");
			readRzBarOption('darkmode', document.documentElement.classList.contains("rz-bar-dark"));
			ev.preventDefault();
		});
	});
	
/* Keep dropdowns open after field change */
	document.querySelectorAll("#rz-bar-wrap .dropdown-menu").forEach(function(el) { el.addEventListener('click', function(ev) { ev.stopPropagation(); }); });
		
/* Restore Settings */
	if (window.localStorage) {
		var RZBarPlacement = readRzBarOption("placement");
		if (RZBarPlacement !== null) {
			document.querySelectorAll("#rz-bar-wrap input[name='positionSelected']").forEach(function(inp) {
				if (inp.value == RZBarPlacement) { inp.checked = true; }
			});
			changeRzBarPlacement(RZBarPlacement, false);
		}
		
		var RZBarShowButtons = readRzBarOption("showButtons");
		if (RZBarShowButtons === true) {
			document.documentElement.classList.add("show-edit-buttons");
		}
		
		var RZBarDark = readRzBarOption("darkmode");
		if (RZBarDark === true) {
			document.documentElement.classList.add("rz-bar-dark");
		}
		
		var RzRemoveOutlines = readRzBarOption("outlines");
		if (RzRemoveOutlines !== null) {
			document.querySelectorAll("#rz-bar-wrap input[name='outlineSection']").forEach(function(inp) {
				if (inp.value == RzRemoveOutlines) { inp.checked = true; }
			});
			toggleOutlines(RzRemoveOutlines, false);
		}
		
		var RzButtonsColors = readRzBarOption("buttonsColors");
		if (RzButtonsColors !== null) {
			document.querySelectorAll("#rz-bar-wrap input[name='buttonsColors']").forEach(function(inp) {
				if (inp.value == RzButtonsColors) { inp.checked = true; }
			});
			changeRzButtonsColors(RzButtonsColors, false);
		}

	}
/* Tourguide */
	if (typeof RZ !== "undefined" && RZ.login) {
		const tg = new tourguide.TourGuideClient({
			dialogZ: 999999,
			progressBar: "#000000",
			showStepDots: false,
			targetPadding: 14,
			dialogWidth: 420,
			dialogMaxWidth: 800,
			backdropColor: "rgba(0,0,0,0.8)",
			completeOnFinish: true,
			debug: false,
			exitOnClickOutside: false,
			// additional options
		});
		
		tg.addSteps([{
		  title: '<img src="/revize/plugins/revize_bar/images/welcome.jpg"> Denise from revize.',
		  content: '<h3>Welcome to revize.</h3>This guide will lead you through various editing options, providing a comprehensive understanding of the choices available to you as you edit your website. <div style="width:100%;height:0;padding-bottom:56%;position:relative;margin-top:20px"><iframe src="https://giphy.com/embed/l4JyOCNEfXvVYEqB2" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p class="small"><img src="../plugins/revize_bar/images/alert-circled-purple.svg"> Only by finishing this guide will it avoid displaying again.</p>',
		  order: 0, // Add to start
		  dialogWidth: 800,
		  group: "welcome",
		},{	
		  title: "<img src='/revize/plugins/revize_bar/images/welcome.jpg'> Denise from revize.",
		  content: `<h3>That's a wrap!</h3>Now you have the tools to get started editing your website. Let's see what you can create! <div style="margin-top:10px;padding-top:48.795%;position:relative;"><iframe src="https://gifer.com/embed/g0hD" width="100%" height="100%" style='position:absolute;top:0;left:0;padding-top:10px;' frameBorder="0" allowFullScreen></iframe></div>`,
		  order: 999, // Add to end
		  group: "welcome",
		}]);
		
		tg.onFinish(() => {
			confetti({
				particleCount: 200,
				spread: 140,
				origin: { y: 0.6 },
			});
		})
		
		if (!tg.isFinished("welcome")) {
			tg.start("welcome");
		}
	}
	
})();
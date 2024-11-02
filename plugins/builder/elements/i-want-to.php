<!-- #done -->
<div class="rz-element-wrapper rz-iwantto-wrapper has-edit-buttons">

	<div class="center-top">
		<div class="rz-btns-container">
			<span class="rzBtn rzBtn-sm">Edit</span>
		</div>
	</div>

	<div class="rz-iwantto-wrap d-flex flex-column">

<div class="wizard-bar">
	<div class="wizard-bar-want">I want to..</div>
</div><!-- /.wizard-bar -->

 
<!-- 
	data-controls-position="bottom" default
	data-controls-position="center"
	data-controls-position="center-overflow"
 -->
<div class="iwantto-slider"
	data-tiny-mode="carousel"
	data-tiny-items="1"
	data-tiny-items-md="1"
	data-tiny-items-sm="1"
	data-tiny-gap="0"
	data-tiny-controls="true"
	data-tiny-nav="true"
	data-tiny-autoplay-buttons="false"
	data-tiny-autoplay="false">
	
 				<div class="applyBx p-3">
					<div class="applyHead filter-box-header">
						<div class="sn">1</div>
						<div class="snTitle">I Need To...</div>
					</div><!--/.apply head-->
					<div class="applyInfo">
						<select class="form-control" id="dropdownVerbs">
							<option name="action" value="1:Apply for">Apply for</option>
							<option name="action" value="2:Pay">Pay</option>
							<option name="action" value="3:Report">Report</option>
							<option name="action" value="4:Request">Request</option>
						</select>
					</div><!--/.ApplyInfo-->
				</div><!--/.applyBox-->
				<div class="applyBx p-3">
					<div class="applyHead">
						<div class="sn">2</div>
						<div class="snTitle" id="actionHeader">Pay</div>
					</div><!--/.apply head-->
					<div class="applyInfo">
						<select class="form-control" id="dropdownActions">
							<option name="action" value="Building Permit">Building Permit</option>
							<option name="action" value="Business License">Business License</option>
						</select>
					</div><!--/.ApplyInfo-->
				</div><!--/.applyBox-->
				<div class="applyBx p-3">
					<div class="applyHead">
						<div class="sn">3</div>
						<div class="snTitle" id="nowHeader">Pay a Building Permit</div>
					</div><!--/.apply head-->
					<div class="applyInfo">
						<p id="para">Pretium tempor cursus sm at egestas lectus.</p>
						<a href="/" class="applybtn btn btn-primary btn-block focus" id="actionButton">Apply Now</a>
					</div><!--/.ApplyInfo-->
				</div><!--/.applyBox-->
</div>
 	</div><!-- /.rz-iwantto-wrap -->

</div><!-- /.rz-element-wrapper -->


<script>
	
	// First things first, fetch all of the dropdown channels.  We're going to do
	// this the EE way, i.e the clever way.  Keep that in mind if notice that this
	// part of the JS looks, well, strange
	const dropdowns = [];
	let filteredDropdowns = [];
	
		dropdowns.push({
			title: "Alarm Permit",
		para: "Pretium tempor cursus sit phareas lectus.",
			name: "Alarm Permit",
			link: "/links",
			categories: [1]
	})
		
		dropdowns.push({
			title: "Apply for Job Opportunities",
		para: "Pretium tempor cursus sigestas lectus.",
			name: "Job Opportunities",
			link: "/how-to-apply",
			categories: [1]
		})
	
		dropdowns.push({
			title: "Apply for a Parking Permit",
		para: "Pretium tempor cursus sit pharetr egestas lectus.",
			name: "Parking Permits",
			link: "/",
			categories: [1]
		})
	
	
		dropdowns.push({
			title: "Pay a Building Permit",
		para: "Pretium tempor cursus sm at egestas lectus.",
			name: "Building Permit",
			link: "/",
		categories: [2]
		})
	
		dropdowns.push({
			title: "Pay a Business License",
		para: "Pretium tempor cursus sit pharetra egests lectus.",
			name: "Business License",
			link: "/",
		categories: [2]
		})
	
		dropdowns.push({
			title: "Report a City Bus",
		para: "Pretiums sit pharetra egestas. Quam ut orci felis praesent enim at egestas.",
			name: "City Bus",
			link: "/",
		categories: [3]
		})
	
		dropdowns.push({
			title: "Report City Trail Concerns",
		para: "Pretium tempor cursus sit pgestas lectus.",
			name: "City Trail Concerns",
			link: "/",
			categories: [3]
		})
	
		dropdowns.push({
			title: "Report Construction without a Permit",
		para: "Pretium tempor cursus sit phaas lectus.",
			name: "Construction without a Permit",
			link: "",
			categories: [3]
		})
		dropdowns.push({
			title: "Report a Dog Receptacle Station",
		para: "Pretium tempor cursus sitt egestas lectus.",
			name: "Dog Receptable Station",
			link: "/",
			categories: [3]
		})
	
		dropdowns.push({
			title: "Report an Encampment",
		para: "Pretium tempor curnt enim at egestas lectus.",
			name: "Encampment",
			link: "/",
			categories: [3]
		})
		dropdowns.push({
			title: "Report Grafitti",
		para: "Pretium tra egestas. Quam ut orci felis praesent enim at egestas lectus.",
			name: "Grafitti",
			link: "/",
			categories: [3]
		})
	
	dropdowns.push({
			title: "Request a Business License",
		para: "Pretium tempor cursus sis. Quam ut orci felis praesent enim at egestas lectus.",
			name: "Business License",
			link: "/",
			categories: [4]
		})
	dropdowns.push({
			title: "Pay a Court Order Payment",
		para: "Pretium tempor cursus sit pharetra egestas. Quam ut o.",
			name: "Court Order Payment",
			link: "/",
		categories: [4]
		})
	
	
	// Right then, ugliest part is out of the way.  Let's assign everything that
	// we'll need
	const dropdownVerbs = document.getElementById("dropdownVerbs");
	const dropdownActions = document.getElementById("dropdownActions");
	const nowHeader = document.getElementById("nowHeader");
	const para = document.getElementById("para");
	const actionHeader = document.getElementById("actionHeader");
	const actionButton = document.getElementById("actionButton");
	
	const parser = new DOMParser();
	
	// Then we'll define some functions
	function filterActions(evt) {
	
		let category;
		if (evt) {
			evt.preventDefault();
			category = evt.target.value.split(':');
		} else {
	
			// Presumably called during initial page render.  No matter, just take the
			// value of dropdownVerbs
			category = dropdownVerbs.value.split(":");
		}
	
		// Grab the category ID from the event as well as the name
		if (category == '') {return;}
	
		// Reset the dropdowns and header
		actionHeader.innerHTML = '';
		while(dropdownActions.firstChild) {dropdownActions.removeChild(dropdownActions.firstChild);}
	
		const categoryID = category[0];
		const categoryName = category[1]
	
		// Now let's filter all of our actions such that we only have those who with
		// a matching id
		filteredDropdowns = dropdowns.filter((dropdown) => {
			return dropdown.categories.includes(parseInt(categoryID));
		});
	
		// Let's populate actionDropdown with a no-value "verb" dropdown, as well as
		// change the header to said verb.
		actionHeader.innerHTML = categoryName;
	
		// And then we'll populate the actionDropdown with these results
		filteredDropdowns.forEach((dropdown) => {
	
			const selectOption = parser.parseFromString(
				`<option name="action" value="${dropdown.name}">${dropdown.name}</option>`,
				'text/html'
			);
	
			dropdownActions.appendChild(selectOption.querySelector('option'));
	
		});
	
		// We'll also want to generate a new header for the fullDropdownTitle based
		// on the first filteredDropdown title
		nowHeader.innerHTML = filteredDropdowns[0].title;
		para.innerHTML = filteredDropdowns[0].para;
		actionButton.href = filteredDropdowns[0].link;
	
	}
	
	// Triggered by the second dropdown.  Selects an action from a list of
	// associated verbs
	function selectAction(evt) {
	
		// Make sure the action is valid
		if (evt.target.value == "") {return;}
	
		// Otherwise, we have the dropdown name, it's a simple matter of finding
		// said name within the dropdowns array
		for(let i = 0; i < filteredDropdowns.length; i ++) {
	
			const dropdown = filteredDropdowns[i];
			if (dropdown.name == evt.target.value) {
	
				// Splendid, we have what we need.  What we'll do now is set
				// fullDropdownTitle to the name of the the title, as well as set any
				// appropriate links such that they have the page uri as a value
				nowHeader.innerHTML = dropdown.title;
				actionButton.href = dropdown.link;
	
				// We can also go ahead and exit early
				return;
			}
		}
	}
	
	dropdownVerbs.addEventListener('input', filterActions);
	dropdownActions.addEventListener('input', selectAction);
	filterActions();


 
</script>
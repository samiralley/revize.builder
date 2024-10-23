<%@ page language="java" contentType="application/json" pageEncoding="UTF-8"  %>
<%@ include file="/plugins/setup/setup_include_header.jsp" %>
<div id="user-logged-in" class="d-none d-md-block">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-md-4 d-flex">
				<img src="_assets_/images/r..jpg" class="rz-icon"> <span class="rz-editing text-truncate"><i></i>revize editing mode</span>
				<div class="toggle-edit-buttons d-flex align-items-center" data-toggle="tooltip" data-toggle="tooltip" data-placement="bottom" title="Show or hide Edit buttons">
					<img src="_assets_/images/show.svg">
				</div>
			</div>
			
			<div class="col-md-4 d-flex justify-content-center">
				<div class="btn-group" role="group" aria-label="Basic example">
				  <button type="button" class="btn btn-secondary bg-inverse" data-toggle="tooltip" data-toggle="tooltip" data-placement="bottom" title="Desktop View" onclick="window.open(document.URL, '_blank', 'location=yes,height=1000,width=1200,scrollbars=yes,status=yes');"><img src="_assets_/images/laptop.svg" ></button>
				  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-toggle="tooltip" data-placement="bottom" title="Tablet View" onclick="window.open(document.URL, '_blank', 'location=yes,height=1080,width=810,scrollbars=yes,status=yes');"><img src="_assets_/images/tablet.svg" ></button>
				  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-toggle="tooltip" data-placement="bottom" title="Phone View" onclick="window.open(document.URL, '_blank', 'location=yes,height=932,width=430,scrollbars=yes,status=yes');"><img src="_assets_/images/mobile.svg" ></button>
				</div>
			</div>
			
			<div class="col-md-4 d-flex align-items-center d-flex justify-content-end align-items-stretch">
				<a href="https://intercom.help/revizefaqs/en/" class="btn bg-transparent align-items-center d-flex" data-toggle="tooltip" data-placement="bottom" title="Help Center"><img src="_assets_/images/circle-question.svg"></a>
					 <script language="JavaScript" type="text/JavaScript">
						RZ.nexturl = '';
						RZ.img = '<span class="btn bg-transparent align-items-center d-flex" data-toggle="tooltip" data-toggle="tooltip" data-placement="bottom" title="User Permissions"><img src="_assets_/images/person.svg"></span>';
						RZ.options = '';
						if (typeof RZaction != 'undefined') RZaction('permissions');
					</script>	
					
					<script language="JavaScript" type="text/JavaScript">
						RZ.module = 'freeform';
						RZ.nexturl = 'editforms/metadata-editform.jsp?';
						RZ.img = '<span class="btn bg-transparent align-items-center d-flex" data-toggle="tooltip" data-placement="bottom" title="Edit Metadata"><img src="_assets_/images/edit.svg"></span>';
						RZ.set = 'pageid=index';
						RZ.options = '';
						if (typeof RZaction != 'undefined') RZaction('editform');
					</script>
					
					<div class="dropdown d-flex" data-toggle="tooltip" data-placement="left" title="Admin Tools">
					  <a class="btn dropdown-toggle d-flex align-items-center" onmouseup="RZadminwin()">
						<img src="_assets_/images/more-vertical.svg">
					  </a>
					</div>
				 
			</div>
		</div>
	</div>
</div>	
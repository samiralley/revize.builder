<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><%-- #RevizeProperties USE REVIZE MENU (DOCUMENT PROPERTIES) TO EDIT DATA BELOW:
status=new
options=
server=localhost:8080
projectName=plugins
label=
location=admincenter/adminpanel.jsp
version=
docType=editpage
subType=list
moduleName=
fieldName=
channels=|
description=
--%><%-- #BeginRZ-PageHeader
--%><%@page language="java"
%><%@include file="/util/setup_editlist_header.jsp"
%><%-- #EndRZ-PageHeader --%>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Revize Admin Panel</title>
<script language="JavaScript" src="/revize/admincenter/adminpanel.js" type="text/JavaScript"></script>
<script language="JavaScript" src="/revize/util/snippet_helper.js" type="text/JavaScript"></script>
<script language="JavaScript" src="/revize/util/snippet_helper_editform.js" type="text/JavaScript"></script>
<script language="JavaScript" src="/revize/util/snippet_helper_fieldvalues.js" type="text/JavaScript"></script>
<script language="JavaScript" src="/revize/util/snippet_helper_parse.js" type="text/JavaScript"></script>
<%@include file="/security/isAuthenticated.jsp"
%><%
//int err = 25 / 0;		//for error.jsp testing

/**********************************/
/*BOOKMARK Page specific JSP Code*/
/********************************/
String msg = session.getAttribute("RZadminpanel-msg") + "";
session.setAttribute("RZadminpanel-msg","");
if (msg.equals("null")) msg = "";

String status = session.getAttribute("RZadminpanel-status") + "";
session.setAttribute("RZadminpanel-status","");
if (status.equals("null")) status = "";

String debug = session.getAttribute("RZadminpanel-debug") + "";
session.setAttribute("RZadminpanel-debug","");
if (debug.equals("null")) debug = "";

//----- Get details and format for html / javascript
String details = session.getAttribute("RZadminpanel-details") + "";
session.setAttribute("RZadminpanel-details","");

if ( (status+details).length() == 0 && debug.length() > 0)
{
	msg = "debug output: " + debug.length();
	details = debug;
}

if (details.equals("null")) details = "";
details = details.replaceAll("\\r\\n","\n");	// \r\n --> \n		windows PC
details = details.replaceAll("\\r","\n");		// \r   --> \n		Apple
details = details.replaceAll("\\n","<br>");		// \n   --> <br>	convert to html newline
details = details.replace('\\','/');			// \    --> /		prepare for javascript
details = details.replaceAll("'","\\\\'");		// '    --> \'			''			''
//StringUtils.console(rz.webspace,"details:\n"+details);

/************************************/
/*BOOKMARK Page specific JavaScript*/
/**********************************/
%><script type="text/javascript">
/*-----------------------------------------------------------------------------------
Global variables and Javascript run while page loads
-----------------------------------------------------------------------------------*/
if (typeof(g) == 'undefined') g = {};
g.status = '<%=status%>';
g.msg = '<%=msg%>';
g.details = '<%=details%>';
g.isAuthenticated = '<%=isAuthenticated%>';
g.debugPluginOptions = '<%=session.getAttribute("REVIZE_DEBUG_PLUGIN")+""%>';
g.debugJavaOptions = '<%=session.getAttribute("REVIZE_DEBUG_JAVA")+""%>';
g.debugJavaFilterPrompt = "No output if className does not contain text here.";

//----- AdminPanel constants
RZadminwin.mainId = 'RZadminwin_main';
RZadminwin.textId = 'RZadminwin_text';
RZadminwin.formId = 'RZadminwin_form';
RZadminwin.moreId = 'RZadminwin_more';
RZadminwin.debugId = 'RZadminwin_debug';
RZadminwin.traceId = 'RZadminwin_trace';

RZadminwin.adminpanel = 'RZadminpanel';
//RZadminwin.qualifier = parent.RZ.page.domain + parent.RZ.page.pathfilename;

RZadminwin.show = false;
RZadminwin.actions_allowed = 'more';
RZadminwin.more_height = '100px';	//was 90px

/*-----------------------------------------------------------------------------------
functions referenced in adminpanel.js for RZcopyFunctions()
-----------------------------------------------------------------------------------*/
function copyFunctions()
{
	RZgetoptionvalue();
}
/*-----------------------------------------------------------------------------------
Called by body onload handler
-----------------------------------------------------------------------------------*/
function setup()
{
	RZ = parent.RZ;

	// Link or clone parent functions used on this page or included scripts
	RZcopyFunctions(parent,window);

	// Set initial form field values
	document.forms[0].RZadminwin_debug.checked = RZ.debug;
	document.forms[0].RZadminwin_trace.checked = RZ.trace;
	RZdebugPluginInit(g.debugPluginOptions);
	RZdebugJavaInit(g.debugJavaOptions);

	var msg = g.msg;
	if (g.details)
		msg += ' (<a href="javascript:showDetails(true)" style="color:red">details</a>)';

	var action = parent.RZadminwin.action;
	parent.RZadminwin.action = '';		//clear initial action

	if (g.status == 'login' || !g.isAuthenticated || RZ.login != RZ.webspace)
	{
		RZshowlayer('RZadminwin_templates',false);
	}
	else
	{
		document.getElementById('RZadminwin_login').value  = 'Logout';
		if (parent.RZ.pagetype != 'template')
			RZshowlayer('RZadminwin_templates',false);
	}

	var hash = parent.location.hash;
	if (hash == '#adminpanel-more'
	|| ((RZ.debug || RZ.trace) && hash.indexOf('noadminpanel') != 1))
		action = 'more';
	else if (hash.indexOf('noadminpanel') == 1)
		RZadminwin.show = true;			//causes panel to hide

	// Show AdminPanel with specifed layers
	RZadminwin(msg,action);

	// Notify parent loading is complete by providing link to this window
	parent.RZ.adminwin = window;

	// Activate "Pause/Break" keyup event monitor
	// Attach keyup toggle function to this document
	RZeventadd(document, "keyup", function(e) {parent.RZadminwin.toggle(event,window)});

	var loadingDiv = parent.document.getElementById('RZadminwin-loading');
	if (loadingDiv)
		loadingDiv.parentNode.removeChild(loadingDiv);
	parent.document.getElementById('RZadminpanel').style.visibility = '';
}
/*-----------------------------------------------------------------------------------
Called to toggle AdminPanel (i.e. show / hide) or display msg e.g leaving or returned
-----------------------------------------------------------------------------------*/
function RZadminwin(msg,action)
{
	// if returning, show msg (more status should not change)
	if (msg)
	{
		RZadminwin.show = true;
		RZsetInnerHTML(RZadminwin.textId,msg);
	}

	// Show adminpanel if was hidden or
	else if (!RZadminwin.show || action == 'more')
	{
		RZadminwin.show = true;
		RZsetInnerHTML(RZadminwin.textId,RZadminwinmsg('reset'));
	}

	// Hide AdminPanel if it was showing
	else
	{
		RZadminwin.show = false;
	}
	// Hide Permission button if no access to RZ.permissions_module
	if (parent.RZpermits && parent.RZ
	&& !parent.RZpermits(parent.RZ.permissions_module, 'u'))
		RZshowlayer('permissionsBtn',false);

	//----- Detemine more layer enabled
	//		1) requested by  more click (i.e. Ctrl+Pause/Break keys)
	//		2) hash indicates panel showing with more layer
	//		3) page first opened and RZ.debug or RZ.trace enabled
	var isMore = false;
	if (action == 'more'
	|| ((RZ.trace || RZ.debug) && RZadminwin.show))
		isMore = true;

	var height, mainDiv = document.getElementById(RZadminwin.mainId);
	var heightInc = document.all ? 10 : 6;

	/*BOOKMARK ----- If showing with more layer*/
	//----- If showing with more layer
	if (isMore)
	{
		RZshowlayer(RZadminwin.moreId,true);			//show more layer
		if (parent.RZadminwin.container)
		{
			document.getElementById(RZadminwin.mainId).className = 'more';
			height = (mainDiv.clientHeight + heightInc) + 'px';
			parent.RZadminwin.container.firstChild.style.height = height;
		}

		if (parent.location.hash != '#adminpanel-more') //update hash if wrong
			parent.location.hash = '#adminpanel-more';
	}

	//----- If showing w/o more
	else if (RZadminwin.show)
	{
		RZshowlayer(RZadminwin.moreId,false);			//hide more layer
		if (parent.RZadminwin.container)
		{
			document.getElementById(RZadminwin.mainId).className = 'less';
			//parent.RZadminwin.container.firstChild.style.height = '70px';
			height = (mainDiv.clientHeight + heightInc) + 'px';
			parent.RZadminwin.container.firstChild.style.height = height;
			if (parent.location.hash != '#adminpanel') 		//update hash if wrong
				parent.location.hash = '#adminpanel';
		}
	}

	//----- If hiding panel just make sure the hash is correct (layers will be
	//		layers and height is checked and changed next time panel shows
	else
	{
		// must reload page if hash wrong; IE7 had issues with hash=# when details div open
		var hash = (RZ.debug || RZ.trace) ? '#noadminpanel' : '';
		if (parent.location.hash != hash)
			parent.location.replace(parent.location.pathname+hash);
			//parent.location.hash = hash;
	}

	//----- Show / hide adminpanel
	//var container = document.getElementById(RZadminwin.mainId).parentNode;
	RZshowlayer(parent.RZadminwin.container,RZadminwin.show);
	if (RZadminwin.show)
		window.scrollTo(0,0);
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function RZadminwinmsg(options)
{
	var msg = '';

	if (RZ.pagetype == 'template')
	{
		msg = 'template='+ RZ.pagetemplatename;
		if (RZ.pagemodule)
			msg += ', module=' + RZ.pagemodule + ', recordid=' + RZ.pagerecordid;
	}
	else if (RZ.pagetype)
		msg = 'Revize ' + RZ.pagetype;

	if (options == 'reset')
		msg = '<b>Revize AdminPanel:</b> ' + msg;
	return msg;
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function login()
{
	RZsetInnerHTML(RZadminwin.textId, 'Login/Logout pending...');
	// split to remove the revize/*webspacename*/ as it will be auto added when the return url is generated -JDL
	RZloginscreen(parent.RZ.page.pathfilename.split(parent.RZ.webspace + '/')[1].replace(/^\/\//,'/') + '#adminpanel');
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function firebug()
{
	RZsetInnerHTML(RZadminwin.textId, 'Loading firebug...');
	setTimeout('RZfirebug()',0);
	setTimeout(function() {RZsetInnerHTML(RZadminwin.textId, '')},5000);
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function permissionsCall()
{
	RZsetInnerHTML(RZadminwin.textId, 'Updating Permissions...');
	RZpermissions('','adminpanel=adminpanel');
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function publishrecord(publishreffiles)
{
	RZsetInnerHTML(RZadminwin.textId, 'Publishing ' + RZadminwinmsg() + '...');
	RZpublishrecord(RZ.pagetemplatename,RZ.pagemodule,RZ.pagerecordid, publishreffiles);
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function publishcalendars()
{
	RZsetInnerHTML(RZadminwin.textId, 'Publishing Calendar Templates...');
	RZpublishcalendars(RZ.webspace);
}
/*-----------------------------------------------------------------------------------
Opens layer to show last request error details (e.g. stacktrace)
-----------------------------------------------------------------------------------*/
function showDetails(isTrueFalse)
{
	RZshowDetails(isTrueFalse,g.msg,g.details);
}
/*-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------*/
function fileMgrCall()
{
	// create a one off element to pass to existing function.
	// prevents rewriting or duplicating logic
	var valueElement = document.createElement('input');
	valueElement.type = 'text';
	valueElement.name = 'RZAdminPanelInput';
	valueElement.value = '';

	RZselectFile('file', valueElement, valueElement, "location=/,");
}

function initWhatLinks()
{
	parent.location = '/revize/plugins/helpers/what_links_here.jsp?pageid='+RZ.pageid+
		'&baseUrl='+RZ.revizeserverurl+
		'&referrerLink='+parent.location.origin+parent.location.pathname+
		'&webspace='+RZ.webspace+
		'&module='+RZ.pagemodule+
		'&pagetemplateid='+RZ.pagetemplateid+
		'&linkedmoduleid='+RZ.pagemoduleid+
		'&linkedrecordid='+RZ.pagerecordid+
		'&permissions_parent='+RZ.page_key+
		'&page_key='+RZ.page_key;
}
/*-----------------------------------------------------------------------------------
End of Page Specific Javascript
-----------------------------------------------------------------------------------*/
</script>
<style type="text/css">

*{
	box-sizing: border-box;
	margin:0;
	padding:0;	
}
body{background:transparent!important;
	font-size:16px;
	line-height:1.6;
	font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
	color:#000;
	-webkit-font-smoothing:antialiased;
	-moz-osx-font-smoothing:grayscale;
	-webkit-text-size-adjust:100%;
	padding-top:0
}
#RZadminwin_text{
	font-size: 12px;
	color: #fff;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	line-height: 1;
}
#RZadminwin_main{
	background:#fff;
	padding: 5px 14px;
	/* border-radius:6px */
}
input[type="button"],button{
	border:0;
	/* border-radius:4px7*/
	padding:14px;
	margin:0;
	line-height:1;
	width:100%;
	text-align:left;
	font-size:16px;
	display:block;
	background:none!important;
	cursor:pointer;
	transition:all .4s;
	outline:inset 2px solid transparent;
	font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
	display:flex;
	/* align-items:center; */
}
input[type="button"]:hover,button:hover{
	/* background:#bf99ff!important; */
	color:#000;
	/* box-shadow: inset 0 0 0 2px #6000fe!important; */
	background:#eee!important;
	/* outline:2px solid rgba(96,0,254,.6)!important; */
}
button svg{
	margin-right: 14px;
	flex-grow: 0;
	flex-shrink: 0;
	flex-basis: 24px;
}
button svg path{
	fill:#000
}
button:hover svg path{
	/* fill:#6000fe */
}
input[type="button"].btn-close{
	padding:0 14px;
	text-align:right;
	font-size:21px;
	background:transparent!important;
	border-bottom:0;
	position: absolute;
	top:0;
	right:0;
	height:28px!important;
	color:#000;
	box-shadow: none!important;
	
}
input[type="button"]:last-of-type{

}

.small em{
	font-style: normal;
	display: block;
	font-size: 12px;
	line-height: 18px;
	padding-top: 5px;
	opacity: .6
}

#RZadminwin_form{
	/* padding:10px 0 */
	padding: 0
}

#RZadminwin_main.more {
	height: 115px;
}
 
#RZadminwin_main label input {
	height: 16px;
}
#RZadminwin_login, #RZadminwin_templates {
	display: block;
}
#RZadminwin_login{
	border:0;
	padding:14px;
	text-align: center;
	background:#6000fe!important;
	color:#fff!important
	
}
#RZadminwin_main_more {
	display: none;
}
#RZadminwin_more{
	/* display: block!important */ 
}

</style>
</head>
<body onload="setup();">
<div id="RZadminwin_main">
<!-- <input type="button" value="&times;" onClick="RZadminwin();" class="btn-close" /> -->
  <div id="RZadminwin_text">&nbsp;</div>
  <form id="RZadminwin_form" action="#">
    <div id="RZadminwin_templates">
      <button type="button" id="permissionsBtn" onClick="permissionsCall();" >
		  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path d="M15.602 5.25537C16.4301 5.6627 17 6.5148 17 7.5C17 8.4852 16.4301 9.3373 15.602 9.74463C15.2911 10.5894 14.8098 11.3518 14.1998 11.9901C14.299 11.9967 14.3991 12 14.5 12C16.9852 12 19 9.98528 19 7.5C19 5.01472 16.9852 3 14.5 3C14.3991 3 14.299 3.00332 14.1998 3.00985C14.8098 3.64818 15.2911 4.41058 15.602 5.25537Z" fill="#6000fe"/>
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 10C10.8807 10 12 8.88071 12 7.5C12 6.11929 10.8807 5 9.5 5C8.11929 5 7 6.11929 7 7.5C7 8.88071 8.11929 10 9.5 10ZM9.5 12C11.9853 12 14 9.98528 14 7.5C14 5.01472 11.9853 3 9.5 3C7.01472 3 5 5.01472 5 7.5C5 9.98528 7.01472 12 9.5 12Z" fill="#6000fe"/>
		  <path d="M5 16H14C15.1046 16 16 16.8954 16 18V21H18V18C18 15.7909 16.2091 14 14 14H5C2.79086 14 1 15.7909 1 18V21H3V18C3 16.8954 3.89543 16 5 16Z" fill="#6000fe"/>
		  <path d="M21 20.9999L23 20.9999L23 18.9999C23 16.405 21.0234 14.2718 18.4937 14.0239C19.142 14.7561 19.6141 15.648 19.8436 16.633C20.5474 17.182 21 18.0381 21 18.9999V20.9999Z" fill="#6000fe"/>
		  </svg>		  
		  <span class="small">Permissions <em>Edit user permissions for editing pages throughout the website</em></span>
	  </button>
	  <button type="button" id="fileMgrBtn" onClick="fileMgrCall();" >
		  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6L10 3H2V21H22V6H12ZM20 8H10.9296L8.92963 5H4V19H20V8Z" fill="black"/>
		  </svg>
		  
		  <span class="small">File Manager <em>Check all files within your website or upload new ones</em></span>

	  </button>
      <button type="button" value="Publish this Page" onClick="publishrecord(false)" >
		  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path d="M11.9498 13.4644L16.7071 8.70718L15.2928 7.29297L10.5356 12.0502L11.9498 13.4644Z" fill="black"/>
		  <path d="M3.70706 12.293L2.29285 13.7072L6.99995 18.4143L8.41427 17L3.70706 12.293Z" fill="black"/>
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M21.7071 8.65713L11.95 18.4142L7.24292 13.7071L8.65713 12.2929L11.95 15.5858L20.2929 7.24292L21.7071 8.65713Z" fill="black"/>
		  </svg>
		  <span class="small">Publish this Page<em>Help push changes to this page in the event you do not see your changes go live</em></span>
	  </button>
	<button type="button" value="What Links Here?" is="whatLinks" onClick="initWhatLinks();" >
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M17 9C18.6569 9 20 10.3431 20 12C20 13.6569 18.6569 15 17 15H13V17H17C19.7614 17 22 14.7614 22 12C22 9.23858 19.7614 7 17 7H13V9H17Z" fill="black"/>
		<path d="M7 9H11V7H7C4.23858 7 2 9.23858 2 12C2 14.7614 4.23858 17 7 17H11V15H7C5.34315 15 4 13.6569 4 12C4 10.3431 5.34315 9 7 9Z" fill="black"/>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M15 13H9V11H15V13Z" fill="black"/>
		</svg>
		<span class="small">What Links Here?<em>Check which pages are linked here in case you forget</em></span>
	</button>
<% if(revize_username.equals("root") || revize_username.indexOf("revize.com") != -1) { %>
      <!-- <button value="Publish Calendars" onClick="publishcalendars()" >
		  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10H6V8H18V10Z" fill="black"/>
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4V2H8V4H16V2H18V4H22V22H2V4H6ZM4 6V20H20V6H4Z" fill="black"/>
		  </svg>
	  </button> -->
      <button value="Publish RefFiles" onClick="publishrecord(true)">
		  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" clip-rule="evenodd" d="M20 22H4V2H16L20 6V22ZM18 20H6V4H15V7H18V20Z" fill="black"/>
		  </svg>
		  <span class="small">Publish RefFiles<em>For internal use only</em></span>
	  </button>
<% } %>
<button type="button" value="Publish TopNav" onClick="RZpublishrecord('topnav_include','','')" >
	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M20 17H4V15H20V17Z" fill="black"/>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M20 9H4V7H20V9Z" fill="black"/>
	</svg>
	<span class="small">Publish Top Navigation<em>Help push changes to the main navigation in the event you do not see your changes</em></span>
</button>
    </div>
	  <div style="padding:7px 0 0"><input type="button" value="Login" id="RZadminwin_login" onClick="login();" /></div>
    <div id="RZadminwin_more">
        <label>
          <input name="RZadminwin_debug" type="checkbox" id="RZadminwin_debug" value="true" onClick="parent.RZdebug()" />Debug</label>
        <label>
          <input name="RZadminwin_trace" type="checkbox" id="RZadminwin_trace" value="true" onClick="RZtraceToggle(this)" />Trace</label>
        <input type="button" value="Debugger" onClick="parent.RZstartDebugger()" />
        <input type="button" value="Cookies" onClick="RZshowcookies()" />
        <input type="button" name="FirebugBtn" id="FirebugBtn" value="Firebug" onclick="firebug()" />
		<input type="button" value="AdminCenter" onClick="RZadmincenter()" />
      <br />
      <label>
        <input name="RZadminwin_debugPluginMode" id="RZadminwin_debugPluginMode" type="checkbox"  value="true" onClick="RZdebugPluginSave()" />
        Debug Plugin
        <select name="RZadminwin_debugPluginName" id="RZadminwin_debugPluginName" style="width:205px;font-size:12px" onChange="RZdebugPluginSave()">
          <option value="[all]" selected="selected">--Debug Output for All Plugins--</option>
          <option>menus_leftnav_section</option>
        </select>
      </label>
      <label>
        <input name="RZadminwin_debugPluginScope" id="RZadminwin_debugPluginScope" type="radio"
        value="thisPage" checked="checked" onClick="RZdebugPluginSave()" />this page</label>
      <label>
        <input name="RZadminwin_debugPluginScope" id="RZadminwin_debugPluginScope" type="radio"
        value="allPages" onClick="RZdebugPluginSave()" />all pages</label>
      <br />
      <label>
        <input name="RZadminwin_debugJavaMode" id="RZadminwin_debugJavaMode" type="checkbox" onClick="RZdebugJavaSave()" value="true" />
        Java debugUtils.console()</label>
      <label>
        <input name="RZadminwin_debugJavaFilter" id="RZadminwin_debugJavaFilter" type="text"
        style="width:280px;font-size:12px" onBlur="if (this.value=='') {this.value=g.debugJavaFilterPrompt;this.style.color='#999'}" onFocus="if (this.value==g.debugJavaFilterPrompt) {this.value='';this.style.color='#000'}" onChange="RZdebugJavaSave()" />
      </label>
    </div>
  </form>
</div>
</body>
</html>
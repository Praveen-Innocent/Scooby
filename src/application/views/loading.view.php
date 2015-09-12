<?php include('header.php'); ?>
<style>
body {
	margin:0;
	background-color:#f2f2f2;	
}

h1 {
	font-size:28px;	
}
</style>
<script type="text/javascript">
	
function timedText()
{
	setTimeout('msg1()', 2000);
	setTimeout('msg2()', 3000);
	setTimeout('redirect()',4000);
}
function redirect() {
	window.location="home";	
}
function msg1() {
	document.getElementById('login-redirect-message').firstChild.nodeValue = "Loading customizations...";
}

function msg2() {
	document.getElementById('login-redirect-message').firstChild.nodeValue = "Redirecting...";
}

</script>


<div id="login-redirect-container"  style="width:500px; height:255px; background-color:white; margin:0 auto; margin-top:10%; padding:10px; border-radius:10px; border:1px solid #ccc; text-align:center;">
<center><img src="img/logo%402x.png" alt=""></center>

		<h1>Please wait while you're redirected</h1>
		<p class="login-redirect-message" id="login-redirect-message">Authorizing...</p>
<script type="text/javascript">timedText()</script>		<img src="img/loader.gif" alt="...">
	</div>

<div style="margin-top:200px"></div>

<?php include('footer.php'); ?>
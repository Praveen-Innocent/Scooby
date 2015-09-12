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
<?php echo $msg; ?>
   <div id="login-redirect-container"  style="width:500px; height:305px; background-color:white; margin:0 auto; margin-top:10%; padding:10px; border-radius:10px; border:1px solid #ccc; text-align:center;">
<center><img src="img/logo%402x.png"  alt=""></center>
 <form class="form-signin" method="post">
                <input  name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                <input name="pass" type="password" class="form-control" placeholder="Password" required>
                <input name="login" class="btn btn-lg btn-danger btn-block" type="submit" value="Sign in"  />
                
                </form>
		
	</div>

<div style="margin-top:200px"></div>

<?php include('footer.php'); ?>
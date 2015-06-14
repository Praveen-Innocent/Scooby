<?php include('header.php'); ?>
	
    <div id="content">
        
        <h1>Welcome to Scooby</h1>
        <p>
        	<a href="sample/" > Sample Page with data from Model </a> </p>
        	<a href="sample/home/?name=innocent" > Sample Page with Params </a> </p>
        	<a href="sample/plugin" > Sample Page calling Plugins </a> </p>
        <?php print Config :: $Database; ?>
    </div>

<?php include('footer.php'); ?>
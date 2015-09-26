<?php
	$page_title = "Home Page";
	include('header.html');
?>

<?php
	include('menu.html');
?>

	<div id = "Main">
		<div class = "search">
				<form method="get" action="http://www.MusicHub.com/search.php">
					<input type="text" name="search" placeholder="Search Here" value="" maxlength="256" size="32" />
					<input type="submit" name="btn" value="Search"/>
				</form>
		</div>
	</div>
<?php
	include('footer.html');
?>
		
			
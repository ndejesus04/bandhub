<?php
	$page_title = "Home Page";
	include('header.html');
?>

<?php
	include('menu.html');
?>

	<div id = "Main">
			<section class="container">
				<div class="login">
					<h1> Login </h1>
					<form method ="post" action="index.html">
						<p><input type="text" name="login" value="" placeholder="Username or Email"></p>
						<p><input type="password" name ="password" value="" placeholder="Password"></p>
						<div class = "Remember_me">
							<label>
								<input type="checkbox" name="Remember_me" id="Remember_me">
								Remember me on this computer
							</label>
						</p>
						<button type = "SUBMIT"> Submit </button>
					</form>
				</div>

				<div class="login-help">
					<p>Forgot your password? <a href="recovery_page.php"> Click here to reset it </a> </p>
				</div>
			</section>
		</div>
<?php
	include('footer.html');
?>

<?php $a = NULL;?>
<?php
if (isset($_POST['password']))
{
$username = $_POST['username'];
$pass = $_POST['pass'];
$username = strtolower($username);
$pass = strtolower($pass);
if ($usernanme != 'marpattclient' && $pass != 'mowbray')

{$a = '<p style="clear:left;">Sorry that is incorrect please try again</p>';}
else
{header('Location: http://www.marpatt.co.uk/login.php');}
}
?>
		<?php include('includes/header.php');?>
		
		<img src="img/sales.jpg" alt="">
		<section class="content">
			<div class="gridText download">
				<div class="donwload_third">
					<h2>download centre</h2>
					<p>To access the download section of the website simply input your username and password below and click Submit. If you do not have a password and username then please <a href="contact-us.php">contact us</a>.</p>
				</div>
				<img src="img/mac.jpg" alt="" class ="mac">
				<section class="clear login">
					<h3>login to the secure area</h3>
					<p class="first">To allow you to download the secure content on this site you will need to enter your username and password for this section below (this is is for TRADE CUSTOMER only)</p>
					<form action="" method="post">
						<div id="dvdColOne">	
							<fieldset id="details">
								<legend>Your Details</legend>
									<label for="yourUserName">Your Username Name</label>
									<input type="text" id="yourUserName" value="Your User Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your User Name':this.value;" name="username" >
									<label for="yourPassword">Your Password</label>
									<input type="password" id="yourPassword" name="pass">
									<input type="submit" value="SUBMIT" id="order" name="password">
									<?php echo $a; ?>
							</fieldset>
						</div>
					</form>
				</section>
		</section>
		<?php include('includes/footer.php');?>
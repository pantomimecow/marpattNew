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
					<p>As part of the our continued support for Marpatt customers we have included on this page a number of downloads which you might find of interest and of use. If you would like any further assistance or information then please do not hesitate to <a href="contact-us.php">contact us</a>.</p>
				</div>
				<div class="downloads">
					<h3>Accessory Technical Product Manual (March 09)</h3>
        			<p>To download our Accessory Technical Product Manual simply click on the PDF icon below (you will require a PDF reader).</p>
      				<a href="downloads/technical_manual.pdf" target="_blank" title="Technical Manual"><img src="img/pdfDL.jpg"></a>

     				<h3>Egger Board Matches</h3>
      				<a href="downloads/EGGER BOARD MATCHES.xls" target="_blank" title="Egger Board Matches"><img src="img/excel.jpg"></a>

      				<h3>Order  <span class="normal">Form</span></h3>
       				<p>Use this form when ordering from Marpatt and fax back to 0116 2743944</p>
      				<a href="downloads/order form.xls" target="_blank" title="Order Form"><img src="img/excel.jpg"></a>
				</div>
				<div class="downloads">
					<h3>PANELCO Marpatt - MFC suggested matches</h3>
       				<a href="downloads/PANELCO AND MARPATT CARCASS MFC BOARD MATCH SUGGESTIONS.docx" target="_blank" title="Carcass Suggestions"><img src="img/word.jpg"></a>
       				<p>PANELCO DETAILS<br>Grindley Lane,<br>Blythe Bridge,<br>Stoke-on-Trent,<br>Staffordshire<br>ST11 9LS<br>t. 01782 392100<br>f. 01782 38887<br>offices in Dundee and Bristol for further details contact our Stoke Sales Office</p>
					<h3>Web Ready Images</h3>
	 				<p>To download a folder of web ready images click on the Zip Icon below to go to our Image Library page.</p>
	 				<a href="web-ready.php" title="Web Ready Images" target="_blank"><img src="img/zip.jpg" width="50" height="50" alt="Zip Icon"></a>
	 				<h3>Print Ready Images</h3>
	 				<p>To download a folder of high resoulution print ready images click on the Zip Icon below to go to our Image Library page.</p>
	 				<a href="print-ready.php" title="Print Ready Images" target="_blank"><img src="img/zip.jpg" width="50" height="50" alt="Zip Icon"></a>
				</div>
		</section>
		<?php include('includes/footer.php');?>
<!DOCTYPE html>

<?php 
error_reporting(0);
extract($_POST);
session_start();
include 'config/dbconfig.php';


$email = $mail;
// echo $email;
$sql = "SELECT * FROM manufacturer WHERE man_email='$email'";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// echo $sql;





?>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:620px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>
<body style="margin: 0; background-color: #091548; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #091548;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #091548; background-image: url('images/background_2.png'); background-position: center top; background-repeat: repeat;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;" width="600">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:8px;">
<div align="center" style="line-height:10px"><img alt="Main Image" src="images/header3.png" style="display: block; height: auto; border: 0; width: 232px; max-width: 100%;" title="Main Image" width="232"/></div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:15px;padding-top:10px;">
<div style="font-family: sans-serif">
<div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #ffffff; line-height: 1.2; font-family: Varela Round, Trebuchet MS, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 14px; text-align: center;"><span style="font-size:30px;">FORGET PASSWORD</span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="5" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 14px; mso-line-height-alt: 21px; color: #ffffff; line-height: 1.5; font-family: Varela Round, Trebuchet MS, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 14px; text-align: center;">We received a request to reset your password. Don’t worry,</p>
<p style="margin: 0; font-size: 14px; text-align: center;">we are here to help you.</p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="60%">
<tr>
<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #5A6BA8;"><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Varela Round, Trebuchet MS, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 12px;">                                                                   </p>
</div>
</div>
</td>

<p style="margin: 0; font-size: 18px; text-align: center; color:white ">
<?php 

if(($result['qstn'] != NULL ) && (!empty($result['qstn'])))
{
	
echo $result['qstn']."?";
}else
{
echo "SORRY YOU DIDN'T SET YOUR SECURITY QUESTION ";
}?> </p>
</tr>
</table>





<form action="functions/forget_pass.php" method="POST" >


<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">

<tr>

<?php
if($result['qstn'] != NULL )
{ ?>
<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
<center><textarea rows="1" cols="56" name="ans" placeholder="ENTER YOUR ANSWER"></textarea></center>
<?php } ?>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Varela Round, Trebuchet MS, Helvetica, sans-serif;">

<p style="margin: 0; font-size: 12px;">                                               
 <span style="font-size:20px;"> 
 
 <center>
<?php
 
if($result['qstn'] != NULL )
{ ?>
 
 <button type="submit" style="text-decoration:none;display:inline-block;color:#091548;background-color:#ffffff;border-radius:24px;width:auto;border-top:1px solid #ffffff;border-right:1px solid #ffffff;border-bottom:1px solid #ffffff;border-left:1px solid #ffffff;padding-top:5px;padding-bottom:5px;font-family:Varela Round, Trebuchet MS, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank">

 <span style="padding-left:25px;padding-right:25px;font-size:15px;display:inline-block;letter-spacing:normal;"><span style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;">

 <span data-mce-style="font-size: 15px; line-height: 30px;" style="font-size: 15px; line-height: 30px;">
 
 <strong>Submit</strong></span></span></span></button>

  </span></p></center>


<?php } ?>
	</form>



</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-bottom:20px;padding-left:15px;padding-right:15px;padding-top:20px;text-align:center;">
<div align="center">

<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
</div>
</td>
</tr>
</form>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 600px;" width="600">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 10px; padding-right: 10px; padding-top: 15px; padding-bottom: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:15px;">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="60%">
<tr>
<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #5A6BA8;"><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="156px">
<tr>

<center>
	
<button type="submit" style="text-decoration:none;display:inline-block;color:#091548;background-color:#ffffff;border-radius:24px;width:auto;border-top:1px solid #ffffff;border-right:1px solid #ffffff;border-bottom:1px solid #ffffff;border-left:1px solid #ffffff;padding-top:5px;padding-bottom:5px;font-family:Varela Round, Trebuchet MS, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank">
<a href="index.php" >
<span style="padding-left:25px;padding-right:25px;font-size:15px;display:inline-block;letter-spacing:normal;"><span style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;">

<span data-mce-style="font-size: 15px; line-height: 30px;" style="font-size: 15px; line-height: 30px;">

<strong>Back to login</strong></span></span></span></a></button></center>

</tr>
</table>
</td>
</tr>
</table></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>!
</body>
</html>
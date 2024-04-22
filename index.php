<?php include "header_voter.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p style="margin-top:70px;"><center><legend style="background-image:url('download.jpg');padding:10px;"><font color='yellow' size='18'>This system allows all registered users to vote <br>for their favorite POLITICAL PARTY.<br>
In order to make a vote you have to register first<br> and then login.</font></legend></center>
    &nbsp;&nbsp;</p>
<?php include "footer.php";?>

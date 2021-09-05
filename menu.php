


<h3>Main Menu</h3>

<form method="post">
	<br/>
	<input type="submit" name="first" value="Get_Balance" style="cursor:per">

	<br/>
</form>

<br/>

<form method="post">
	<br/>
	<input type="submit" name="second" value="Top_up_Account" style="cursor:pointer"> 
	<br/>
</form>

<br/>

<form method="post">
	<br/>
	<input type="submit" name="third" value="Get_cash" style="cursor:pointer"> 
	<br/>
</form>

<br/>




<?php 
require_once 'atm.php';
$MyAtm = new Atm ();	
	var_dump($pincode);
	var_dump($MassivUserData);
	//var_dump($GLOBALS['MassivUserData']);
	//var_dump($GLOBALS['pincode']);
		
if(isset($_POST['first'])){
	echo $MyAtm->GetBalanace($pincode, $MassivUserData);
	echo "<h3> Get_Balance = first button was pressed </h3>";
}

 
if(isset($_POST['second'])){
	echo $MyAtm->TopUpAccount($pincode);
	echo "<h3> Top_up_Account = second button was pressed </h3>";
}

if(isset($_POST['third'])){
	echo $MyAtm->GetCash($pincode);
	echo "<h3> Get_cash = third button was pressed </h3>";
}


?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


	<h3> ATM </h3>




<h3>Authorisation Panel</h3>

<form method="post">
	input PinCode: <br/>
	<input type="text" name="log" maxlength="4" pattern="[1-9][0-9]{3}"> <br/><br/>
	<input type="submit" name="button" value="Confirm"  style="cursor:pointer"> <br/>
	
</form>

<br/>


<?php	
/**
 *   including virtual database
 */
require_once 'database.php';
require_once 'atm.php';


/**
 *  
 * 
 */



//getting from method POST inputed pincode

global $pincode;
global $log;
//var_dump($pincode);

if(!empty($_POST)){
		$log=$_POST['log'];
		$pincode = $log;
		/*$_SESSION['auth'] = $log;*/
    echo "<a href ='menu.php'> Go to Menu</a>";
		var_dump($pincode);
	}
	/*	else{
			return exit ('not correct');
		}*/

 
/**
 *  getting user data after input PINcode
 */


function filter($items, $func){
	$results = [];

	foreach ($items as $item) {
		if ($func($item)) {
		$results[] = $item;
		}
	}
		return $results;
};
global $MassivUserData;
$MassivUserData = filter($users, function($user){
 return $user['pincode'] === $GLOBALS['pincode'];

});
var_dump ($MassivUserData);
var_dump($pincode);

//$GLOBALS['MassivUserData'] = $MassivUserData;
//$GLOBALS['pincode'] = $pincode;
//var_dump ($GLOBALS['MassivUserData']);
//var_dump ($GLOBALS['pincode']);
/**
 *  Call Getbalance method from new object
 */
$MyAtm = new Atm ();
echo $MyAtm->GetBalanace($pincode, $MassivUserData);






/* -------------------------------- 

//var_dump($MassivUserData[0]['name']);
//var_dump($MassivUserData[0]['balance']);
/*$MassivUserData = [];
$key = [];
foreach ($users as $user) {

	foreach ($user as $key) {
		if($user['pincode'] === '1111'){
	$MassivUserData[] = $user;		
			}
	}
	if ($user['name']) {
	}
}
var_dump($MassivUserData);
var_dump($MassivUserData);
*/


?>
	






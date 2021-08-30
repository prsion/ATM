<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	

	<h3> ATM </h3>




<h3>Authorisation Panel</h3>

<form method="post">
	input PinCode: <br/>
	<input type="text" name="log" maxlength="4" pattern="[1-9][0-9]{3}"> <br/><br/>
	<input type="submit" name="button" value="Confirm input"  style="cursor:pointer"> <br/>
</form>

<br/>


<?php	
/**
 *   including virtual database
 */
$path = dirname(__FILE__);
include($path . '/database.php');


/**
 *  
 * 
 */

class Atm {

public $pin;
public $Usermassiv;

public function GetBalanace($pin, $Usermassiv){

echo "<br>";
echo 'It`s PinCode getting of GetBalance Method =  '. $this->$pin=$pin;
echo "<br>";
echo "<br>";
echo 'your balance =  '.($Usermassiv[0]['balance']);
//echo "<br>";
//echo 'your name =  '.($Usermassiv[0]['name']);
//echo "<br>";
//echo 'your surname =  '.($Usermassiv[0]['surname']);



}


public function TopUpAccount($pin){
$this->$pin=$pin;
echo "<br>";
echo 'get of TopUpAccount Method'. $this->$pin=$pin;
/* here must be form input cash  */

}

public function GetCash($pin){
$this->$pin=$pin;
echo 'get of GetCash Method'. $this->$pin=$pin;

}


}

//getting from method POST inputed pincode

$pincode;
//var_dump($pincode);

if(!empty($_POST)){
		$log=$_POST['log'];
		$pincode = $log;
		$_SESSION['auth'] = $log;
		echo "<a href='menu.php'> Go to Menu</a>";
		var_dump($log);
	}
		else{
			return exit ('not correct');
		}



 
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

$MassivUserData = filter($users, function($user){
 return $user['pincode'] === $GLOBALS['pincode'];
});



/**
 *  Call Getbalance method from new object
 */
$MyAtm = new Atm ();
echo $MyAtm->GetBalanace($pincode, $MassivUserData);







/* -------------------------------- */

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







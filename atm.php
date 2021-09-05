<?php 
class Atm {

public $pin;
public $Usermassiv;

public function GetBalanace($pin, $Usermassiv){

echo "<br>";
echo 'It`s PinCode getting of GetBalance Method = '. $this->$pin=$pin;
echo "<br>";
echo "<br>";
echo 'your balance  =  '.($Usermassiv[0]['balance']);
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


?>
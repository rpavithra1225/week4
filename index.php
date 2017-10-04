<?php

$date =  date('Y-m-d', time());
main::printStr("The value of \$date: ".$date."<br>");

$tar = "2017/05/24";
main::printStr("The value of \$tar: ".$tar."<br>");

$year = array("2012", "396", "300","2000", "1100", "1089");
main::printStr("The value of \$year: ");
print_r($year);

/*------------------------Code for the assignment-------------------------------------*/
$str = "Hi Welcome";

$obj = new main();
$result = $obj->stringReplace($date);
$obj->stringCompare($result,$tar);
$obj->printPosition($result);
$obj->printWordCount($str);
$obj->printStrlen($str);
$obj->printAsciival($str);
$obj->printSubStr($date);
$obj->printDate($result);
$obj->printLeapYear($year);

class main {

public function __construct(){
	main::printStr("<br><br>Hi! This is assignment 4<br/>");
	
}

public function __destruct(){
	main::printStr("<br/><br/>Thank you!");
}
static public function printStr($str) {
		print_r($str);
}

public function stringReplace($date){
	$result = str_replace('-', '/', $date);
	main::printStr("<br/>2. Replaced '-' with '/': <br/>".$result. "<br/>");
	return $result;
}

public function stringCompare($result,$tar) {
	main::printStr("<br/>3. String comaprison: <br/>");
		$cmp =strcmp($result,$tar);
		if ($cmp > 0) {
			//$this->html .="The future <br/>";
			main::printStr("The future <br/>");
		} elseif ($cmp < 0) {
			//$this->html .="the past<br/>";
			main::printStr("The past <br/>");
		} else {
			//$this->html .="Oops<br/>";
			main::printStr("Oops <br/>");
		}

}
 
public function printPosition($result) {
	$pos = array();
	while (($p = strpos($result, '/', $p+1)) !== false) {
		$pos[] = $p ;
}
	main::printStr("<br/>4.The positions of '/' are:<br/>".implode(" ", $pos)."<br/>");
}

public function printWordCount($str) {

	main::printStr("<br/>5.No. of words in '$str:'<br/>".str_word_count($str)."<br/>");
}

public function printStrlen($str) {
	main::printStr("<br/>6.String length of '$str':<br/>".strlen($str)."<br/>");
}

public function printAsciival($str) {
	main::printStr("<br/>7.ASCII value of first character of '$str':<br/>".ord(substr($str,0))."<br>");
}

public function printSubStr($date) {
	main::printStr("<br/>8.The last two characters of '$date':<br/>".substr($date,-2)."<br/>");
}

public function printDate($result) {
	main::printStr("<br/>9.'$result' in array:<br/>".implode(" ", explode('/', $result))."<br>");
}

public function printLeapYear($year) {

	function printLeap($isleap,$val) {
	switch($isleap) {
		case 1:
		$leapres[]="<b>'$val'</b> is a leap year";
		break;
		default:
		$leapres[]="<b>'$val'</b> is not a leap year";
	}
	main::printStr(implode(" ", $leapres));
	}

	main::printStr("<br/>10a. Find leap year: Using foreach loop and switch case statements:<br/>");
	foreach ($year as $key => $val) {
		$isleap = (($val % 4) == 0) && ((($val % 100) != 0) || (($val % 400) == 0));
		printLeap($isleap,$val);
	}
	
	$leapres = array();
	main::printStr("<br/><br/>10b. Find leap year: Using for loop and switch case statements:<br/>");
	for ($i=0; $i < count($year); $i++) { 
		$isleap = (($year[$i] % 4) == 0) && ((($year[$i] % 100) != 0) || (($year[$i] % 400) == 0));
		printLeap($isleap,$year[$i]);
	}
}
}
?>
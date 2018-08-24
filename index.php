<!DOCTYPE html lang="en">
<head>
<title>Lommeregner</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="calc">
<h1>Lommeregner</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
	<input type="text" name="value1" placeholder="First number value"  /><br>
	<input type="texr" name="value2" placeholder="Second number value"  /><br>
	<button type="submit" name="operator" value="add">+</button>
	<button type="submit" name="operator" value="sub">-</button>
	<button type="submit" name="operator" value="mul">*</button>
	<button type="submit" name="operator" value="div">/</button>
</form>
<?php 

//$v1 = $_GET['value1'];
//$v2 = $_GET['value2'];
$v1 = filter_input(INPUT_GET, 'value1', FILTER_VALIDATE_INT) or die('illegal');
$v2 = filter_input(INPUT_GET, 'value2', FILTER_VALIDATE_INT) or die('illegal');
$op = $_GET['operator'];




switch($op){
	case 'add':
		$res = $v1 + $v2;
		$opchar = '+';
		break;
	case 'sub':
		$res = $v1 - $v2;
		break;
	case 'mul':
		$res = $v1 * $v2;
		break;
	case 'div':
		$res = $v1 / $v2;
		break;
	default:
		$res = 'Unknown operator "'.$op.'"';
		break;
}


echo $v1.' ' .$op.' '.$v2. ' = '.$res;
	

?>
</div>
</body>
	
</html>
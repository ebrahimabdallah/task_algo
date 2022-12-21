<?php
if(isset($_POST['submit']))

$n1=$_POST['num1'];
$n2=$_POST['num2'];
$n3=$_POST['num3'];
$n4=$_POST['num4'];
$n5=$_POST['num5'];
$n6=$_POST['num6'];

function merge_sort($my_array){
	if(count($my_array) == 1 ) return $my_array;
	$mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
	$left = merge_sort($left);
	$right = merge_sort($right);
	return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
}
$test_array = array( $n1, $n2, $n3, $n4, $n5, $n6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity
="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

<center>
    <h1> <u>Result</u></h1>
	<br>
	<br>
<label for=""> Before Sorted </label>

 <input type="text" readonly  value=" <?php
echo implode('   ',$test_array ); ?> ">   
<br><br>
<label for="">Sorted Array</label>
<input type="text" readonly  value="
<?php
echo implode('   ',merge_sort($test_array))."\n"; ?> ">
<br><br>
<a href="home.html">Back Page Home</a>
</center>
</head>
<body>
    
</body>
</html>


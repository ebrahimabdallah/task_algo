<?php
if(isset($_POST['submit']))

$n1=$_POST['num1'];
$n2=$_POST['num2'];
$n3=$_POST['num3'];
$n4=$_POST['num4'];
$n5=$_POST['num5'];
$n6=$_POST['num6'];

 function insertion_Sort($my_array)
{
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array($n1,$n2,$n3,$n4,$n5,$n6 );


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
	<br><br>
<label for=""> Before Sorted </label>

 <input type="text" readonly value=" <?php
echo implode('   ',$test_array ); ?> ">   
<br><br>
<label for="">Sorted Array</label>
<input type="text"  readonly value="
<?php
echo implode('   ',insertion_Sort($test_array))."\n"; ?> ">
<br><br>
<a href="home.html">Back Page Home</a>
</center>
</head>
<body>
    
</body>
</html>




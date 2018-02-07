<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="exercise3.php" method="post">
      
        <input type="text" name="No1">
    
        <input type="text" name="No2">
        
        <input type="submit" name="submit">
    </form>

<?php  
if (isset($_POST['submit'])) {
	devide(intval($_POST['No1']),intval($_POST['No2']));
}
 function devide($num1, $num2){
 	$result = $num1 / $num2;
 	echo "The result is $result";
 }

 // devide(20,10);

?>
</body>
</html>
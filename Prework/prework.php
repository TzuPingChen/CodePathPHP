<html>
<head>
	<title>Tips</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style= "background-color: powderblue;">

<h2>Tip Calculator</h2>
<form action="prework.php" method="POST">       
    Bill:
    <input type="text" name="Money" value="0" /><br>
    Tips:<br>
    <input type="radio" name="tips" value="0.1">10%<br>
    <input type="radio" name="tips" value="0.15">15%<br>
    <input type="radio" name="tips" value="0.2">20%<br>
         
    <input type="submit" value="Calculate">
         

        
</form>

<?php 
if(isset($_POST["Money"])){
    if(is_numeric($_POST["Money"])){
    	if(isset($_POST["tips"])){
			$selectoption = $_POST["tips"];

			$money = $_POST["Money"];

			$tipsonly = $money * $selectoption;
			$totalpayment = $money * ($selectoption+1) ;
			echo "Tips :".$tipsonly."__";
			echo "Total payment :".$totalpayment;
		}else echo "please select your tip option";	
    }else echo "Please enter a valid number";
}else echo "please type your bill";
?>

</body>
</html>
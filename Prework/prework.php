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
    <input type="radio" name="tips" value="0">Tips(%):<input type="text" name="custom" value = "0"><br>
         
    <input type="submit" value="Calculate">
         

        
</form>

<?php 
if(isset($_POST["Money"])){
    if(is_numeric($_POST["Money"])){
    	if(isset($_POST["tips"])){
			$selectoption = $_POST["tips"];
			$money = $_POST["Money"];

            if($selectoption == 0){
                if (is_numeric($_POST["custom"])&&$_POST["custom"]>=0){
                    $selectoption = ($_POST["custom"]/100);
                    $tipsonly = $money*$selectoption;
                    $totalpayment = $money*($selectoption+1);
                }else{
                    echo '<p>'."Please enter a valid number of tip "."</p>\n";
                    $tipsonly = "Error!(Custom tip should be numbers larger(equal) to 0)";
                    $totalpayment = "Error!(Custom tip should be numbers larger(equal) to 0)";
                }
            }else{
			$tipsonly = $money * $selectoption;
			$totalpayment = $money * ($selectoption+1) ;
            }
            echo '<p>'."Your input Bill :".$_POST["Money"]."</p>\n";
            echo '<p>'."Your tip % :".$selectoption."</p>\n";
			echo '<p>'."Tips :".$tipsonly."</p>\n";
			echo "Total payment :".$totalpayment;
		}else echo "please select your tip option";	
    }else echo "Please enter a valid bill number";
}else echo "please type your bill";
?>

</body>
</html>

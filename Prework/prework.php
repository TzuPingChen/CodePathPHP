<html>
<head>
	<title>Tips</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style= "background-color: powderblue;">

<h2>Tip Calculator</h2>
<?php 
$returnStyle1 = "border: 1px solid black";
$returnStyle2 = "border: 1px solid black";
$returnStyle3 = "border: 1px solid black";
$returnStyle4 = "border: 1px solid black";

if(isset($_POST["Money"])){
    if(is_numeric($_POST["Money"])){
        if(isset($_POST["tips"])){
            if(is_numeric($_POST["Split"])and $_POST["Split"]!=0){
                
                $selectoption = $_POST["tips"];
                $money = $_POST["Money"];
                $person = $_POST["Split"];

                if($selectoption == 0){
                    if (is_numeric($_POST["custom"])&&$_POST["custom"]>=0){
                        $selectoption = ($_POST["custom"]/100);
                        $tipsonly = $money*$selectoption;
                        $totalpayment = $money*($selectoption+1);
                    }else{
                        echo '<p>'."Please enter a valid number of tip "."</p>\n";
                        $returnStyle4 = "background-color:red";
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
                echo "Total payment :".$totalpayment."</p>\n";
                echo "Each person should pay:".$totalpayment/$person;
                $returnStlye1 = "border: 1px solid green";
                $returnStlye2 = "border: 1px solid green";
                $returnStlye3 = "border: 1px solid green";
                $returnStlye4 = "border: 1px solid green";

            }else {echo "please Enter a valid number of person";
            $returnStyle2 = "background-color: red;";}
		}else {echo "please select your tip option";
        $returnStyle1 = "border: 1px solid red";   }
    }else {echo "Please enter a valid bill number";
    $returnStyle3 = "background-color: red;";}
}else {echo "please type your bill";}
?>
<form action="prework.php" method="POST">       
    Bill:
    <input type="text" name="Money" style="<?php echo $returnStyle3; ?>" value="0" /><br>
    <p style="<?php echo $returnStyle1; ?>">Tips:<br>
    <input type="radio" name="tips" value="0.1">10%<br>
    <input type="radio" name="tips" value="0.15">15%<br>
    <input type="radio" name="tips" value="0.2">20%<br>
    <input type="radio" name="tips" value="0">Tips(%):<input type="text" name="custom" style="<?php echo $returnStyle4; ?>" value = "0"><br></p>
    Split: <input type="text" name="Split" style="<?php echo $returnStyle2; ?>" value="1"/>person(s)<br><br>    
    <input type="submit" value="Calculate">


        
</form>

</body>
</html>

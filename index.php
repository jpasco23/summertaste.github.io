<html>
<head></head>


<style> body{
	font-family: inherit;	
	background-image: url();
background-repeat: cover;
}
        .content {
             margin-top: 50px;
             background-color: ;
             width: 50%;
             text-align: center;
           	align-items: center;
           	margin-left: 300px;
        }

       
</style>
<body>
	<form acton ="" method="POST">
	<div class="content">
	<center><h1>Item Order</h1></body></center>
		<hr>
		<center><h2>Using Php Functions</h2>
<hr>

	<table border="0"  >

	<tr><td align="center">Please Choose your Order: </td></tr>

		<tr>
				<td></td>

				<td align="left">Item</td>

	        	 <td align="left">Price</td>

	     </tr>

<tr>
		<td></td>
		<td>
			<input type = "radio" name ="order" value="Capp">Cappuccino<br>
			<input type = "radio" name ="order" value="Esp">Esppreso<br>
			<input type = "radio" name ="order" value="Latte">Latte<br>
			<input type = "radio" name ="order" value="Icca">Iced Cappuccino<br>
			<input type = "radio" name ="order" value="Icla">Iced Latte<br></td>
			<td>
				$2.00<br>
				$2.25<br>
				$1.75<br>
				$2.50<br>
				$2.50</td><br>
	
</tr>
<br>
<tr>
		<td></td>
		<td align="center">Enter Quantity:<input type = "text" name ="qty" value=""></td>
</tr>
<br>
<tr>
		<td></td>
		<td align="right">Would you like to dine in or take out your order:</td>
		<td><input type = "radio" name ="type" value="dn">Dine In</td>
		<td><input type = "radio" name ="type" value="to">Take Out</td></tr>
<tr>
		<td></td>

		<td align="center"><input type = "submit" name ="sub" value="submit"></td>

</tr>

<?php

function price ($order){
	switch($order){

	  case 'Capp': $price = 2.00;
	   break;
	  case 'Esp' : $price = 2.25; 
	  break;
	  case 'Latte' : $price = 1.75;
	   break;
	  case 'Icca' : $price = 2.50;
	   break;
	  case 'Icla' : $price = 2.50;
	   break;
	}
	return $price;
}

function calcTotal ($price, $qty, $type){
	
	$total = $qty * $price;

	return $total;
}
function calcTax($price, $qty, $type){

	$tax = 0.12;

	$total = ($price * $qty) + ($price * $qty ) * $tax;

	return $total;
}	
	
?>


<?php

if (isset($_POST['sub'])){

$a = $_POST ['order'];
$getPrice = price ($a);
$qty = $_POST['qty'];
$type = $_POST['type'];
		if($type == 'dn'){
			$total = calcTotal($getPrice, $qty, $type);
	}
		else{
			$total = calcTax($getPrice, $qty, $type);
	}


	echo "<td colspan='4' align='center'>";
	echo "<center>";
	echo "<font color='red'>The total price is $total";
	echo "</center>";
	echo "</td>";

	}
?>
</form>
</div>
</body>
</html>
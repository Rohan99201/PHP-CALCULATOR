<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR USING PHP</title>
	<style>
		body{
			
			
			color:black;
			
		}
		.btn{
			margin-right: 4px;
			margin-top: 8px;
			width:100px;
			color:black;
			background-color: #FA8BFF;
			background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);

		}

		.answer{
			margin:6px;
			box-shadow: 20px;
			font: 20px;
			

		}
		b{
			font-size: 40px;
			color: black;
			
		}
		.mydiv{
			background-color: black;
			padding :15px;
			border:outset;
			color:black;
			border-width: 2px;
			margin:25px;
			border-radius: 15px;
			background-color: #FA8BFF;
			background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);

		}
		.answer{
			background-color:black;
			padding:10px; 
			border-radius: 50px;
			background-color: #FA8BFF;
background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);

		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#2BD2FF;">
	<div class='container'>
		
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-black rounded mydiv">
				<h1><b><center>CALCULATOR USING PHP</center></b></h1>
		<form method="get" action="" class="mydiv">
			<center>
			<input type="text" class='form-control' name="num1" placeholder="ENTER NUMBER ONE"><br>
			<input type="text" class='form-control' name="num2" placeholder="ENTER NUMBER TWO"><br>
			<button class='btn btn-primary' type="submit" name="add" style="background-color:#2BD2FF;">Add</button>
			<button class='btn btn-primary' type="submit" name="sub" style="background-color:#FAB8FF;">Sub</button>
			<button class='btn btn-primary' type="submit" name="mul" style="background-color:#FF9A8B;">Mul</button>
			<button class='btn btn-primary' type="submit" name="div" style="background-color:#FF5ACD;" >Div</button>	
			<button class='btn btn-primary' type="submit" name="mod" style="background-color:#FBDA61;" >Mod</button>	
			<button class='btn btn-primary' type="submit" name="square-root" style="background-color:#B721FF;">Sqrt()</button>	
			<button class='btn btn-primary' type="submit" name="sin" style="background-color:#21D4FD;">Sin()</button>	
			<button class='btn btn-primary' type="submit" name="sinh" style="background-color:#B5FFFC;">Sinh()</button>
			<button class='btn btn-primary' type="submit" name="cos" style="background-color:#FF2525;">Cos()</button>	
			<button class='btn btn-primary' type="submit" name="cosh" style="background-color:#FFDEE9;">Cosh()</button>
			<button class='btn btn-primary' type="submit" name="tan" style="background-color:#2AF598;">Tan()</button>	
			<button class='btn btn-primary' type="submit" name="tanh" style="background-color:#08AEEA;">Tanh()</button>
			<button class='btn btn-primary' type="submit" name="log" style="background-color:#FFE32C;">Log()</button>
			<button class='btn btn-primary' type="submit" name="log10" style="background-color:#3EECAC;">Log10()</button>
			<button class='btn btn-primary' type="submit" name="exp" style="background-color:#EE74E1;">Exp()</button>
			<button class='btn btn-primary' type="submit" name="pow" style="background-color:#16A085;">Pow()</button>
			<button class='btn btn-primary' type="submit" name="decbin" style="background-color:#F76B1C;">Decbin()</button>
			<button class='btn btn-primary' type="submit" name="dechex" style="background-color:#FA709A;">Dechex()</button>
			<button class='btn btn-primary' type="submit" name="decoct" style="background-color:#784BA0;">Decoct()</button>
			<button class='btn btn-primary' type="submit" name="hexdec" style="background-color:#FF3CAC;">Hexdec()</button>
					
		</center>
		</form>
		<br>
	

	
<div class='answer'>
	<center>
<?php

	if(isset($_REQUEST['add'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$add = $num1+$num2;
		echo "<b>OUTPUT IS : ".$add."</b>";
	}
	else if(isset($_REQUEST['sub'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$sub = $num1-$num2;
		echo "<b>OUTPUT IS : ".$sub."</b>";
	}
	else if(isset($_REQUEST['mul'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$mul = $num1*$num2;
		echo "<b>OUTPUT IS: ".$mul."</b>";
	}
	else if(isset($_REQUEST['div'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$div = $num1/$num2;
		echo "<b>OUTPUT IS : ".$div."</b>";
	}
	else if(isset($_REQUEST['mod'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$sub = $num1%$num2;
		echo "<b>OUTPUT IS : ".$sub."</b>";
	}
	else if(isset($_REQUEST['square-root'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sqrt($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['sin'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sin($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['sinh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sinh($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['cos'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = cos($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['cosh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = cosh($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['tan'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = tan($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['tanh'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = tanh($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['log'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = log($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['log10'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = log10($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['exp'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = exp($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['pow'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = pow($num1,$num2);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['decbin'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = decbin($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['dechex'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = dechex($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['decoct'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = decoct($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['hexdec'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = hexdec($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
	else if(isset($_REQUEST['octdec'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = octdec($num1);
		echo "<b>OUTPUT IS : ".$out."</b>";
	}
?>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<html>
	<head>
		<style>
			body{
			background:black;
			}
			form{
				height:300px;
				width:300px;
				border:2px solid skyblue;
				border-radius:10px;
				background:black;
				margin-top:150px;
				margin-left:450px;


			}
			.in1{
               height:35px;
               width:200px;
               border-radius:10px;
               background:black;
               border:2px solid skyblue;
               color:white;
               margin-top:80px;
               margin-left:40px;
			}
			.in1::placeholder{
				color:blue;
			}
			.in2{
               height:35px;
               width:200px;
               border-radius:10px;
               background:black;
               color:white;
               border:2px solid skyblue;
               margin-left:40px;
               margin-top:10px;
			}
			.in2::placeholder{
				color:blue;
			}
			button{
				height:30px;
				width:100px;
				background:black;
				border:2px solid blue;
				border-radius:10px;
				color:white;
				margin-left :87px;
				margin-top :10px;

			}
			
			</style>
</head>
	<body>
		<h4>Login</h4>
		<form method="POST">
		<input class="in1" type="text" placeholder="Username" name="name">
		<input class="in2" type="text" placeholder="Password" name="password">
		<button>Submit</button>
</form>

<?php

//Create connection
$conn = new mysqli("localhost","root", "","log");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "<h2>Connected successfully</h2>";
}

$a=$_POST["name"];
$b=$_POST["password"];
$s1 = "SELECT  name,pass FROM login";
$result = $conn->query($s1);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()) {
		echo    $row["name"]. " " . $row["pass"]. "<br>";
		
		$c=$row["name"];
		$d=$row["pass"];
		if($c==$a){
			if($d==$b){
				header("Location:welcome.php");
			}
		}
		else{
			header("Location:err.php");
		}
		
	
		
	}
}



?>
		<body>
	</html>


<?php
   	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//创建连接
	$conn = mysqli_connect('localhost','root','my45638my','login') or die('不能连接到数据库').mysqli_error();

	$selectSQL = "SELECT * FROM logini WHERE username = '$username' and password = '$password'";

	$result = mysqli_query($conn,$selectSQL);

	$num = mysqli_num_rows($result);

	if($num == 1){

		echo json_encode(array("error" => 0,"data" =>"登陆成功"));
	}else{
		echo json_encode(array("error" => 1,"data" =>"登陆失败"));
	}
	
>
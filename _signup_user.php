<?php 

	include '_conection.php';

	// valores dos atributos
	$FirstName = $_POST['userName'];
	$LastName = $_POST['userLastName'];
	$Login = $_POST['userLogin'];
	$email = $_POST['email'];
	$password = $_POST['userPass'];
	$status = "invativo";
		
	
	$sql = "INSERT INTO loja.client_user (firstName,lastName,login,email,passwordUser,status)
		values ('$FirstName','$LastName','$Login','$email','$password','$status')";

	$insert = mysqli_query($conection,$sql);

?>
 <!-- bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


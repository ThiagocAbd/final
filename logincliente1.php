<?php
session_start();

   $conn = mysqli_connect('localhost', 'root', '', 'comercio') ;

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from usuario where email='$email' and senha='$senha'";

$resultado = mysqli_query($conn, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	
	        header("location: formulario.php");
	     
} else {
	echo "<script>
	        alert('Usuário não encontrado');
	        location.href='login.php';
	      </script>";
}

?>
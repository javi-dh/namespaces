<?php
	namespace Test;

	require_once 'User.php';
	require_once 'UserV2.php';

	use \Usuarios\Admin\Usuario as Admin;
	use \Usuarios\Cliente\Usuario as Cliente;

	$miUsuarioAdmin = new Admin();
	$miUsuarioCliente = new Cliente();

	echo $miUsuarioAdmin->sayHello();
	echo "<br>";
	echo $miUsuarioCliente->sayHello();
	echo "<br>";

	echo "Este namespace se llama:" . __NAMESPACE__;

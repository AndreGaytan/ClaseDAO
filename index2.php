<?php
require_once 'DAOUsuario.php';
$dao = new DAOUsuario();
$usuario = $dao->getUsuario(3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo DAO</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <tbody>
                <tr>
                  <td><?php echo $usuario->getUserID(); ?></td>
                  <td><?php echo $usuario->getUsername(); ?></td>
                  <td><?php echo $usuario->getPwd(); ?></td>
                  <td><?php echo $usuario->getNombre(); ?></td>
                  <td><?php echo $usuario->getApellido(); ?></td>
                </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>
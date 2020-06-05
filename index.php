<?php
require_once 'DAOUsuario.php';
$dao = new DAOUsuario();
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
            <?php foreach ($dao->getUsuarios() as $u) { ?>
                <tr>
                  <td><?php echo $u->getUserID(); ?></td>
                  <td><?php echo $u->getUsername(); ?></td>
                  <td><?php echo $u->getPwd(); ?></td>
                  <td><?php echo $u->getNombre(); ?></td>
                  <td><?php echo $u->getApellido(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </thead>
    </table>
</body>
</html>
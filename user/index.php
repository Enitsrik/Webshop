<?php

require_once "products.php";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
<style>
    table{

    }
</style>
</head>
<table style="border: 1px solid black; "></table>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
</thead>
<tbody>
<?php
foreach ($users as $user){

    echo '<tr>
            <td>' . $user->getName() .'</td>
            <td>' . $user->getEmail() .'</td>
            <td>' . $user->getPhone() .'</td>
            <td>' . $user->getAddress() .'</td>
        </tr>';
}
?>

</tbody>
</table>

<body>

</body>
</html>
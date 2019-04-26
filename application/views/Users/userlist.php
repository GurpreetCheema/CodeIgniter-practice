<html>
    <head>
        <title>Users details</title>
</head>
<body>
<h1>User Account Details</h1>
<table>
    <tr>
        <td>First name</td>
        <td>Account No</td>
</tr>
<?php foreach($users as $user):    ?>
</tr>
<td><?php echo $user['Firstname']; ?></td>
<td><?php echo $user['AccountNO']; ?></td>
</tr>
<?php endforeach; ?>


</table>
</body>
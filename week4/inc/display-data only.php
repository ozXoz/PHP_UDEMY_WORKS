<?php

require "data.info.php"


?>;





<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>functions</title>
    <meta name="description" content="Working with functions">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>




<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>First</th>
        <th>Last</th>
        <th>User</th>
        <th>Status</th>
        <th>Client</th>
    </tr>
    </thead>
    <tbody>

    <?php
////// eger data ulasmak istiyorsan mecbur global kullanmak zorundasin.
    global $userss;
    foreach($userss as $user): ?>

        <tr>
            /// econunn kisa hali
            <td><?= $user["id"]?></td>
            <td><?= $user["f_name"]?></td>
            <td><?= $user["l_name"]?></td>
            <td><?= $user["user_type"]?></td>
            <td><?= $user["status"]?></td>
            <td><?= $user["client"]?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?>


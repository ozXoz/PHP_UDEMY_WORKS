<?php

require "data.info.php";
require "function.info.php";
if(count($_GET) > 0){
    global $userss;
    foreach($_GET as $key => $val){
        $val = filter_input(INPUT_GET, $key, FILTER_SANITIZE_STRING);
        if($val && array_key_exists($key, $userss[0])){
            get_filtered($key, $val);
        }
    }
}

?>



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
<form>
    <label for="user_type">Filter by:</label>
    <select name="user_type" id="user_type">

        <option value="">Filter by</option>
        <?php
        global $user_types;
        foreach($user_types as $type){
            echo "<option value=\"$type\">". ucfirst($type) . "</option>";
        }
        ?>



    </select>
    <select name="status">


        <option value="">Filter by</option>

        <?php
        global $statuses;
        foreach($statuses as $status){
            echo "<option value=\"$status\">". ucfirst($status) . "</option>";
        }
        ?>



    </select>

    <input type="submit" value="Submit">





</form>
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

    global $userss;
    foreach($userss as $user): ?>

        <tr>

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


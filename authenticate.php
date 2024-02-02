<?php
$user_type = $_POST['user_type'];
$uid = $_POST['uid'];

if (strlen($uid) == 8 && substr($uid, 0, 2) === "PA" && $user_type === "PA") {
    $dashboard = "PA Dashboard";
} elseif (strlen($uid) == 8 && substr($uid, 0, 2) === "ST" && $user_type === "ST") {
    $dashboard = "ST Dashboard";
} elseif (strlen($uid) == 6 && substr($uid, 0, 2) === "SA" && $user_type === "SA") {
    $dashboard = "SA Dashboard";
} elseif (strlen($uid) == 5 && substr($uid, 0, 2) === "FA" && $user_type === "FA") {
    $dashboard = "FA Dashboard";
} elseif (strlen($uid) == 6 && substr($uid, 0, 2) === "AD" && $user_type === "AD") {
    $dashboard = "AD Dashboard";
} else {
    $dashboard = "Invalid UID or User Type";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Identification Result</title>
</head>
<body>
    <h2>User Identification Result</h2>
    <p>User Type: <?php echo $user_type; ?></p>
    <p>Dashboard: <?php echo $dashboard; ?></p>
</body>
</html>

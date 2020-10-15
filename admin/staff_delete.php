<?php
    require '../constants.php';

    if( !isset($_GET['staff_id']) || $_GET['staff_id'] === "" ) {
        exit("You have reached this page by mistake");
    }

    if( filter_var($_GET['staff_id'], FILTER_VALIDATE_INT) ) {
        $staff_id = $_GET['staff_id'];
    } else {
        exit("Incorrect value has passed");
    }

    
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Delete</title>
</head>
<body>
    
</body>
</html>
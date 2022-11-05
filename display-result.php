<?php

// get the data from the form
//var_dump($_GET);

//var_dump($_POST);
if(isset($_GET['register'])) {
    $email = $_GET['email'];
    if($email == ''){
        header('location: index.php?error=please enter email');
        echo "Please enter email";
    } else {
        echo $email;
    }

}
// get the rest of the data for the form

// for the heard_from radio buttons,
// display a value of 'Unknown' if the user doesn't select a radio button

// for the wants_updates check box,
// display a value of 'Yes' or 'No'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<div id="content">
    <h1>Account Information</h1>

    <label>Email Address:</label>
    <span></span><br />

    <label>Password:</label>
    <span><!-- add PHP code here--></span><br />

    <label>Phone Number:</label>
    <span></span><br />

    <label>Heard From:</label>
    <span></span><br />

    <label>Send Updates:</label>
    <span></span><br />

    <label>Contact Via:</label>
    <span></span><br /><br />

    <span>Comments:</span><br />
    <span></span><br />

    <p>&nbsp;</p>
</div>
</body>
</html>

<?php

// get the data from the form
//var_dump($_GET);

//var_dump($_POST);
$emailerr ='';
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    if($email == ''){
        //header('location: index.php?error=please enter email');
        $emailerr = "Please enter email";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $emailerr = "Please enter valid email";
    }

        else {
        }
        echo $email;


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
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<div id="content">
    <h1>Account Sign Up</h1>
    <?php

        echo htmlspecialchars($email);


    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Account Information</legend>
            <label>E-Mail:</label>
            <input type="text" name="email" value="<?= isset($email) ? $email : '' ; ?>" class="textbox"/>
            <span style="color:red;"><?= isset($emailerr) ? $emailerr : '' ; ?></span>
            <br />
            <label>Password:</label>
            <input type="password" name="password"  class="textbox"/>
            <span style="color:red;"></span>
            <br />
            <label>Phone Number:</label>
            <input type="text" name="phone" value="" class="textbox"/>
        </fieldset>
        <fieldset>
            <legend>Settings</legend>
            <p>How did you hear about us?</p>
            <input type="radio" name="heard_from" value="Search Engine" />
            Search engine<br />
            <input type="radio" name="heard_from" value="Friend" />
            Word of mouth<br />
            <input type=radio name="heard_from" value="Other" />
            Other<br />
            <p>Would you like to receive announcements about new products
                and special offers?</p>
            <input type="checkbox" name="wants_updates"/>YES, I'd like to receive
            information about new products and special offers.<br />
            <p>Contact via:</p>
            <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
            </select>
            <p>Comments:</p>
            <textarea name="comments" rows="4" cols="50"></textarea>
        </fieldset>
        <input type="submit"  name="register" value="Submit" />
    </form>
    <br />
</div>
</body>
</html>

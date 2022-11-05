<?php
function display_navigation($nav_array){
    //print_r($nav_array);
    echo "<ul>";
    foreach ($nav_array as $x => $x_value) {
        echo "<li><a href='".$x_value."'>".$x."</a></li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

<?php
$nav_array = array("Home"=>"index.php","About"=>"about.php","Contact"=>"contact.php");
display_navigation($nav_array);
?>

<h2>Vertical Navigation</h2>
<p>This example shows how to create vertical navigation with a gray background color.</p>

</body>
</html>
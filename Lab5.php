<?php
// Connect to database
$dbname = 'car';
$user = 'root';
$pass = '';
$dsn = "mysql:host=localhost;dbname=$dbname";

$db = new PDO($dsn, $user, $pass);
// Get all cars
$query = $db->prepare("SELECT * FROM car ORDER BY type ASC");
$query->execute();
$cars = $query->fetchAll(PDO::FETCH_OBJ);

// Insert car
if(isset($_POST['type']) && isset($_POST['brand']) && isset($_POST['year'])) {
    $type = trim($_POST['type']);
    $brand = trim($_POST['brand']);
    $year = (int)trim($_POST['year']);

    $query = $db->prepare("INSERT INTO car (type, brand, year) VALUES (:type, :brand, :year)");
    $query->bindParam(':type', $type);
    $query->bindParam(':brand', $brand);
    $query->bindParam(':year', $year);
    $query->execute();

    header('Location: index.php');
    die;
}

// Update car
if(isset($_POST['id']) && isset($_POST['type']) && isset($_POST['brand']) && isset($_POST['year'])) {
    $id = (int)$_POST['id'];
    $type = trim($_POST['type']);
    $brand = trim($_POST['brand']);
    $year = (int)trim($_POST['year']);

    $query = $db->prepare("UPDATE cars SET type = :type, brand = :brand, year = :year WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->bindParam(':type', $type);
    $query->bindParam(':brand', $brand);
    $query->bindParam(':year', $year);
    $query->execute();

    header('Location: index.php');
    die;
}

// Delete car
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $query = $db->prepare("DELETE FROM car WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->execute();

    header('Location: index.php');
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
</head>
<body>

<h1>Cars</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>type</th>
        <th>brand</th>
        <th>Year</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($cars as $car): ?>
        <tr>
            <td><?php echo $car->id; ?></td>
            <td><?php echo $car->type; ?></td>
            <td><?php echo $car->brand; ?></td>
            <td><?php echo $car->year; ?></td>
            <td>
                <a href="index.php?id=<?php echo $car->id; ?>">Edit</a>
                <a href="index.php?id=<?php echo $car->id; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h2>Add Car</h2>

<form action="" method="post">
    <div>
        <label for="type">type</label>
        <input type="text" name="type">
    </div>
    <div>
        <label for="brand">brand</label>
        <input type="text" name="brand">
    </div>
    <div>
        <label for="year">Year</label>
        <input type="text" name="year">
    </div>
    <div>
        <input type="submit" value="Add Car">
    </div>
</form>

<?php if(isset($_GET['id'])): ?>
    <?php
    $id = (int)$_GET['id'];

    $query = $db->prepare("SELECT * FROM cars WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $car = $query->fetch(PDO::FETCH_OBJ);
    ?>

    <h2>Edit Car</h2>

    <form action="" method="post">
        <div>
            <label for="type">type</label>
            <input type="text" name="type" value="<?php echo $car->type; ?>">
        </div>
        <div>
            <label for="brand">brand</label>
            <input type="text" name="brand" value="<?php echo $car->brand; ?>">
        </div>
        <div>
            <label for="year">Year</label>
            <input type="text" name="year" value="<?php echo $car->year; ?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $car->id; ?>">
            <input type="submit" value="Update Car">
        </div>
    </form>
<?php endif; ?>

</body>
</html>
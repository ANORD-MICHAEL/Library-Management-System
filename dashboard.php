
<?php

session_start();

include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location:index.php");
    exit();
}

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <h1>Library Dashboard</h1>
    <p>Welcome <?php echo $_SESSION['username']; ?></p>

    <br>

    <a href="logout.php" class="logout">Logout</a>

</header>

<div class="dashboard">

    <h2>Available Books</h2>

    <br>

    <div class="books-container">

        <?php while($book = mysqli_fetch_assoc($result)) { ?>

        <div class="book-card">

            <h3><?php echo $book['title']; ?></h3>

            <p><strong>Author:</strong> <?php echo $book['author']; ?></p>

            <p><strong>Year:</strong> <?php echo $book['publication_year']; ?></p>

            <p><strong>Batch Number:</strong> <?php echo $book['batch_number']; ?></p>

            <p><strong>Supervisor Number:</strong> <?php echo $book['supervisor_number']; ?></p>

            <p><strong>Status:</strong> <?php echo $book['status']; ?></p>

            <button class="borrow-btn">Borrow Book</button>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>


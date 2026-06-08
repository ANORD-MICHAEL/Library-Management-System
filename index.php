
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>
    <h1>Library Management System</h1>
    <p>Welcome to Online Library Services</p>
</header>

<div class="login-container">

    <h2>Student Login</h2>

    <form action="login.php" method="POST">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
        </div>

        <button type="submit" class="btn">Login</button>

    </form>

</div>

</body>
</html>


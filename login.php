
<?php

session_start();

include 'db.php';

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: dashboard.php");
        exit();

    }else{

        echo "
        <script>
            alert('Invalid Username or Password');
            window.location.href='index.php';
        </script>
        ";

    }

}

?>

